<?php

namespace App\Filament\Judge\Resources\Contests\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class ContestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1)->schema([
                    FileUpload::make('poster')->directory('contest'),
                    Grid::make(3)->schema([
                        TextInput::make('category')->label('Contest Category')
                            ->required()
                            ->maxLength(255)->columnSpanFull(),
                        Grid::make(1)->schema([
                            Textarea::make('description')
                                ->required()
                                ->maxLength(255)
                        ])->columnSpanFull(),
                        Grid::make(2)->schema([
                            TextInput::make('organizer')
                                ->required()
                                ->maxLength(255),
                            Select::make('scoring_type')->label('Type of Scoring')
                                ->options([
                                    'point_based' => 'Point Based',
                                    'rank_based' => 'Rank Based',
                                ]),
                            Select::make('contest_type')->label('Type of Contest')
                                ->options([
                                    'individual' => 'Individual',
                                    'team' => 'Team',
                                ]),
                            DateTimePicker::make('date')->native(false)
                                ->required(),
                        ])->columnSpanFull(),
                        TextInput::make('venue')
                            ->required()
                            ->maxLength(255)->columnSpanFull(),
                    ])->columnSpanFull()
                ])->columnSpanFull()
            ]);
    }
}
