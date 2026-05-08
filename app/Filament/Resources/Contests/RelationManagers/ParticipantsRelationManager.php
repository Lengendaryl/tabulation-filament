<?php

namespace App\Filament\Resources\Contests\RelationManagers;

use Filament\Actions\Action;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ParticipantsRelationManager extends RelationManager
{
    protected static string $relationship = 'participants';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Team Info')
                ->schema([
                    FileUpload::make('participant.image')->directory('participant')
                        ->required(),
                    Grid::make(3)->schema([
                        TextInput::make('participant.team_participant_no')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('participant.team_name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('participant.team_captain')
                            ->required()
                            ->maxLength(255),
                    ]),
                    Textarea::make('participant.team_description')
                        ->required(),
                ])
                ->visible(
                    fn() =>
                    $this->ownerRecord->contest_type === 'team'
                )->columnSpanFull(),

            Section::make('Individual Info')
                ->schema([
                    FileUpload::make('participant.image')->directory('participant')
                        ->required(),
                    Grid::make(3)->schema([
                        TextInput::make('participant.participant_no')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('participant.first_name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('participant.last_name')
                            ->required()
                            ->maxLength(255),
                    ]),
                    Grid::make(2)->schema([
                        TextInput::make('participant.age')->numeric()
                            ->required(),
                        Select::make('participant.gender')->options([
                            'male' => 'Male',
                            'female' => 'Female',
                        ])->required()
                    ]),
                    Textarea::make('participant.description')
                        ->required(),

                ])
                ->visible(
                    fn() =>
                    $this->ownerRecord->contest_type === 'individual'
                )->columnSpanFull(),
        ]);
    }
    protected function teamColumns(): array
    {
        return [
            TextColumn::make('participant.team_participant_no')
                ->label('Participant No'),

            ImageColumn::make('participant.image')
                ->label('Participant Image')
                ->circular(),

            TextColumn::make('participant.team_name')
                ->label('Team Name')
                ->searchable(),

            TextColumn::make('participant.team_captain')
                ->label('Team Captain'),
        ];
    }
    protected function individualColumns(): array
    {
        return [
            TextColumn::make('participant.participant_no')
                ->label('Participant No'),

            ImageColumn::make('participant.image')
                ->label('Participant Image')
                ->circular(),

            TextColumn::make('participant.first_name')
                ->label('First Name')
                ->searchable(),

            TextColumn::make('participant.age')
                ->label('Age'),

            TextColumn::make('participant.gender')
                ->label('Gender'),
        ];
    }
    public function table(Table $table): Table
    {
        $isTeam = $this->ownerRecord->contest_type === 'team';
        return $table
            ->recordTitleAttribute('name')
            ->columns(
                $isTeam
                    ? $this->teamColumns()
                    : $this->individualColumns()
            )
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
                Action::make('participant')
                    ->label('Import Participants')
                    ->icon('heroicon-m-arrow-up-tray')
                    ->schema([
                        FileUpload::make('file')->required(),
                    ])
                    ->action(function (array $data) {
                        // import logic
                    }),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                ]),
            ]);
    }
}
