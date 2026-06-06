<?php

namespace App\Filament\Resources\Events\RelationManagers;

use App\Filament\Resources\Contests\ContestResource;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContestRelationManager extends RelationManager
{

    protected static string $relationship = 'contests';
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1)->schema([
                    FileUpload::make('poster')->directory('contest'),
                    Grid::make(3)->schema([
                        Grid::make(2)->schema([
                            TextInput::make('category')->label('Contest Category')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('organizer')
                                ->required()
                                ->maxLength(255),
                        ])->columnSpanFull(),
                        Grid::make(1)->schema([
                            Textarea::make('description')
                                ->required()
                                ->maxLength(255)
                        ])->columnSpanFull(),
                        Grid::make(2)->schema([
                            Select::make('scoring_type')->label('Type of Scoring')
                                ->options([
                                    'point_based' => 'Point Based',
                                    'rank_based' => 'Rank Based',
                                ])->required(),
                            Select::make('contest_type')->label('Type of Contest')
                                ->options([
                                    'individual' => 'Individual',
                                    'team' => 'Team',
                                ])->required(),
                        ])->columnSpanFull(),
                        Grid::make(2)->schema([
                            DatePicker::make('date')->native(false)
                                ->required(),
                            TextInput::make('venue')
                                ->required()
                                ->maxLength(255),
                        ])->columnSpanFull()
                    ])->columnSpanFull()
                ])->columnSpanFull()
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('category')->label('Contest category')->searchable(),
                TextColumn::make('organizer'),
                TextColumn::make('contest_type'),
                TextColumn::make('scoring_type'),
                TextColumn::make('date'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                ViewAction::make()
                    ->url(
                        fn($record) =>
                        ContestResource::getUrl('view', [
                            'record' => $record->id,
                        ])
                    ),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
