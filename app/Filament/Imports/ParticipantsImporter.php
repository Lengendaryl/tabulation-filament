<?php

namespace App\Filament\Imports;

use App\Models\Participant;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class ParticipantsImporter extends Importer
{
    protected static ?string $model = Participant::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('participant_no')
                ->requiredMapping()
                ->fillRecordUsing(fn() => null),

            ImportColumn::make('first_name')
                ->requiredMapping()
                ->fillRecordUsing(fn() => null),

            ImportColumn::make('last_name')
                ->requiredMapping()
                ->fillRecordUsing(fn() => null),

            ImportColumn::make('age')
                ->numeric()
                ->fillRecordUsing(fn() => null),

            ImportColumn::make('gender')
                ->requiredMapping()
                ->castStateUsing(function (?string $state): ?string {
                    return $state ? strtolower(trim($state)) : null;
                })
                ->examples(['male', 'female'])
                ->rules(['required', 'in:male,female'])
                ->fillRecordUsing(fn() => null),

            ImportColumn::make('description')
                ->fillRecordUsing(fn() => null),

            ImportColumn::make('image')
                ->fillRecordUsing(fn() => null),
        ];
    }

    public function resolveRecord(): Participant
    {
        $record = new Participant();

        $record->contest_id = $this->options['contest_id'] ?? null;

        $record->participant = [
            'participant_no' => $this->data['participant_no'] ?? null,
            'last_name'      => $this->data['last_name'] ?? null,
            'first_name'     => $this->data['first_name'] ?? null,
            'age'            => $this->data['age'] ?? null,
            'gender'         => $this->data['gender'] ?? null,
            'image'          => $this->data['image'] ?? null,
        ];

        return $record;
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your participants import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
