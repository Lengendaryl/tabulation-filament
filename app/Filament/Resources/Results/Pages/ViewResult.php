<?php

namespace App\Filament\Resources\Results\Pages;

use App\Filament\Resources\Results\ResultResource;
use App\Models\JudgesGroup;
use App\Models\Result;
use App\Models\Score;
use App\Models\User;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\Width;

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

    public $result;
    public $criteria;
    public $judgesGroup;
    public $judgesInfo;
    public function mount(int|string $record): void
    {
        parent::mount($record);

        $t =   $this->criteria = Score::where('criteria_id', $this->record->id)->with(['judge', 'criteria'])->get();

        $a = $this->judgesGroup = JudgesGroup::where('criteria_id', $this->record->id)->get();

        $judgeIds = JudgesGroup::where('criteria_id', $this->record->id)
            ->get()
            ->flatMap(
                fn($group) => collect($group->judges)        // each levelGroup
                    ->flatMap(
                        fn($levelGroup) => collect($levelGroup['judges'])  // each judge entry
                            ->pluck('judge_id')                            // grab judge_id
                    )
            )
            ->unique()
            ->values();

        $judgesInfo = User::whereIn('id', $judgeIds)->get()->keyBy('id');

        $this->judgesGroup = $this->judgesGroup->map(function ($group) use ($judgesInfo) {
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


        // logger($t);
        // logger($a);
    }
}
