<?php

namespace App\Filament\Resources\Accounts\Schemas;

use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class AccountForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('no')
                    ->hidden(fn(callable $get) => $get('position') === 'Chairman of the Board of Judges'),
                Select::make('position')
                    ->options([
                        'Judge' => 'Judge',
                        'Chairman of the Board of Judges' => 'Chairman of the Board of Judges',
                    ])
                    ->live()
                    ->required(),
                TextInput::make('name')->required(),
                TextInput::make('email')->unique()->required(),
                TextInput::make('password')->minLength(8)->password()->dehydrated(fn(?string $state): bool => filled($state))->required(fn(string $operation): bool => $operation === 'create'),
                Select::make('roles')->relationship('roles', 'name',  modifyQueryUsing: fn($query) => $query->where('name', '!=', 'super_admin'))->preload()->searchable()->required(),

                Select::make('category')
                    ->label('Category')
                    ->options([
                        'Visual Arts' => 'Visual Arts',
                        'Music' => 'Music',
                        'Dance' => 'Dance',
                        'Dramatic Arts' => 'Dramatic Arts',
                        'Special Category' => 'Special Category',
                    ])
                    ->native(false)
                    ->searchable()
                    ->getSearchResultsUsing(function (string $search) {
                        // ✅ search existing categories
                        return User::whereNotNull('category')
                            ->where('category', 'like', "%{$search}%")
                            ->distinct()
                            ->pluck('category', 'category')
                            ->toArray();
                    })
                    ->getOptionLabelUsing(fn($value) => $value)
                    ->createOptionForm([
                        TextInput::make('category')->required(),
                    ])
                    ->createOptionUsing(fn(array $data) => $data['category'])
            ]);
    }
}
