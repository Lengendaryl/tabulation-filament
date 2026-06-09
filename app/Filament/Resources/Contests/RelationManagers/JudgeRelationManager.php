<?php

namespace App\Filament\Resources\Criterias\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class JudgeRelationManager extends RelationManager
{
    protected static string $relationship = 'judges';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('no'),
                Select::make('position')
                    ->options([
                        'Judge' => 'Judge',
                        'Chairman of the Board of Judges' => 'Chairman of the Board of Judges',
                    ])->required(),
                TextInput::make('name')->required(),
                TextInput::make('email')->unique()->required(),
                TextInput::make('password')->minLength(8)->password()->dehydrated(fn(?string $state): bool => filled($state))->required(fn(string $operation): bool => $operation === 'create'),
                Select::make('roles')->relationship('roles', 'name')->multiple()->preload()->searchable()->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('position'),
                TextColumn::make('roles.name')
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make()->label('Add Judge'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
