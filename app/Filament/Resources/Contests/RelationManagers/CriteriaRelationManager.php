<?php

namespace App\Filament\Resources\Contests\RelationManagers;

use App\Enums\Round;
use App\Models\Criteria;
use App\Models\JudgesGroup;
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
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Filament\Support\Exceptions\Halt;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class CriteriaRelationManager extends RelationManager
{
    protected static string $relationship = 'criteria';

    public function criteriaShape(array $data)
    {
        if ($data['final_scoring_method'] === Round::Final->value) {
            $data['preliminary_round_percentage_score'] = 0;
            $data['final_round_percentage_score'] = 0;
        }

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
                'request_edit' => false,
            ])
            ->values()
            ->all();


        // 3. Map the Builder data (Crucial: Keep 'type' and 'criteria' scores)
        $data['criteria'] = collect($data['criteria'] ?? [])
            ->map(function ($block) {
                $total = collect($block['data']['criteria'] ?? [])
                    ->sum(fn($item) => (float) ($item['score'] ?? 0));
                return [
                    'type' => 'contest',
                    'data' => [
                        'level' => $block['data']['level'] ?? null,
                        'content' => $block['data']['content'] ?? null,
                        'weight' => $block['data']['level'] === Round::Final->value ? null : ($block['data']['weight'] ?? null),
                        'criteria' => $block['data']['criteria'] ?? [],
                        'total' => $total,

                    ],
                ];
            })
            ->values()
            ->all();
        $data['_meta'] = collect($data['criteria'] ?? [])
            ->map(fn($block) => [
                'content' => $block['data']['content'] ?? null,
                'level' => $block['data']['level'] ?? null,
                'judges' => $judgesJson
            ])
            ->values()
            ->all();

        return $data;
    }
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
                                ->searchable()
                                ->native(false)
                                ->options(function (callable $get) {
                                    $judges = match ($get('judges_source')) {
                                        'contest' => User::whereHas(
                                            'contests',
                                            fn($q) => $q->where('contest_id', $this->ownerRecord->id)
                                        )->get(),
                                        default => User::where('id', '!=', Auth::id())->get(),
                                    };

                                    return $judges
                                        ->groupBy(fn($judge) => $judge->category ?? 'No Category')
                                        ->map(fn($group) => $group->pluck('name', 'id'))
                                        ->toArray();
                                })
                                ->getSearchResultsUsing(function (string $search, callable $get) {
                                    $judges = match ($get('judges_source')) {
                                        'contest' => User::whereHas(
                                            'contests',
                                            fn($q) => $q->where('contest_id', $this->ownerRecord->id)
                                        ),
                                        default => User::where('id', '!=', Auth::id()),
                                    };

                                    return $judges
                                        ->where(function ($query) use ($search) {
                                            $query->where('name', 'like', "%{$search}%")
                                                ->orWhere('category', 'like', "%{$search}%"); // ✅ search by category
                                        })
                                        ->get()
                                        ->groupBy(fn($judge) => $judge->category ?? 'No Category') // ✅ keep grouping
                                        ->map(fn($group) => $group->pluck('name', 'id'))
                                        ->toArray();
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
                                        'prelimFinal' => 'Final & Prelim',
                                    ])
                                    ->live()
                                    ->required(),
                                Select::make('preliminary_scoring_method')
                                    ->options([
                                        'default' => 'Default',
                                        'weighted' => 'Weighted',
                                    ])
                                    ->live()
                                    ->required()
                            ])->columnSpanFull(),
                            Grid::make(2)->schema([
                                TextInput::make('preliminary_round_percentage_score')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->default(0)
                                    ->required(),
                                TextInput::make('final_round_percentage_score')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->default(0)
                                    ->required(),
                            ])->hidden(fn(Get $get): bool => $get('final_scoring_method') != 'prelimFinal'),
                            Grid::make(1)->schema([
                                Builder::make('criteria')
                                    ->label('Category contest')
                                    ->blocks([
                                        Block::make('contest')
                                            ->schema([
                                                Grid::make(3)
                                                    ->columns(fn(callable $get) => $get('../../../preliminary_scoring_method') === 'weighted' && $get('level') !== 'final'
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
                                                                $get('../../../preliminary_scoring_method') === 'weighted' &&  $get('level') !== 'final'
                                                            )
                                                            ->required(),
                                                        Select::make('level')
                                                            ->label('Contes Round')
                                                            ->options([
                                                                'preliminary' => 'Preliminary',
                                                                'final' => 'Final',
                                                            ])
                                                            ->live()
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

    public function judgeGroup($record, array $data)
    {
        try {
            JudgesGroup::updateOrCreate(
                [
                    'criteria_id' => $record->id,
                ],
                [
                    'judge_id' => $data['judges'],
                    'judges' => $data['_meta'] ?? [],
                ]
            );
        } catch (\Throwable $e) {

            logger()->error('JudgesGroup Create Failed', [
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'trace' => $e->getTraceAsString(),
            ]);

            throw $e;
        }
    }
    public function totalScore(array $data)
    {
        foreach ($data['criteria'] ?? [] as $block) {

            $total = collect($block['data']['criteria'] ?? [])
                ->sum(fn($item) => (float) ($item['score'] ?? 0));

            if ($total > 100) {
                $content = $block['data']['content'] ?? 'Unknown';
                $level = $block['data']['level'] ?? 'Unknown';

                Notification::make()
                    ->color('danger')
                    ->title('Validation Error')
                    ->body("{$content} ({$level}) total must not exceed 100")
                    ->send();
                // throw Halt::make();
            }
        }
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
                TrashedFilter::make(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->modalWidth(Width::ScreenTwoExtraLarge)
                    ->mutateDataUsing(fn(array $data): array => $this->criteriaShape($data))
                    ->before(fn(array $data) => $this->totalScore($data))
                    ->after(fn($record, array $data) => $this->judgeGroup($record, $data)),
            ])
            ->recordActions([
                EditAction::make()->mutateDataUsing(fn(array $data): array => $this->criteriaShape($data))
                    ->before(fn(array $data) => $this->totalScore($data))
                    ->after(fn($record, array $data) => $this->judgeGroup($record, $data))
                    ->modalWidth(Width::ScreenTwoExtraLarge),
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
