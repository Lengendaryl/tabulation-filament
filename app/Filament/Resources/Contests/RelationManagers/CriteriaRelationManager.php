<?php

namespace App\Filament\Resources\Contests\RelationManagers;

use App\Filament\Imports\ParticipantsImporter;
use App\Models\Criteria;
use App\Models\User;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ImportAction;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Filament\Support\Exceptions\Halt;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class CriteriaRelationManager extends RelationManager
{
    protected static string $relationship = 'criteria';
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)->schema([
                    Section::make('Judges')
                        ->schema([
                            Select::make('judges_source')
                                ->options([
                                    'contest' => 'This Contest Judges',
                                    'all' => 'All Judges',
                                ])
                                ->default('contest')
                                ->live(),
                            Select::make('judges')
                                ->multiple()
                                ->options(function (callable $get) {

                                    return match ($get('judges_source')) {

                                        'contest' => User::whereHas(
                                            'contests',
                                            fn($q) =>
                                            $q->where('contest_id', $this->ownerRecord->id)
                                        )->pluck('name', 'id'),

                                        default => User::where('id', '!=', Auth::id())->pluck('name', 'id'),
                                    };
                                })
                                ->live()
                                ->required(),
                            Grid::make(3)->schema([
                                TextInput::make('qualified_participant')->numeric()->minValue(1)->required(),
                                Select::make('final_scoring_method')->options([
                                    'final' => 'Final',
                                    'finalprelim' => 'Final & Prelim',
                                ])->live()->required(),
                                Select::make('preliminary_scoring_method')->options([
                                    'default' => 'Default',
                                    'weighted' => 'Weighted',
                                ])->live()->required()
                            ])->columnSpanFull(),
                            Grid::make(1)->schema([
                                Builder::make('criteria')
                                    ->blocks([
                                        Block::make('contest')
                                            ->schema([
                                                Grid::make(3)->columns(fn(callable $get) => $get('../../../preliminary_scoring_method') === 'weighted'
                                                    ? 3
                                                    : 2)->schema([
                                                    TextInput::make('content')
                                                        ->label('Contest name')
                                                        ->required(),
                                                    TextInput::make('weight')->label('Contest Weight')
                                                        ->visible(
                                                            fn(callable $get) =>
                                                            $get('../../../preliminary_scoring_method') === 'weighted'
                                                        )
                                                        ->required(),
                                                    Select::make('level')
                                                        ->label('Contes Round')
                                                        ->options([
                                                            'preliminary' => 'Preliminary',
                                                            'final' => 'Final',
                                                        ])
                                                        ->required(),
                                                ])->columnSpanFull(),
                                                Repeater::make('criteria')
                                                    ->schema([
                                                        TextInput::make('criterion')->required(),
                                                        TextInput::make('score')
                                                            ->numeric()
                                                            ->minValue(1)
                                                            ->required()
                                                            ->live()
                                                            ->afterStateUpdated(function (callable $get, callable $set) {
                                                                $criteria = $get('criteria');
                                                                $total = collect($criteria)
                                                                    ->sum(fn($item) => floatval($item['score'] ?? 0));
                                                                $set('total', $total);
                                                            }),
                                                    ])
                                                    ->columns(2)
                                                    ->columnSpanFull()
                                                    ->afterStateUpdated(function (callable $get, callable $set) {
                                                        $criteria = $get('criteria');
                                                        $total = collect($criteria)
                                                            ->sum(fn($item) => floatval($item['score'] ?? 0));
                                                        $set('total', $total);
                                                    })
                                                    ->live(),
                                                ViewField::make('total')
                                                    ->label('Total Score')
                                                    ->view('filament.pages.total-score')
                                            ])
                                            ->columns(3),
                                    ])
                            ])
                        ]),
                    Section::make('Participants')
                        ->schema([
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
                                        ->nullable(),
                                ])
                                ->visible(
                                    fn() =>
                                    $this->ownerRecord->contest_type === 'team'
                                )->columnSpanFull(),
                            Tabs::make('Tabs')
                                ->tabs([
                                    Tab::make('Individual')
                                        ->icon(Heroicon::User)
                                        ->schema([
                                            Section::make('Individual Info')
                                                ->schema([
                                                    Builder::make('participants')
                                                        ->blocks([
                                                            Block::make('participant')
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
                                                                        ->nullable()
                                                                ]),
                                                        ]),
                                                ])
                                                ->visible(
                                                    fn() =>
                                                    $this->ownerRecord->contest_type === 'individual'
                                                )->columnSpanFull()
                                        ]),
                                    Tab::make('Bulk Upload')
                                        ->icon(Heroicon::FolderArrowDown)
                                        ->schema([
                                            Section::make('Bulk Upload')
                                                ->schema([
                                                    ImportAction::make()->importer(ParticipantsImporter::class)->options([
                                                        'contest_id' => $this->ownerRecord->id
                                                    ]),
                                                ])
                                        ]),

                                ]),

                        ]),
                ])->columnSpanFull()
            ]);
    }
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $total = collect($data['criteria'] ?? [])
            ->sum(function ($block) {
                return collect($block['data']['criteria'] ?? [])
                    ->sum(fn($item) => (float) ($item['score'] ?? 0));
            });

        $data['judges'] = array_merge(
            $data['judges_filtered'] ?? [],
            $data['judges_all'] ?? []
        );

        if ($total > 100) {
            throw new Halt(
                'Total score cannot exceed 100.'
            );
        }

        return $data;
    }
    public function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('criteria.0.data.level')->description(fn(Criteria $record): string => $record->criteria[0]['data']['content'])
                    ->searchable()->label('Criteria'),
                TextColumn::make('qualified_participant')->label('Qualified Participants'),
                TextColumn::make('final_scoring_method')->label('Final Scoring Method'),
            ])->filters([
                //
            ])
            ->headerActions([
                CreateAction::make()->modalWidth(Width::MaxContent),
            ])
            ->recordActions([
                EditAction::make()->modalWidth(Width::MaxContent),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
