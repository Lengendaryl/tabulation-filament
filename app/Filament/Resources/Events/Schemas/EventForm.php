<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)->schema([
                    Section::make('Create Event')->schema([
                        Grid::make(2)->schema([
                            FileUpload::make('poster')->directory('events')->required()->columnSpanFull(),
                            TextInput::make('name')->required()->columnSpanFull(),
                            Textarea::make('description')->required()->columnSpanFull(),
                            DatePicker::make('date')->native(false)->placeholder(now()->format('F j, Y'))->required()->columnSpanFull(),
                            TextInput::make('organizer')->required()->columnSpanFull(),
                            TextInput::make('venue')->required()->columnSpanFull(),
                            TextInput::make('address')->required()->columnSpanFull(),
                        ])
                    ])->columnSpanFull(),
                ])->columnSpanFull()
            ]);
    }
}
