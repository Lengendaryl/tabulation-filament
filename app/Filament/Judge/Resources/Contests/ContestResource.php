<?php

namespace App\Filament\Judge\Resources\Contests;

use App\Filament\Judge\Resources\Contests\Pages\CreateContest;
use App\Filament\Judge\Resources\Contests\Pages\EditContest;
use App\Filament\Judge\Resources\Contests\Pages\ListContests;
use App\Filament\Judge\Resources\Contests\RelationManagers\CriteriaRelationManager;
use App\Filament\Judge\Resources\Contests\Schemas\ContestForm;
use App\Filament\Judge\Resources\Contests\Tables\ContestsTable;
use App\Models\Contest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ContestResource extends Resource
{
    protected static ?string $model = Contest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ContestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContestsTable::configure($table);
    }
    public static function getTableQuery(): Builder
    {
        return parent::getTableQuery()
            ->where('contest_id', auth()->id());
    }
    public static function getRelations(): array
    {
        return [
            CriteriaRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContests::route('/'),
            'create' => CreateContest::route('/create'),
            'edit' => EditContest::route('/{record}/edit'),
            // 'view' => ViewContest::route('/{record}/view')
        ];
    }
}
