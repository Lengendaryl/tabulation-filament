<?php

namespace App\Filament\Resources\Events;


use App\Filament\Resources\Events\Pages\CreateEvent;
use App\Filament\Resources\Events\Pages\EditEvent;
use App\Filament\Resources\Events\Pages\ListEvents;
use App\Filament\Resources\Events\Pages\ViewEvent;
use App\Filament\Resources\Events\RelationManagers\ContestRelationManager;

use App\Filament\Resources\Events\Schemas\EventForm;
use App\Filament\Resources\Events\Tables\EventsTable;
use App\Models\Contest;
use App\Models\Event;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $recordTitleAttribute = 'name';
    // public static function getGloballySearchableAttributes(): array
    // {
    //     return ['name', 'date', 'organizer', 'venue'];
    // }
    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'name' => $record->name,
            'organizer' => $record->organizer,
            'date' => $record->date,
        ];
    }
    public static function getGlobalSearchResultActions(Model $record): array
    {
        return [
            Action::make('edit')
                ->url(static::getUrl('edit', ['record' => $record])),
            Action::make('view')
                ->url(static::getUrl('view', ['record' => $record]))
        ];
    }
    protected static string|BackedEnum|null $navigationIcon = Heroicon::CalendarDays;

    public static function form(Schema $schema): Schema
    {
        return EventForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            ContestRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'edit' => EditEvent::route('/{record}/edit'),
            // 'view' => ViewEvent::route('/view')
        ];
    }
}
