<?php

namespace App\Filament\Judge\Resources\Contests\Pages;

use App\Filament\Judge\Resources\Contests\ContestResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\View\View;
class EditContest extends EditRecord
{
    protected static string $resource = ContestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    // public function getFooter(): ?View
    // {
    //     return view('filament.judge.pages.criteria', [
    //         'record' => $this->getRecord(),
    //     ]);
    // }
}
