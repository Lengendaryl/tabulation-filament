<?php

use App\Events\JudgeSubmittedEvent;
use App\Events\TabulateEvent;
use App\Models\Criteria;
use App\Models\JudgesGroup;
use App\Models\Result;
use App\Models\Score;
use Filament\Notifications\Notification;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {
    public string $heading = '';
    public Collection $judges;
    public Collection $contest;
    public array $judgeStatusMap = [];
    public Collection $criteria;
    public Collection $score;
    public int $judgeCount;
    public int $criteriaCount;
    public string $roundType = 'preliminary';

    public function buildJudgeStatusMap(): void
    {
        $groups = JudgesGroup::where('criteria_id', $this->criteria[0]['id'])->get();
        $map = [];

        foreach ($groups as $group) {
            foreach ($group->judges as $levelGroup) {
                $categoryName = $levelGroup['content'] ?? null;
                foreach ($levelGroup['judges'] ?? [] as $judgeStatus) {
                    $judgeId = $judgeStatus['judge_id'] ?? null;
                    if ($categoryName && $judgeId) {
                        $map[$categoryName][$judgeId] = [
                            'status' => $judgeStatus['status'] ?? false,
                            'request_edit' => $judgeStatus['request_edit'] ?? false,
                        ];
                    }
                }
            }
        }

        $this->judgeStatusMap = $map;
    }

    // ✅ Add this
    public function mount(): void
    {
        $this->judgeCount = JudgesGroup::where('criteria_id', $this->criteria[0]['id'])
            ->pluck('judge_id')
            ->flatten()
            ->count();

        $this->criteriaCount = collect($this->criteria[0]['criteria'])
            ->where('data.level', 'preliminary')
            ->count();

        $this->buildJudgeStatusMap();
    }

    #[On('echo:judging,.JudgeSubmittedEvent')]
    public function handleJudgeSubmitted(): void
    {
        $this->buildJudgeStatusMap();
    }

    public function toggleStatus(string $originalCategory, string $level, int $judgeId)
    {
        $groups = JudgesGroup::where('criteria_id', $this->criteria[0]['id'])->get();
        foreach ($groups as $group) {
            $judges = $group->judges;
            $updated = false;

            foreach ($judges as $i => $competitionLevel) {
                if (($competitionLevel['content'] ?? null) !== $originalCategory || ($competitionLevel['level'] ?? null) !== $level) {
                    continue;
                }

                foreach ($competitionLevel['judges'] as $j => $judgeStatus) {
                    if (($judgeStatus['judge_id'] ?? null) == $judgeId) {
                        // ✅ TOGGLE instead of forcing true
                        $currentStatus = $judges[$i]['judges'][$j]['status'] ?? false;
                        $statusRequestEdit = $judges[$i]['judges'][$j]['request_edit'] ?? false;
                        $judges[$i]['judges'][$j]['status'] = !$currentStatus;
                        $judges[$i]['judges'][$j]['request_edit'] = !$statusRequestEdit;

                        $updated = true;

                        break 2;
                    }
                }
            }

            if ($updated) {
                $group->judges = $judges;
                $group->save();
                $this->buildJudgeStatusMap();
                broadcast(new JudgeSubmittedEvent($judgeId, $originalCategory))->toOthers();
            }
        }
    }

    public function tabulate(string $level, string $contestCategory)
    {
        $judgeCount = $this->judgeCount;

        $score = Score::where('criteria_id', $this->criteria[0]['id'])
            ->where('contest_category', $contestCategory)
            ->where('level', $level)
            ->get();

        $results = collect($score)
            ->flatMap(function ($judgeScore) {
                return collect($judgeScore->score)->map(function ($item) use ($judgeScore) {
                    return [
                        'judge' => $judgeScore['judge']['name'],
                        'participant_id' => $item['participant_id'],
                        'rank' => $item['rank'],
                        'participant' => $item['participant'],
                        'total_score' => $item['total_score'],
                    ];
                });
            })
            ->groupBy('participant_id')
            ->map(function ($items) use ($judgeCount) {
                $first = $items->first();
                return [
                    'participant' => $first['participant'],
                    'gender' => $first['participant']['participant']['gender'],
                    'total_rank' => $items->sum('rank'),
                    'total' => $items->sum('total_score') / $judgeCount,
                    'final_rank' => null,
                    'judges' => $items
                        ->map(function ($i) {
                            return [
                                'judge' => $i['judge'],
                                'rank' => $i['rank'],
                                'total_score' => $i['total_score'],
                            ];
                        })
                        ->values(),
                ];
            })
            ->groupBy('gender')
            ->map(function ($group) {
                $sorted = $group->sortBy('total_rank')->values();
                $result = collect();

                $i = 0;
                $n = $sorted->count();

                while ($i < $n) {
                    $current = $sorted[$i]['total_rank'];
                    $start = $i;
                    $end = $i;

                    while ($end + 1 < $n && $sorted[$end + 1]['total_rank'] == $current) {
                        $end++;
                    }

                    $rank = ($start + 1 + ($end + 1)) / 2;

                    for ($j = $start; $j <= $end; $j++) {
                        $item = $sorted[$j];
                        $item['final_rank'] = $rank;
                        $result->push($item);
                    }

                    $i = $end + 1;
                }

                return $result;
            })
            ->flatten(1)
            ->sortBy(function ($item) {
                return $item['participant']['participant']['participant_no'];
            })
            ->values();

        Result::updateOrCreate(
            [
                'contest_id' => $this->score[0]['contest_id'],
                'criteria_id' => $this->criteria[0]['id'],
                'contest_category' => $contestCategory,
                'round' => $level,
            ],
            [
                'result' => $results,
            ],
        );

        Notification::make()
            ->title('Score Tabulated')
            ->color('success')
            ->body('You can now see the tabulated result.')
            ->send();

        broadcast(new TabulateEvent());
    }

    public function tabulateFinalist(string $level)
    {
        $score = Result::where('criteria_id', $this->criteria[0]['id'])
            ->where('round', $level)
            ->get();

        $judgeCount = $this->judgeCount;
        $criteriaCount = $this->criteriaCount;
        $results = collect($score)
            ->flatMap(function ($judgeScore) {
                return collect($judgeScore->result)->map(function ($item) use ($judgeScore) {
                    return [
                        'contest_category' => $judgeScore['contest_category'],
                        'participant_id' => $item['participant']['id'],
                        'participant' => $item['participant'],
                        'total_rank' => $item['total_rank'],
                        'total_score' => $item['total'],
                        'final_rank' => $item['final_rank'],
                    ];
                });
            })
            // ✅ Group by participant — one row per person
            ->groupBy('participant_id')
            ->map(function ($items) use ($criteriaCount) {
                $first = $items->first();

                // ✅ Build per-category scores dynamically
                $categoryScores = $items
                    ->keyBy('contest_category')
                    ->map(
                        fn($cat) => [
                            'contest_category' => $cat['contest_category'],
                            'total_score' => $cat['total_score'],
                            'total_rank' => $cat['total_rank'],
                            'final_rank' => $cat['final_rank'],
                        ],
                    )
                    ->values();

                return [
                    'participant' => $first['participant'],
                    'participant_no' => $first['participant']['participant']['participant_no'],
                    'gender' => $first['participant']['participant']['gender'],
                    'categories' => $categoryScores, // keyed by category name
                    'grand_total_rank' => $items->sum('total_rank'),
                    'grand_total' => $items->sum('total_score') / $criteriaCount, // ✅ sum of all category scores
                    'grand_final_rank' => null,
                ];
            })
            // ✅ Rank per gender by grand_total descending
            ->groupBy('gender')
            ->map(function ($group) {
                $sorted = $group->sortBy('grand_total_rank')->values();
                $result = collect();
                $i = 0;
                $n = $sorted->count();

                while ($i < $n) {
                    $current = $sorted[$i]['grand_total_rank'];
                    $start = $i;
                    $end = $i;

                    while ($end + 1 < $n && $sorted[$end + 1]['grand_total_rank'] == $current) {
                        $end++;
                    }

                    $rank = ($start + 1 + ($end + 1)) / 2;

                    for ($j = $start; $j <= $end; $j++) {
                        $item = $sorted[$j];
                        $item['grand_final_rank'] = $rank;
                        $result->push($item);
                    }

                    $i = $end + 1;
                }

                return $result;
            })
            ->flatten(1)
            ->sortBy('participant_no')
            ->values();

        Result::updateOrCreate(
            [
                'contest_id' => $this->score[0]['contest_id'],
                'criteria_id' => $this->criteria[0]['id'],
                'contest_category' => 'Top Finalist',
                'round' => $level,
            ],
            [
                'result' => $results,
            ],
        );

        Notification::make()
            ->title('Score Tabulated')
            ->color('success')
            ->body('You can now see the tabulated result.')
            ->send();

        broadcast(new TabulateEvent());
    }
};
?>

<div class="space-y-2">
    <p class="text-xl font-bold">{{ $heading }} JUDGES CONTEST</p>
    <flux:table class="border-b">
        <flux:table.columns>
            <flux:table.column>JUDGES</flux:table.column>
            @foreach ($contest as $content)
            <flux:table.column class="uppercase text-wrap">{{ $content['content'] }}</flux:table.column>
            <flux:table.column>ACTION</flux:table.column>
            @endforeach
        </flux:table.columns>
        <flux:table.rows>
            @foreach ($judges as $judge)
            <flux:table.row class="uppercase">
                <flux:table.cell>
                    <p class="text-black font-medium dark:text-white">{{ $judge['name'] }}</p>
                </flux:table.cell>
                @foreach ($contest as $content)
                @php
                $categoryName = $content['content'];
                $judgeId = $judge['judge_id'];
                $level = $content['level'];
                $status = $judgeStatusMap[$categoryName][$judgeId]['status'] ?? false;
                $request = $judgeStatusMap[$categoryName][$judgeId]['request_edit'] ?? false;
                @endphp
                <flux:table.cell>
                    <flux:badge variant="solid" color="{{ $status ? 'green' : 'red' }}" size="sm"
                        icon="{{ $status ? 'check-circle' : 'x-circle' }}">
                        {{ $status ? 'SUBMITTED' : 'UNSUBMITTED' }}
                    </flux:badge>
                </flux:table.cell>
                <flux:table.cell class="flex items-center gap-1">
                    <flux:button
                        wire:click="toggleStatus('{{ $categoryName }}', '{{ $level }}','{{ $judgeId }}')"
                        :variant="$status ? null : 'primary'" color="violet" size="xs">
                        {{ $status ? 'DISABLED' : 'ENABLED' }}
                    </flux:button>

                    @if ($request)
                    <flux:icon.pencil variant="mini" class="text-violet-400" />
                    @endif
                </flux:table.cell>
                @endforeach
            </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>

    <div class="flex items-center justify-between gap-4 ">
        @foreach ($contest as $content)
        @php
        $categoryName = $content['content'];
        @endphp
        <flux:card class="w-full p-4 space-y-4">
            <div>
                <flux:heading size="lg" class="uppercase">{{ $categoryName }}</flux:heading>
            </div>
            <div>
                <flux:button variant="primary" color="violet"
                    class="w-full hover:bg-violet-600 hover:shadow-lg hover:shadow-violet-600/50"
                    wire:click="tabulate('{{ Str::lower($heading) }}','{{ $categoryName }}')">
                    TABULATE {{ Str::upper($categoryName) }}
                </flux:button>
            </div>
        </flux:card>
        @endforeach
        @if ($roundType == 'preliminary')
        <flux:card class="w-full p-4 space-y-4">
            <div>
                <flux:heading size="lg" class="uppercase">TOP {{ $criteria[0]['qualified_participant'] }}
                    FINALIST
                </flux:heading>
            </div>

            <div>
                <flux:button variant="primary" color="violet"
                    class="w-full hover:bg-violet-600 hover:shadow-lg hover:shadow-violet-600/50"
                    wire:click="tabulateFinalist('{{ Str::lower($heading) }}')">
                    TABULATE TOP {{ $criteria[0]['qualified_participant'] }} FINALIST
                </flux:button>
            </div>
        </flux:card>
        @endif
    </div>
</div>