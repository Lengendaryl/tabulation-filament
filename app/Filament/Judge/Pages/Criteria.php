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
        $this->allCriteria = ModelsCriteria::all();
        $firstContent = $this->allCriteria->first()->criteria[0]['data']['content'];
        $this->activeTab = Str::slug($firstContent);
    }
}
