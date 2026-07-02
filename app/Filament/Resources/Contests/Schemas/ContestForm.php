<?php

namespace App\Filament\Resources\Contests\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class ContestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1)->schema([
                    FileUpload::make('poster')->image()->directory('contest')->disk('public'),
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
                                ->maxLength(255)
                        ])->columnSpanFull(),
                        Grid::make(3)->columns(fn(Get $get) => $get('contest_type') === 'team' ? 2 : 3)->schema([
                            Select::make('scoring_type')->label('Type of Scoring')
                                ->options([
                                    'point_based' => 'Point Based',
                                    'rank_based' => 'Rank Based',
                                ])->required(),
                            Select::make('contest_type')->label('Type of Contest')
                                ->options([
                                    'individual' => 'Individual',
                                    'team' => 'Team',
                                ])->required()->live(),
                            Select::make('gender_category')->label('Type of Gender Category')
                                ->options([
                                    'male' => 'Male Only',
                                    'female' => 'Female Only',
                                    'male&female' => 'Male & Female',
                                    'mixed' => 'Mixed',
                                ])->required()->hidden(fn($get) => $get('contest_type') === 'team'),
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
}
