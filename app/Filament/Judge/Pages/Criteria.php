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
    public array $scores = [];
    public function mount()
    {
        // Fetch your data here
        $this->allCriteria = ModelsCriteria::with(['contest.participants'])->get();
        logger($this->allCriteria);
        $firstContent = $this->allCriteria->first()->criteria[0]['data']['content'];
        $this->activeTab = Str::slug($firstContent);
    }

    public function submit()
    {
        try {
            $score = collect($this->scores)->map(function ($criteria, $participantId) {
                return [
                    'contest_category' => $this->allCriteria->first()->criteria[0]['data']['content'],
                    'participant_id' => $participantId,
                    'level' => $this->allCriteria->first()->criteria[0]['data']['level'],
                    'judge_id' => auth()->id(),
                    'contest_id' => $this->allCriteria->first()->contest_id,
                    'scores' => $criteria,
                    'total_score' => array_sum($criteria),
                    'submitted_at' => now()->toDateTimeString()
                ];
            })->values();

            Score::create([
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
