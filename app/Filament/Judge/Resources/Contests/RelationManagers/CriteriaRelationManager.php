<?php

namespace App\Filament\Judge\Resources\Contests\RelationManagers;

use App\Models\Criteria;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class CriteriaRelationManager extends RelationManager
{
    protected static string $relationship = 'criteria';

    public function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn(Builder $query) => $query->whereJsonContains('judges', Auth::id()))
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('criteria.0.data.level')->description(fn(Criteria $record): string => $record->criteria[0]['data']['content'])
                    ->searchable()->label('Criteria'),
                TextColumn::make('qualified_participant')->label('Qualified Participants'),
                TextColumn::make('final_scoring_method')->label('Final Scoring Method'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()->url(fn($record) => route('filament.judge.pages.criteria', [
                    'criteria' => $record->id
                ])),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
