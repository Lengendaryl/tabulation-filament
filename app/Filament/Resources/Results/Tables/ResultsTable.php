<?php

namespace App\Filament\Resources\Results\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ResultsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('contest.category')
                    ->label('Contest Category'),
                TextColumn::make('contest.organizer')
                    ->label('Organizer'),
                TextColumn::make('contest.scoring_type')
                    ->label('Scoring Type')
                    ->formatStateUsing(fn(string $state): string => Str::title(str_replace('_', ' ', $state))),
                TextColumn::make('contest.contest_type')
                    ->label('Type')
                    ->formatStateUsing(fn($state): string => Str::title($state))
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
