<?php

namespace App\Filament\Resources\Results\Pages;

use App\Filament\Resources\Results\ResultResource;
use App\Models\Result;
use App\Models\Score;
use Filament\Resources\Pages\ViewRecord;


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

    public function mount(int|string $record): void
    {
        parent::mount($record);

        $t =   $this->criteria = Score::where('criteria_id', $this->record->id)->with(['judge', 'criteria'])->get();

        logger($t);
    }
}
