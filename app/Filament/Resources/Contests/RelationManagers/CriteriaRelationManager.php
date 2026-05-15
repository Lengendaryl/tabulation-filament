<?php

namespace App\Filament\Resources\Contests\RelationManagers;


use App\Models\Criteria;
use App\Models\JudgesGroup;
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
use Filament\Notifications\Notification;
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
                                TextInput::make('qualified_participant')
                                    ->numeric()
                                    ->minValue(1)
                                    ->required(),
                                Select::make('final_scoring_method')
                                    ->options([
                                        'final' => 'Final',
                                        'finalprelim' => 'Final & Prelim',
                                    ])->live()->required(),
                                Select::make('preliminary_scoring_method')
                                    ->options([
                                        'default' => 'Default',
                                        'weighted' => 'Weighted',
                                    ])->live()->required()
                            ])->columnSpanFull(),
                            Grid::make(1)->schema([
                                Builder::make('criteria')
                                    ->label('Category contest')
                                    ->blocks([
                                        Block::make('contest')
                                            ->schema([
                                                Grid::make(3)
                                                    ->columns(fn(callable $get) => $get('../../../preliminary_scoring_method') === 'weighted'
                                                        ? 3
                                                        : 2)
                                                    ->schema([
                                                        TextInput::make('content')
                                                            ->label('Contest name')
                                                            ->required(),
                                                        TextInput::make('weight')
                                                            ->label('Contest Weight')
                                                            ->numeric()
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
                                                    ])
                                                    ->columns(2)
                                                    ->columnSpanFull()
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
                CreateAction::make()
                    ->modalWidth(Width::ScreenTwoExtraLarge)
                    ->mutateDataUsing(function (array $data): array {
                        collect($data['criteria'] ?? [])
                            ->each(function ($block) {

                                $total = collect($block['data']['criteria'] ?? [])
                                    ->sum(fn($item) => (float) ($item['score'] ?? 0));

                                if ($total > 100) {

                                    $content = $block['data']['content'] ?? 'Unknown';
                                    $level = $block['data']['level'] ?? 'Unknown';

                                    throw new Halt(
                                        "{$content} ({$level}) total score cannot exceed 100."
                                    );
                                }
                            });

                        // 2. Prepare Judges JSON structure
                        // In your form, the Select is named 'judges'
                        $selectedJudgeIds = $data['judges'] ?? [];
                        $judgesJson = collect($selectedJudgeIds)
                            ->map(fn($judgeId) => [
                                'judge_id' => (int) $judgeId,
                                'status' => false,
                            ])
                            ->values()
                            ->all();


                        // 3. Map the Builder data (Crucial: Keep 'type' and 'criteria' scores)
                        $data['criteria'] = collect($data['criteria'] ?? [])
                            ->map(function ($block) use ($judgesJson) {
                                $total = collect($block['data']['criteria'] ?? [])
                                    ->sum(fn($item) => (float) ($item['score'] ?? 0));
                                return [
                                    'type' => 'contest',
                                    'data' => [
                                        'level' => $block['data']['level'] ?? null,
                                        'content' => $block['data']['content'] ?? null,
                                        'weight' => $block['data']['weight'] ?? null,
                                        'criteria' => $block['data']['criteria'] ?? [],
                                        'total' => $total,
                                        'judges' => $judgesJson,
                                    ],
                                ];
                            })
                            ->values()
                            ->all();
                        return $data;
                    })
                    ->before(function (array $data) {
                        foreach ($data['criteria'] ?? [] as $block) {

                            $total = collect($block['data']['criteria'] ?? [])
                                ->sum(fn($item) => (float) ($item['score'] ?? 0));

                            if ($total > 100) {
                                $content = $block['data']['content'] ?? 'Unknown';
                                $level = $block['data']['level'] ?? 'Unknown';

                                Notification::make()
                                    ->danger()
                                    ->title('Validation Error')
                                    ->body("{$content} ({$level}) total must not exceed 100")
                                    ->send();
                                // throw Halt::make();
                            }
                        }
                    })
                    ->after(function ($record, array $data) {
                        try {
                            // $payload = [
                            //     'criteria_id' => $record->id,
                            //     'judges' => $record->criteria,
                            // ];

                            // JudgesGroup::create($payload);
                            // JudgesGroup::create([
                            //     'criteria_id' => $record->id,
                            //     'judges' =>  $data['_judges'] ?? [],
                            // ]);
                        } catch (\Throwable $e) {

                            logger()->error('JudgesGroup Create Failed', [
                                'message' => $e->getMessage(),
                                'line' => $e->getLine(),
                                'file' => $e->getFile(),
                                'trace' => $e->getTraceAsString(),
                            ]);

                            throw $e;
                        }
                    }),
            ])
            ->recordActions([
                EditAction::make()->modalWidth(Width::ScreenTwoExtraLarge),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
