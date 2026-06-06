<?php

use App\Events\JudgeSubmittedEvent;
use App\Events\TabulateEvent;
use App\Models\Contest;
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

        $finalPrelim = Criteria::where('final_scoring_method', 'prelimFinal')
            ->where('id', $this->criteria[0]['id'])
            ->exists();

        $contestType = Contest::where('id', $this->criteria[0]['contest_id'])->value('contest_type');

        if ($contestType == 'individual') {

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
                        'grand_final_rank' => null,
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
                            $item['grand_final_rank'] = $rank;
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
                    'contest_id' => $this->criteria[0]['contest_id'],
                    'criteria_id' => $this->criteria[0]['id'],
                    'contest_category' => $contestCategory,
                    'round' => $level,
                ],
                [
                    'result' => $results,
                ],
            );
        } else {
            logger('team');
        }

        if ($finalPrelim) {
            $score = Result::where('criteria_id', $this->criteria[0]['id'])
                ->where('round', 'preliminary')
                ->where('contest_category', 'Top Finalist')
                ->get();
            $scoreFinal = Result::where('criteria_id', $this->criteria[0]['id'])
                ->where('round', 'final')
                ->get();
            $criteria = $this->criteria;

            $judgeCount = $this->judgeCount;
            $resultFinal = collect($scoreFinal)
                ->flatMap(function ($judgeScore) {
                    return collect($judgeScore->result)->map(function ($item) use ($judgeScore) {
                        return [
                            'participant' => $item['participant'],
                            'participant_id' => $item['participant']['id'],
                            'total' => $item['total'],
                        ];
                    });
                })
                // ✅ Group by participant — one row per person
                ->groupBy('participant_id')
                ->map(function ($items) use ($criteria) {
                    $first = $items->first();
                    return [
                        'participant' => $first['participant'],
                        'participant_id' => $first['participant_id'],
                        'final_total' => $first['total'],
                        'final_score' => $first['total'] * ($criteria[0]['final_round_percentage_score'] / 100), //FINAL ROUND
                    ];
                })
                ->sortBy('participant_no')
                ->values();

            $results = collect($score)
                ->flatMap(function ($judgeScore) {
                    return collect($judgeScore->result)->map(function ($item) use ($judgeScore) {
                        return [
                            'contest_category' => $judgeScore['contest_category'],
                            'participant_id' => $item['participant']['id'],
                            'participant' => $item['participant'],
                            'grand_total' => $item['grand_total'],
                        ];
                    });
                })
                // ✅ Group by participant — one row per person
                ->groupBy('participant_id')
                ->map(function ($items) use ($criteria) {
                    $first = $items->first();

                    return [
                        'participant' => $first['participant'],
                        'participant_id' => $first['participant_id'],
                        'participant_no' => $first['participant']['participant']['participant_no'],
                        'gender' => $first['participant']['participant']['gender'],
                        'grand_final_rank' => null,
                        'preliminary_total' => $first['grand_total'],
                        'preliminary_score' => $first['grand_total'] * ($criteria[0]['preliminary_round_percentage_score'] / 100), //preliminary round
                    ];
                })
                ->values()
                ->sortBy('participant_no')
                ->values();

            $merged = $results
                ->map(function ($item) use ($resultFinal) {
                    $final = $resultFinal->firstWhere('participant_id', $item['participant_id']); // ✅ use participant_id

                    return array_merge($item, [
                        'final_total' => $final ? $final['final_total'] : 0,
                        'final_score' => $final ? $final['final_score'] : 0,
                        'grand_total' => ($item['preliminary_score'] ?? 0) + ($final ? $final['final_score'] : 0),
                    ]);
                })
                ->filter(fn($item) => $item['final_total'] > 0 && $item['final_score'] > 0)
                ->values();
      
            $merged = $merged
                ->groupBy('gender')
                ->map(function ($group) {
                    $sorted = $group->sortByDesc('grand_total')->values();
                    $result = collect();
                    $i = 0;
                    $n = $sorted->count();

                    while ($i < $n) {
                        $current = $sorted[$i]['grand_total'];
                        $start = $i;
                        $end = $i;

                        while ($end + 1 < $n && $sorted[$end + 1]['grand_total'] == $current) {
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
                ->values();

            Result::updateOrCreate(
                [
                    'contest_id' => $this->criteria[0]['contest_id'],
                    'criteria_id' => $this->criteria[0]['id'],
                    'contest_category' => 'Final Score',
                    'round' => 'prelimFinal',
                ],
                [
                    'result' => $merged,
                ],
            );
        }

        Notification::make()
            ->title("Score Tabulated {$contestCategory}")
            ->color('success')
            ->body('You can now see the tabulated result.')
            ->send();

        broadcast(new TabulateEvent());
    }

    public function tabulateFinalist(string $level)
    {
        $score = Result::where('criteria_id', $this->criteria[0]['id'])
            ->where('round', $level)
            ->whereNotIn('contest_category', ['Top Finalist'])
            ->get();

        $scoringType = Contest::where('id', $this->criteria[0]['contest_id'])->value('scoring_type');

        $contestType = Contest::where('id', $this->criteria[0]['contest_id'])->value('contest_type');
        $judgeCount = $this->judgeCount;
        $criteriaCount = $this->criteriaCount;

        $weight =  collect($this->criteria)->map(function ($criteria) {
            return collect($criteria['criteria'])
                ->filter(fn($block) => $block['data']['level'] !== 'final')
                ->map(fn($block) => [
                    'weight'  => $block['data']['weight'],
                    'content' => $block['data']['content'],
                    'level'   => $block['data']['level'],
                ]);
        });
        $hasNoWeight = $weight->flatten(1)->every(fn($block) => empty($block['weight']));
        if ($contestType == 'individual') {
            $results = collect($score)
                ->flatMap(function ($judgeScore) {
                    return collect($judgeScore->result)->map(function ($item) use ($judgeScore) {
                        return [
                            'contest_category' => $judgeScore['contest_category'],
                            'participant_id' => $item['participant']['id'],
                            'participant' => $item['participant'],
                            'total_rank' => $item['total_rank'] ?? 0,
                            'total_score' => $item['total'] ?? 0,
                            'final_rank' => $item['final_rank'] ?? 0,
                        ];
                    });
                })
                // ✅ Group by participant — one row per person
                ->groupBy('participant_id')
                ->map(function ($items) use ($criteriaCount, $judgeCount, $scoringType) {
                    $first = $items->first();

                    // ✅ Build per-category scores dynamically
                    $categoryScores = $items
                        ->keyBy('contest_category')
                        ->map(
                            fn($cat) => [
                                'contest_category' => $cat['contest_category'],
                                'total_score' => $scoringType == 'rank_based' ? $cat['total_score'] : $cat['total_score'] / $judgeCount,
                                'total_rank' => $cat['total_rank'],
                                'final_rank' => $cat['final_rank'],
                                'weighted_rank' => null,
                            ],
                        )
                        ->values();

                    return [
                        'participant' => $first['participant'],
                        'participant_no' => $first['participant']['participant']['participant_no'],
                        'gender' => $first['participant']['participant']['gender'],
                        'categories' => $categoryScores,

                        'grand_total_rank' => $scoringType == 'rank_based' ? $items->sum('total_rank') : $items->sum('final_rank'),
                        'grand_total' => $scoringType == 'rank_based' ? $items->sum('total_score') / $criteriaCount : $items->sum('total_score') / $judgeCount,
                        'grand_final_rank' => null,
                    ];
                })
                // ✅ Rank per gender by grand_total descending
                ->groupBy('gender')
                ->map(function ($group) use ($scoringType, $weight, $hasNoWeight) {
                    $categoryNames = $group->first()['categories']->pluck('contest_category');

                    if ($scoringType != 'rank_based') {


                        foreach ($categoryNames as $categoryName) {
                            // Sort participants by this category's total_score descending
                            $sorted = $group->sortByDesc(function ($p) use ($categoryName) {
                                return $p['categories']->firstWhere('contest_category', $categoryName)['total_score'] ?? 0;
                            })->values();

                            $n = $sorted->count();
                            $i = 0;

                            while ($i < $n) {
                                $current = $sorted[$i]['categories']->firstWhere('contest_category', $categoryName)['total_score'];
                                $start = $i;
                                $end = $i;

                                while ($end + 1 < $n && $sorted[$end + 1]['categories']->firstWhere('contest_category', $categoryName)['total_score'] == $current) {
                                    $end++;
                                }

                                $rank = ($start + 1 + ($end + 1)) / 2;

                                for ($j = $start; $j <= $end; $j++) {
                                    $participantId = $sorted[$j]['participant']['id'];
                                    $group = $group->map(function ($p) use ($participantId, $categoryName, $rank) {
                                        if ($p['participant']['id'] === $participantId) {
                                            $p['categories'] = $p['categories']->map(function ($cat) use ($categoryName, $rank) {
                                                if ($cat['contest_category'] === $categoryName) {
                                                    $cat['final_rank'] = $rank;
                                                }
                                                return $cat;
                                            })->values();
                                        }
                                        return $p;
                                    });
                                }

                                $i = $end + 1;
                            }
                        }

                        // Recompute grand_total_rank as sum of final_ranks per category
                        // $group = $group->map(function ($p) {
                        //     $p['grand_total_rank'] = $p['categories']->sum('final_rank');
                        //     return $p;
                        // });
                    }

                    $group = $group->map(function ($p) use ($weight, $hasNoWeight, $scoringType) {

                        if (!$hasNoWeight) {
                            $p['categories'] = $p['categories']->map(function ($cat) use ($weight) {
                                $categoryWeight = $weight->flatten(1)
                                    ->firstWhere('content', $cat['contest_category']);
                                $w = $categoryWeight['weight'] / 100; // 25 → 0.25
                                $cat['weighted_rank'] = $cat['final_rank'] * $w; // ✅ 3 * 0.25 = 0.75
                                return $cat;
                            })->values();
                            $p['grand_total_rank'] = $p['categories']->sum('final_rank');
                            $p['grand_total'] = $p['categories']->sum('weighted_rank');
                        }

                        // ✅ only recompute grand_total_rank if NO weight
                        if ($hasNoWeight) {
                            $p['grand_total_rank'] = match (true) {
                                $scoringType == 'rank_based' => $p['categories']->sum('total_rank'),
                                default                      => $p['categories']->sum('final_rank'),
                            };
                        }


                        return $p;
                    });

                    // Now rank by grand_total or grand_total_rank
                    // $sorted = $group->sortBy('grand_total_rank')->values();

                    $sorted = !$hasNoWeight ?  $sorted = $group->sortBy('grand_total')->values() : $group->sortBy('grand_total_rank')->values();
                    $result = collect();
                    $i = 0;
                    $n = $sorted->count();

                    while ($i < $n) {
                        // $current = $sorted[$i]['grand_total_rank'];
                        $current = !$hasNoWeight ? $sorted[$i]['grand_total'] : $sorted[$i]['grand_total_rank'];

                        $start = $i;
                        $end = $i;

                        if (!$hasNoWeight) {
                            while ($end + 1 < $n && $sorted[$end + 1]['grand_total'] == $current) {
                                $end++;
                            }
                        } else {
                            while ($end + 1 < $n && $sorted[$end + 1]['grand_total_rank'] == $current) {
                                $end++;
                            }
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
                    'contest_id' => $this->criteria[0]['contest_id'],
                    'criteria_id' => $this->criteria[0]['id'],
                    'contest_category' => 'Top Finalist',
                    'round' => $level,
                ],
                [
                    'result' => $results,
                ],
            );
        } else {
        }
        Notification::make()->title('Score Tabulated')->color('success')->body('You can now see the tabulated result.')->send();

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