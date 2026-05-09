<?php

namespace App\Filament\Judge\Pages;

use App\Models\Criteria as ModelsCriteria;
use Filament\Pages\Page;
use Illuminate\Support\Str;

class Criteria extends Page
{
    protected string $view = 'filament.judge.pages.criteria';
    public ?string $heading = '';
    protected static bool $shouldRegisterNavigation = false;

    public string $activeTab;
    public  $allCriteria;
    public array $scores = [];
    public function mount()
    {
        // Fetch your data here
        $this->allCriteria = ModelsCriteria::with(['contest.participants'])->get();
        $firstContent = $this->allCriteria->first()->criteria[0]['data']['content'];
        $this->activeTab = Str::slug($firstContent);
    }

    public function submit()
    {

        $score = collect($this->scores)->map(function ($criteria, $participantId) {
            return [
                'contest_category' => $this->allCriteria->first()->criteria[0]['data']['content'],
                'participant_id' => $participantId,
                'level' => $this->allCriteria->first()->criteria[0]['data']['level'],
                'judge_id' => auth()->id(), // Adding global context
                'contest_id' => $this->allCriteria->first()->contest_id,
                'scores' => $criteria,
                'total_score' => array_sum($criteria),
                'submitted_at' => now()->toDateTimeString(),
            ];
        })->values();
    }
}
