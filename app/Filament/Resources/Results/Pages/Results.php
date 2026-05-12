<?php

namespace App\Filament\Resources\Results\Pages;

use App\Filament\Resources\Results\ResultResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class Results extends ViewRecord
{
    protected static string $resource = ResultResource::class;
    protected string $view = 'filament.admin.pages.result';
    protected ?string $heading = '';
    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(),
        ];
    }
}
