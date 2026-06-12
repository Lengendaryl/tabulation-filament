<?php

namespace App\Filament\Imports;

use App\Models\Participant;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class TeamParticipantImporter extends Importer
{
    protected static ?string $model = Participant::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('team_participant_no')->requiredMapping()->fillRecordUsing(fn() => null),
            ImportColumn::make('image')->fillRecordUsing(fn() => null),
            ImportColumn::make('team_name')->requiredMapping()->fillRecordUsing(fn() => null),
            ImportColumn::make('team_captain')->fillRecordUsing(fn() => null),
            ImportColumn::make('team_description')->fillRecordUsing(fn() => null),
        ];
    }

    public function resolveRecord(): Participant
    {
        $record = new Participant();

        $record->contest_id = $this->options['contest_id'] ?? null;

        $record->participant = [
            'team_participant_no' => $this->data['team_participant_no'] ?? null,
            'image'          => $this->data['image'] ?? null,
            'team_name'      => $this->data['team_name'] ?? null,
            'team_captain'     => $this->data['team_captain'] ?? null,
            'team_description'     => $this->data['team_description'] ?? null,

        ];

        return $record;
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your team participant import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
