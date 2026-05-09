<?php

namespace App\Filament\Resources\Contests\RelationManagers;


use App\Models\Criteria;
use App\Models\User;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Filament\Support\Exceptions\Halt;
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
                Grid::make(1)->schema([
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
                CreateAction::make()->modalWidth(Width::ScreenExtraLarge),
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
