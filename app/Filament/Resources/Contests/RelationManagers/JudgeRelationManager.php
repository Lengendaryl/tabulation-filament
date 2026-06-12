<?php

namespace App\Filament\Resources\Criterias\RelationManagers;

use App\Models\User;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;


class JudgeRelationManager extends RelationManager
{
    protected static string $relationship = 'judges';

    public function form(Schema $schema): Schema
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
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->unique()
                    ->required(),
                TextInput::make('password')
                    ->minLength(8)
                    ->password()
                    ->dehydrated(fn(?string $state): bool => filled($state))->required(fn(string $operation): bool => $operation === 'create'),
                Select::make('roles')
                    ->relationship('roles', 'name', modifyQueryUsing: fn($query) => $query->where('name', '!=', 'super_admin'))
                    ->preload()
                    ->searchable()
                    ->required(),
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
                TextColumn::make('category'),
                TextColumn::make('roles.name')
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->headerActions([
                CreateAction::make()->label('Add Judge')->mutateDataUsing(function (array $data): array {
                    if ($data['position'] === 'Chairman of the Board of Judges') {
                        $data['no'] = null;
                    }
                    return $data;
                }),
            ])
            ->recordActions([
                EditAction::make()->mutateDataUsing(function (array $data): array {
                    if ($data['position'] === 'Chairman of the Board of Judges') {
                        $data['no'] = null;
                    }
                    return $data;
                }),
                DeleteAction::make(),
                ForceDeleteAction::make(),
                RestoreAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ]),
            ]);
    }
}
