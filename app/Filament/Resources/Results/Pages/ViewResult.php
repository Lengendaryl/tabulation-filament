<?php

namespace App\Filament\Resources\Results\Pages;

use App\Filament\Resources\Results\ResultResource;
use App\Models\JudgesGroup;
use App\Models\Score;
use App\Models\User;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class ViewResult extends ViewRecord
{
    protected static string $resource = ResultResource::class;
    protected string $view = 'filament.admin.pages.results.result';
    protected ?string $heading = '';
    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(),
        ];
    }
    protected $listeners = [
        'echo:judging,.JudgeSubmittedEvent' => 'handleJudgeSubmitted',
    ];
    public array $submittedJudges = [];
    public array $result;
    public Collection $criteria;
    public Collection $judgesGroup;
    public array $judgesInfo;

    private function loadJudgesGroup()
    {
        $judgesGroup = JudgesGroup::where('criteria_id', $this->record->id)->get();

        $judgeIds = $judgesGroup->flatMap(
            fn($group) => collect($group->judges)
                ->flatMap(fn($levelGroup) => collect($levelGroup['judges'])->pluck('judge_id'))
        )->unique()->values();

        $judgesInfo = User::whereIn('id', $judgeIds)->get()->keyBy('id');

        $this->judgesGroup = $judgesGroup->map(function ($group) use ($judgesInfo) {
            $group->judges = collect($group->judges)->map(function ($levelGroup) use ($judgesInfo) {
                $levelGroup['judges'] = collect($levelGroup['judges'])->map(function ($judge) use ($judgesInfo) {
                    $user = $judgesInfo->get($judge['judge_id']);
                    $judge['name']   = $user?->name;
                    $judge['email']  = $user?->email;
                    $judge['avatar'] = $user?->avatar;
                    return $judge;
                })->toArray();
                return $levelGroup;
            })->toArray();
            return $group;
        });
    }

    public function mount(int|string $record): void
    {
        parent::mount($record);

        $this->criteria = Score::where('criteria_id', $this->record->id)->with(['judge', 'criteria'])->get();

        $this->loadJudgesGroup();
    }


    public function handleJudgeSubmitted(): void
    {
        $this->loadJudgesGroup();
    }

    public function toggleStatus(string $originalCategory, string $level, $judgeId)
    {
        $groups = JudgesGroup::where('criteria_id', $this->record->id)->get();

        foreach ($groups as $group) {

            $judges = $group->judges;
            $updated = false;

            foreach ($judges as $i => $competitionLevel) {

                if (
                    ($competitionLevel['content'] ?? null) !== $originalCategory ||
                    ($competitionLevel['level'] ?? null) !== $level
                ) {
                    continue;
                }

                foreach ($competitionLevel['judges'] as $j => $judgeStatus) {

                    if (($judgeStatus['judge_id'] ?? null) == $judgeId) {

                        // ✅ TOGGLE instead of forcing true
                        $currentStatus = $judges[$i]['judges'][$j]['status'] ?? false;
                        $judges[$i]['judges'][$j]['status'] = !$currentStatus;

                        $updated = true;

                        break 2;
                    }
                }
            }

            if ($updated) {
                $group->judges = $judges;
                $group->save();

                $this->loadJudgesGroup();
            }
        }
    }
}
