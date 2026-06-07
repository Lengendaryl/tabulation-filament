<?php

namespace App\Filament\Judge\Pages;

use App\Enums\ContestType;
use App\Enums\Round;
use App\Events\JudgeSubmittedEvent;
use App\Models\Criteria as ModelsCriteria;
use App\Models\JudgesGroup;
use App\Models\Result;
use App\Models\Score;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\On;

class Criteria extends Page
{
    protected string $view = 'filament.judge.pages.criteria';
    protected ?string $heading = '';
    protected static bool $shouldRegisterNavigation = false;
    public string $activeTab;
    public  $allCriteria;
    public array $submittedCategories = [];
    public array $scores = [];
    private $ranks = [];
    public ?int $criteriaId = null;
    public ?int $contestId  = null;
    public array $tabLabels = [];
    private string $level;
    private string $contestCategory;
    private bool $status;
    public int $userId;
    public array $grandFinalParticipants = [];

    #[On('echo-private:judge.{userId},.JudgeSubmittedEvent')]
    public function granted()
    {
        Notification::make()
            ->title('Request Granted')
            ->color('success')
            ->body('You can now edit the score.')
            ->send();
    }
    public function mount()
    {
        // Fetch your data here
        $this->criteriaId = request('criteria');

        $this->allCriteria = ModelsCriteria::where('id', $this->criteriaId)->with(['contest.participants'])->get();
        $this->userId = Auth::id();

        if ($this->allCriteria->isEmpty()) return;

        $this->contestId =  $this->allCriteria->first()->contest_id;

        $grandFinalResult = Result::where('contest_id', $this->contestId)->where('criteria_id', $this->criteriaId)
            ->where('contest_category', 'Top Finalist')
            ->first();

        if ($grandFinalResult) {
            $this->grandFinalParticipants = collect($grandFinalResult->result)
                ->groupBy('gender')
                ->flatMap(fn($group) => $group->sortBy('grand_final_rank')->take(3))
                ->pluck('participant.id')
                ->toArray();
        }


        foreach ($this->allCriteria->first()->criteria as $item) {
            $content = $item['data']['content'];
            $this->tabLabels[Str::slug($content)] = $content;
        }

        $firstContent = $this->allCriteria->first()->criteria[0]['data']['content'];

        $this->activeTab = Str::slug($firstContent);

        $this->loadScoresByTab($this->activeTab);

        $record = Score::where('judge_id', $this->userId)
            ->where('contest_id', $this->contestId)
            ->where('contest_category', $this->tabLabels[$this->activeTab])
            ->where('criteria_id', $this->criteriaId)
            ->first();

        if ($record && !empty($record->score)) {
            foreach ($record->score as $item) {
                $category = Str::slug($item['contest_category']);
                $pId = $item['participant_id'];
                $this->scores[$category][$pId] = $item['scores'];
            }
        }
    }
    public function isSubmitted(string $category): bool
    {
        $group = JudgesGroup::where('criteria_id', $this->criteriaId)->first();

        if (!$group) return false;

        foreach ($group->judges ?? [] as $levelGroup) {
            if (Str::slug($levelGroup['content'] ?? '') !== Str::slug($category)) {
                continue;
            }

            foreach ($levelGroup['judges'] ?? [] as $judge) {
                if (($judge['judge_id'] ?? null) == $this->userId) {
                    return (bool) ($judge['status'] ?? false);
                }
            }
        }

        return false;
    }
    private function loadScoresByTab(string $tab)
    {
        if (!empty($this->scores[$tab])) {
            return;
        }

        $record = Score::where('judge_id', $this->userId)
            ->where('contest_id', $this->contestId)
            ->where('criteria_id', $this->criteriaId)
            ->where('contest_category', $this->tabLabels[$tab])
            ->first();

        // reset tab data to avoid mixing old values
        $this->scores[$tab] = [];

        if ($record && !empty($record->score)) {
            foreach ($record->score as $item) {
                $pId = $item['participant_id'];
                $this->scores[$tab][$pId] = $item['scores'];
            }
        }
    }


    public function updatedActiveTab(string $value)
    {
        $this->loadScoresByTab($value);
    }

    private function getRank(array $participantsScores)
    {
        $this->ranks = [];

        // $groupedParticipants = $this->allCriteria
        //     ->first()
        //     ->contest
        //     ->participants
        //     ->groupBy(fn($p) => $p['participant']['gender']);
        $contestType = $this->allCriteria->first()->contest->contest_type;

        // ✅ group by gender only for individual, not for team
        $groupedParticipants = $contestType === ContestType::Team->value
            ? collect(['team' => $this->allCriteria->first()->contest->participants]) // ✅ single group
            : $this->allCriteria->first()->contest->participants->groupBy(fn($p) => $p['participant']['gender']);

        foreach ($groupedParticipants as $gender => $participants) {

            $scoresArray = [];

            foreach ($participants as $participant) {

                $participantId = $participant['id'];

                $criteria = $participantsScores[$participantId] ?? [];

                $total = collect($criteria)
                    ->map(fn($v) => (float) $v)
                    ->sum();

                $scoresArray[] = [
                    'id' => $participantId,
                    'total' => $total,
                ];
            }

            // Sort descending
            usort($scoresArray, fn($a, $b) => $b['total'] <=> $a['total']);

            $i = 0;
            $count = count($scoresArray);

            while ($i < $count) {

                $item = $scoresArray[$i];

                if ($item['total'] <= 0) {
                    $this->ranks[$item['id']] = '-';
                    $i++;
                    continue;
                }

                $j = $i;

                while (
                    $j < $count &&
                    $scoresArray[$j]['total'] == $item['total']
                ) {
                    $j++;
                }

                $fractionalRank = (($i + 1) + $j) / 2;

                for ($k = $i; $k < $j; $k++) {
                    $this->ranks[$scoresArray[$k]['id']] = $fractionalRank;
                }

                $i = $j;
            }
        }
    }

    public function submit()
    {
        try {
            $category = $this->activeTab;
            $originalCategory = $this->tabLabels[$category] ?? Str::headline($category);

            // ONLY current tab
            $participantsScores = $this->scores[$category] ?? [];

            // Compute ranks only for this category
            $this->getRank($participantsScores);

            // Get the participants collection from our preloaded criteria to search against
            $contestParticipants = $this->allCriteria->first()->contest->participants;

            $score = collect();
            $activeGroup = collect($this->allCriteria->first()->criteria)
                ->first(fn($g) => Str::slug($g['data']['content']) === $category);

            $level = $activeGroup['data']['level'] ?? Round::Preliminary->value;
            foreach ($participantsScores as $participantId => $criteria) {

                // Find the specific participant match from our relationship collection
                $participantRecord = $contestParticipants->firstWhere('id', (int) $participantId);

                // Extract the participant data array (falls back to an empty array if not found)
                $participantData = $participantRecord ? $participantRecord->toArray() : [];

                $score->push([
                    'contest_category' => $originalCategory,
                    'participant_id' => (int) $participantId,
                    'participant' => $participantData,
                    'level' => $level,
                    'judge_id' => $this->userId,
                    'contest_id' => $this->allCriteria->first()->contest_id,
                    'criteria' => $this->criteriaId,
                    'scores' => $criteria,
                    'total_score' => collect($criteria)
                        ->map(fn($v) => (float) $v)
                        ->sum(),
                    'submitted_at' => now()->toDateTimeString(),
                    'rank' => $this->ranks[$participantId] ?? '-',
                ]);
            }

            auth()->user()->scores()->updateOrCreate(
                [
                    'contest_id' => $this->allCriteria->first()->contest_id,
                    'criteria_id' => $this->criteriaId,
                    'contest_category' => $originalCategory,
                    'level' => $level,
                ],
                [
                    'score' => $score->toArray(),
                    'status' => true,
                ]
            );

            $this->submittedCategories[$category] = true;

            $groups = JudgesGroup::where('criteria_id', $this->criteriaId)->get();

            foreach ($groups as $group) {
                $tempJudges = $group->judges;
                $isUpdated = false;

                foreach ($tempJudges as &$competitionLevel) {
                    if ($competitionLevel['content'] !== $originalCategory) {
                        continue;
                    }

                    foreach ($competitionLevel['judges'] as &$judgeStatus) {
                        if ($judgeStatus['judge_id'] === $this->userId) {
                            $judgeStatus['status'] = true;
                            $isUpdated = true;

                            $this->level = $competitionLevel['level'];
                            $this->contestCategory = $competitionLevel['content'];
                            $this->status = true;

                            break 2;
                        }
                    }
                }

                if ($isUpdated) {
                    $group->judges = $tempJudges;
                    $group->save();
                }
            };

            broadcast(new JudgeSubmittedEvent(
                $this->userId,
                $originalCategory,
            ))->toOthers();

            Notification::make()
                ->title('Scores Submitted Successfully')
                ->color('success')
                ->body("$originalCategory scores have been recorded.")
                ->send();
        } catch (\Exception $e) {
            Notification::make()
                ->title('Submission Failed')
                ->color('danger')
                ->body('An error occurred: ' . $e->getMessage())
                ->send();
        }
    }

    public function requestEdit()
    {
        $category = $this->activeTab;
        $originalCategory = $this->tabLabels[$category] ?? Str::headline($category);
        $groups = JudgesGroup::where('criteria_id', $this->criteriaId)->get();

        foreach ($groups as $group) {

            $judges = $group->judges;
            $updated = false;

            foreach ($judges as $i => $competitionLevel) {

                if (
                    ($competitionLevel['content'] ?? null) !== $originalCategory
                ) {
                    continue;
                }

                foreach ($competitionLevel['judges'] as $j => $judgeStatus) {

                    if (($judgeStatus['judge_id'] ?? null) == $this->userId) {
                        $judges[$i]['judges'][$j]['request_edit'] = true;
                        $updated = true;
                        break 2;
                    }
                }
            }

            if ($updated) {
                $group->judges = $judges;
                $group->save();
            }
        }

        broadcast(new JudgeSubmittedEvent(
            $this->userId,
            $originalCategory,
        ))->toOthers();

        Notification::make()
            ->title('Edit Request Sent')
            ->color('success')
            ->body('Your request to edit the scores has been sent to the administrator.')
            ->send();
    }
}
