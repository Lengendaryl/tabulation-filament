<?php

namespace App\Filament\Judge\Resources\Contests\Pages;

use App\Filament\Judge\Resources\Contests\ContestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContests extends ListRecords
{
    protected static string $resource = ContestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
