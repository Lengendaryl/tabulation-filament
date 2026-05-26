<?php

namespace App\Filament\Resources\Results\Pages;

use App\Events\JudgeSubmittedEvent;
use App\Filament\Resources\Results\ResultResource;
use App\Models\Criteria;
use App\Models\JudgesGroup;
use App\Models\Participant;
use App\Models\Score;
use App\Models\User;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Database\Eloquent\Collection;


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
        'judge-status-changed' => 'loadJudgesGroup',
    ];
    public array $submittedJudges = [];
    public array $result;
    public Collection $score;
    public Collection $criteria;
    public Collection $judgesGroup;
    public array $judgesInfo;
    public array $participants = [];
    public array $judgeStatusMap = [];

    public function loadJudgesGroup()
    {
        $judgesGroup = JudgesGroup::where('criteria_id', $this->record->id)->get();

        $judgeIds = collect($judgesGroup)
            ->flatMap(
                fn($group) =>
                collect($group['judges'])
                    ->flatMap(
                        fn($level) =>
                        collect($level['judges'] ?? [])
                            ->pluck('judge_id')
                    )
            )
            ->unique()
            ->values();

        $judgesInfo = User::whereIn('id', $judgeIds)->get()->keyBy('id');

        $this->judgesGroup = $judgesGroup->map(function ($group) use ($judgesInfo) {

            $group->judges = collect($group->judges)
                ->flatMap(function ($levelGroup) {
                    // 🔥 unwrap double arrays
                    return isset($levelGroup[0]) ? $levelGroup : [$levelGroup];
                })
                ->map(function ($levelGroup) use ($judgesInfo) {

                    $levelGroup['judges'] = collect($levelGroup['judges'] ?? [])
                        ->map(function ($judge) use ($judgesInfo) {

                            $user = $judgesInfo->get($judge['judge_id'] ?? null);

                            $judge['name'] = $user?->name;
                            $judge['email'] = $user?->email;
                            $judge['avatar'] = $user?->avatar;

                            return $judge;
                        })
                        ->toArray();

                    return $levelGroup;
                })
                ->toArray();

            return $group;
        });

        $map = [];
        foreach ($this->judgesGroup as $group) {
            foreach ($group->judges as $levelGroup) {
                $categoryName = $levelGroup['content'] ?? null;
                foreach ($levelGroup['judges'] ?? [] as $judgeStatus) {
                    $judgeId = $judgeStatus['judge_id'] ?? null;
                    if ($categoryName && $judgeId) {
                        $map[$categoryName][$judgeId] = [
                            'status'       => $judgeStatus['status'] ?? false,
                            'request_edit' => $judgeStatus['request_edit'] ?? false,
                        ];
                    }
                }
            }
        }
        $this->judgeStatusMap = $map;
    }

    public function mount(int|string $record): void
    {
        parent::mount($record);
        $this->participants = Participant::all()->toArray();
        $this->score = Score::where('criteria_id', $this->record->id)->with(['judge', 'criteria'])->get();

        $this->criteria = Criteria::where('id', $this->record->id)->get();

        $this->loadJudgesGroup();
    }


    public function handleJudgeSubmitted(): void
    {
        $this->loadJudgesGroup();
    }
}
