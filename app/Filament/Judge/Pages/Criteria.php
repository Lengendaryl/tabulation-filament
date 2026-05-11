<?php

namespace App\Filament\Judge\Pages;

use App\Models\Criteria as ModelsCriteria;
use App\Models\Score;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Str;

class Criteria extends Page
{
    // use HasPageShield;
    protected string $view = 'filament.judge.pages.criteria';
    public ?string $heading = '';
    protected static bool $shouldRegisterNavigation = false;

    public string $activeTab;
    public  $allCriteria;
    public bool $hasSubmitted = false;
    public array $submittedCategories = [];
    public array $scores = [];
    public function mount()
    {
        // Fetch your data here
        $this->allCriteria = ModelsCriteria::with(['contest.participants'])->get();

        if ($this->allCriteria->isEmpty()) return;

        $firstContent = $this->allCriteria->first()->criteria[0]['data']['content'];

        $this->activeTab = Str::slug($firstContent);

        $record = Score::where('judge_id', auth()->id())
            ->where('contest_id', $this->allCriteria->first()->contest_id)
            ->first();


        if ($record && !empty($record->score)) {
            foreach ($record->score as $item) {
                $category = Str::slug($item['contest_category']);
                $pId = $item['participant_id'];

                $this->submittedCategories[$category] = true;

                $this->scores[$category][$pId] = $item['scores'];
            }
        }
    }

    public function submit()
    {
        try {
            $groupedParticipants = $this->allCriteria->first()->contest->participants->groupBy(fn($p) => $p['participant']['gender']);

            $ranks = [];

            foreach ($groupedParticipants as $gender => $participants) {
                // 2. Filter scores only for participants in this specific gender group
                $genderParticipantIds = $participants->pluck('id')->toArray();

                $genderTotals = collect($this->scores)
                    ->only($genderParticipantIds) // Only take scores for current gender
                    ->map(fn($criteria) => array_sum($criteria))
                    ->sortDesc();

                // 3. Convert this gender group to a flat array
                $scoresArray = [];
                foreach ($genderTotals as $participantId => $total) {
                    $scoresArray[] = [
                        'id' => $participantId,
                        'total' => $total,
                    ];
                }

                // 4. Calculate fractional ranks for THIS gender group
                $i = 0;
                $count = count($scoresArray);

                while ($i < $count) {
                    $item = $scoresArray[$i];

                    if (!$item['total'] || $item['total'] == 0) {
                        $ranks[$item['id']] = '-';
                        $i++;
                        continue;
                    }

                    $j = $i;
                    while ($j < $count && $scoresArray[$j]['total'] == $item['total']) {
                        $j++;
                    }

                    $fractionalRank = ($i + 1 + $j) / 2;

                    for ($k = $i; $k < $j; $k++) {
                        $ranks[$scoresArray[$k]['id']] = $fractionalRank;
                    }

                    $i = $j;
                }
            }

            $score = collect($this->scores)->map(function ($criteria, $participantId) use ($ranks) {
                return [
                    'contest_category' => $this->allCriteria->first()->criteria[0]['data']['content'],
                    'participant_id' => $participantId,
                    'level' => $this->allCriteria->first()->criteria[0]['data']['level'],
                    'judge_id' => auth()->id(),
                    'contest_id' => $this->allCriteria->first()->contest_id,
                    'scores' => $criteria,
                    'total_score' => array_sum($criteria),
                    'submitted_at' => now()->toDateTimeString(),
                    'rank' => $ranks[$participantId] ?? '-'
                ];
            })->values();

            auth()->user()->scores()->create([
                'contest_id' => $this->allCriteria->first()->contest_id,
                'score' => $score->toArray(),
            ]);

            return Notification::make()
                ->title('Scores Submitted Successfully')
                ->success() // Green color
                ->body('All participant scores have been recorded.')
                ->send();
        } catch (\Exception $e) {
            Notification::make()
                ->title('Submission Failed')
                ->danger() // Red color
                ->body('An error occurred: ' . $e->getMessage())
                ->send();
        }
    }
}
