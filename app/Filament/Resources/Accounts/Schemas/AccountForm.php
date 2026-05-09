<?php

namespace App\Filament\Resources\Accounts\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AccountForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('email')->unique()->required(),
                TextInput::make('password')->minLength(8)->password()->dehydrated(fn(?string $state): bool => filled($state))->required(fn(string $operation): bool => $operation === 'create'),
                Select::make('roles')->relationship('roles', 'name')->multiple()->preload()->searchable()->required(),
            ]);
    }
}
