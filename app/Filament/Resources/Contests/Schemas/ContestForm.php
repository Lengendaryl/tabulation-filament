<?php

namespace App\Filament\Resources\Contests\Schemas;

use Filament\Forms\Components\DatePicker;
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
                        Grid::make(2)->schema([
                            TextInput::make('name')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('category')->label('Contest Category')
                                ->required()
                                ->maxLength(255)
                        ])->columnSpanFull(),
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
                                    'point_based_single' => 'Point Based Single',
                                    'point_based_mutliple' => 'Point Based Mutliple',
                                    'rank_based_single' => 'Rank Based Single',
                                    'rank_based_mutliple' => 'Rank Based Mutliple'
                                ]),
                            Select::make('contest_type')->label('Type of Contest')
                                ->options([
                                    'individual' => 'Individual',
                                    'team' => 'Team',
                                ]),
                            Select::make('gender_category')
                                ->options([
                                    'male' => 'Male',
                                    'female' => 'Female',
                                    'male&female' => 'Male & Female'
                                ])->required(),
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
}
