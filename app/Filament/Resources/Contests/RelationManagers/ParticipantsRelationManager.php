<?php

namespace App\Filament\Resources\Contests\RelationManagers;

use App\Filament\Imports\ParticipantsImporter;
use App\Filament\Imports\TeamParticipantImporter;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ImportAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
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
                ->label('Participant Image')->defaultImageUrl(url('https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png'))
                ->circular(),

            TextColumn::make('participant.first_name')
                ->label('Name')
                ->formatStateUsing(fn($record): string => "{$record->participant['first_name']} {$record->participant['last_name']}")
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
                $isTeam ?   ImportAction::make()->importer(TeamParticipantImporter::class)->options([
                    'contest_id' => $this->ownerRecord->id
                ])->color('primary') :   ImportAction::make()->importer(ParticipantsImporter::class)->options([
                    'contest_id' => $this->ownerRecord->id
                ])->color('primary'),
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
