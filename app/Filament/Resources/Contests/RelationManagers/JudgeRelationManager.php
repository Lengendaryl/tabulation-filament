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

class JudgeRelationManager extends RelationManager
{
    protected static string $relationship = 'judges';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('email')->unique()->required(),
                TextInput::make('password')->minLength(8)->password()->required(),
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
                // TextColumn::make('roles')->relationship('roles', 'name')->multiple()->preload()->searchable()->required()
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
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
