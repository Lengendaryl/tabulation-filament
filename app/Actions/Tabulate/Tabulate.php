<?php

namespace App\Actions\Tabulate;

use App\Enums\ContestType;
use App\Enums\Round;
use App\Enums\ScoringType;
use App\Events\TabulateEvent;
use App\Models\Contest;
use App\Models\Criteria;
use App\Models\Result;
use App\Models\Score;
use Filament\Notifications\Notification;
use Illuminate\Support\Collection;

class Tabulate
{
    public string $heading = '';
    public Collection $judges;
    public Collection $contest;
    public array $judgeStatusMap = [];
    public Collection $criteria;
    public Collection $score;
    public int $judgeCount;
    public int $criteriaCount;
    public string $roundType = 'preliminary';
    public int $selectedJudgeId = 0;
    public string $contestType;

    public function __construct() {}

    /**
     * Create a Tabulate instance populated from a Livewire/Volt component.
     */
    public static function fromComponent(object $component): static
    {
        $instance                = new static();
        $instance->criteria      = $component->criteria;
        $instance->judgeCount    = $component->judgeCount;
        $instance->criteriaCount = $component->criteriaCount;
        $instance->contestType   = $component->contestType;
        $instance->roundType     = $component->roundType;
        $instance->heading       = $component->heading;
        $instance->judges        = $component->judges;
        $instance->contest       = $component->contest;
        return $instance;
    }

    // ─────────────────────────────────────────────────────────────────────────
    // PUBLIC METHODS
    // ─────────────────────────────────────────────────────────────────────────

    public function tabulate(string $level, string $contestCategory): void
    {
        $judgeCount     = $this->judgeCount;
        $contestType    = Contest::where('id', $this->criteria[0]['contest_id'])->value('contest_type');
        $genderCategory = Contest::where('id', $this->criteria[0]['contest_id'])->value('gender_category');

        $score = Score::where('criteria_id', $this->criteria[0]['id'])
            ->where('contest_category', $contestCategory)
            ->where('level', $level)
            ->get();

        $finalPrelim = Criteria::where('final_scoring_method', Round::PrelimFinal)
            ->where('id', $this->criteria[0]['id'])
            ->exists();

        $results = collect($score)
            ->flatMap(fn($judgeScore) => collect($judgeScore->score)->map(fn($item) => [
                'judge'          => $judgeScore['judge']['name'],
                'participant_id' => $item['participant_id'],
                'rank'           => $item['rank'],
                'participant'    => $item['participant'],
                'total_score'    => $item['total_score'],
            ]))
            ->groupBy('participant_id')
            ->map(function ($items) use ($judgeCount, $contestType) {
                $first = $items->first();
                return [
                    'participant'      => $first['participant'],
                    'gender'           => $contestType === 'team' ? 'team' : $first['participant']['participant']['gender'],
                    'total_rank'       => $items->sum('rank'),
                    'total'            => $items->sum('total_score') / $judgeCount,
                    'final_rank'       => null,
                    'grand_final_rank' => null,
                    'judges'           => $items->map(fn($i) => [
                        'judge'       => $i['judge'],
                        'rank'        => $i['rank'],
                        'total_score' => $i['total_score'],
                    ])->values(),
                ];
            })
            // Filter participants based on gender_category
            ->filter(fn($item) => $this->filterByGender($item['gender'], $genderCategory, $contestType))
            ->pipe(fn($collection) => $this->applyRankingByGenderCategory(
                $collection,
                $genderCategory,
                $contestType,
                'total_rank',
                'asc'
            ))
            ->sortBy(
                fn($item) => $contestType === 'team'
                    ? $item['participant']['participant']['team_participant_no']
                    : $item['participant']['participant']['participant_no']
            )
            ->values();

        Result::updateOrCreate(
            [
                'contest_id'       => $this->criteria[0]['contest_id'],
                'criteria_id'      => $this->criteria[0]['id'],
                'contest_category' => $contestCategory,
                'round'            => $level,
            ],
            ['result' => $results],
        );

        if ($finalPrelim) {
            $this->tabulatePrelimFinal($genderCategory);
        }

        Notification::make()
            ->title("Score Tabulated {$contestCategory}")
            ->color('success')
            ->body('You can now see the tabulated result.')
            ->send();

        broadcast(new TabulateEvent());
    }

    public function tabulateFinalist(string $level): void
    {
        $contestType    = Contest::where('id', $this->criteria[0]['contest_id'])->value('contest_type');
        $scoringType    = Contest::where('id', $this->criteria[0]['contest_id'])->value('scoring_type');
        $genderCategory = Contest::where('id', $this->criteria[0]['contest_id'])->value('gender_category');
        $judgeCount     = $this->judgeCount;
        $criteriaCount  = $this->criteriaCount;
        $criteria       = $this->criteria;

        $score = Result::where('criteria_id', $this->criteria[0]['id'])
            ->where('round', $level)
            ->whereNotIn('contest_category', ['Top Finalist'])
            ->get();

        $weight = collect($criteria)->map(
            fn($c) => collect($c['criteria'])
                ->filter(fn($block) => $block['data']['level'] !== Round::Final->value)
                ->map(fn($block) => [
                    'weight'  => $block['data']['weight'] ?? 0,
                    'content' => $block['data']['content'],
                    'level'   => $block['data']['level'],
                ])
        );

        $hasNoWeight = $weight->flatten(1)->every(fn($block) => empty($block['weight']));

        if ($contestType == ContestType::Individual->value) {
            $results = collect($score)
                ->flatMap(fn($judgeScore) => collect($judgeScore->result)->map(fn($item) => [
                    'contest_category' => $judgeScore['contest_category'],
                    'participant_id'   => $item['participant']['id'],
                    'participant'      => $item['participant'],
                    'total_rank'       => $item['total_rank'] ?? 0,
                    'total_score'      => $item['total'] ?? 0,
                    'final_rank'       => $item['final_rank'] ?? 0,
                ]))
                ->groupBy('participant_id')
                ->map(function ($items) use ($criteriaCount, $judgeCount, $scoringType) {
                    $first = $items->first();

                    $categoryScores = $items
                        ->keyBy('contest_category')
                        ->map(fn($cat) => [
                            'contest_category' => $cat['contest_category'],
                            'total_score'      => $scoringType == ScoringType::RANK_BASED->value
                                ? $cat['total_score']
                                : $cat['total_score'] / $judgeCount,
                            'total_rank'       => $cat['total_rank'],
                            'final_rank'       => $cat['final_rank'],
                            'weighted_rank'    => null,
                        ])
                        ->values();

                    return [
                        'participant'      => $first['participant'],
                        'participant_no'   => $first['participant']['participant']['participant_no'],
                        'gender'           => $first['participant']['participant']['gender'],
                        'categories'       => $categoryScores,
                        'grand_total_rank' => $scoringType == ScoringType::RANK_BASED->value
                            ? $items->sum('total_rank')
                            : $items->sum('final_rank'),
                        'grand_total'      => $scoringType == ScoringType::RANK_BASED->value
                            ? $items->sum('total_score') / $criteriaCount
                            : $items->sum('total_score') / $judgeCount,
                        'grand_final_rank' => null,
                    ];
                })
                // Filter by gender category
                ->filter(fn($item) => $this->filterByGender($item['gender'], $genderCategory, $contestType))
                ->pipe(fn($collection) => $this->applyFinalistRankingByGenderCategory(
                    $collection,
                    $genderCategory,
                    $contestType,
                    $scoringType,
                    $weight,
                    $hasNoWeight
                ))
                ->sortBy('participant_no')
                ->values();

            Result::updateOrCreate(
                [
                    'contest_id'       => $this->criteria[0]['contest_id'],
                    'criteria_id'      => $this->criteria[0]['id'],
                    'contest_category' => 'Top Finalist',
                    'round'            => $level,
                ],
                ['result' => $results],
            );
        }

        Notification::make()
            ->title('Score Tabulated')
            ->color('success')
            ->body('You can now see the tabulated result.')
            ->send();

        broadcast(new TabulateEvent());
    }

    // ─────────────────────────────────────────────────────────────────────────
    // PRIVATE HELPERS
    // ─────────────────────────────────────────────────────────────────────────

    /**
     * Determine whether a participant should be included based on gender_category.
     *
     * male        → only males
     * female      → only females
     * male&female → both male and female (ranked separately)
     * mixed       → everyone together (no filter)
     * team        → skip gender logic entirely
     */
    private function filterByGender(string $gender, string $genderCategory, string $contestType): bool
    {
        if ($contestType === 'team') return true;

        return match ($genderCategory) {
            'male'        => $gender === 'male',
            'female'      => $gender === 'female',
            'male&female' => in_array($gender, ['male', 'female']),
            'mixed'       => true,
            default       => true,
        };
    }

    /**
     * Apply ranking to a collection based on gender_category.
     *
     * male&female → rank males separately, females separately
     * everything else → rank everyone together in one pool
     */
    private function applyRankingByGenderCategory(
        Collection $collection,
        string $genderCategory,
        string $contestType,
        string $sortKey,
        string $direction,
    ): Collection {
        // male&female = separate rankings per gender
        if ($genderCategory === 'male&female' && $contestType !== 'team') {
            return $collection
                ->groupBy('gender')
                ->map(fn($group) => $this->rankGroup($group, $sortKey, $direction))
                ->flatten(1);
        }

        // male / female / mixed / team = everyone ranked together
        return $this->rankGroup($collection, $sortKey, $direction);
    }

    /**
     * Apply finalist ranking with per-category scoring, weights, and gender grouping.
     */
    private function applyFinalistRankingByGenderCategory(
        Collection $collection,
        string $genderCategory,
        string $contestType,
        string $scoringType,
        Collection $weight,
        bool $hasNoWeight,
    ): Collection {
        $rankFn = function (Collection $group) use ($scoringType, $weight, $hasNoWeight) {
            $categoryNames = $group->first()['categories']->pluck('contest_category');

            // Per-category ranking (point-based only)
            if ($scoringType != ScoringType::RANK_BASED->value) {
                foreach ($categoryNames as $categoryName) {
                    $sorted = $group->sortByDesc(
                        fn($p) => $p['categories']->firstWhere('contest_category', $categoryName)['total_score'] ?? 0
                    )->values();

                    $n = $sorted->count();
                    $i = 0;

                    while ($i < $n) {
                        $current = $sorted[$i]['categories']->firstWhere('contest_category', $categoryName)['total_score'];
                        $start   = $i;
                        $end     = $i;

                        while ($end + 1 < $n && $sorted[$end + 1]['categories']->firstWhere('contest_category', $categoryName)['total_score'] == $current) {
                            $end++;
                        }

                        $rank = ($start + 1 + ($end + 1)) / 2;

                        for ($j = $start; $j <= $end; $j++) {
                            $participantId = $sorted[$j]['participant']['id'];
                            $group         = $group->map(function ($p) use ($participantId, $categoryName, $rank) {
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
            }

            // Apply weights and recompute grand totals
            $group = $group->map(function ($p) use ($weight, $hasNoWeight, $scoringType) {
                if (!$hasNoWeight) {
                    $p['categories'] = $p['categories']->map(function ($cat) use ($weight) {
                        $categoryWeight       = $weight->flatten(1)->firstWhere('content', $cat['contest_category']);
                        $w                    = $categoryWeight['weight'] / 100;
                        $cat['weighted_rank'] = $cat['final_rank'] * $w;
                        return $cat;
                    })->values();
                    $p['grand_total_rank'] = $p['categories']->sum('final_rank');
                    $p['grand_total']      = $p['categories']->sum('weighted_rank');
                }

                if ($hasNoWeight) {
                    $p['grand_total_rank'] = match (true) {
                        $scoringType == ScoringType::RANK_BASED->value => $p['categories']->sum('total_rank'),
                        default                                         => $p['categories']->sum('final_rank'),
                    };
                }

                return $p;
            });

            // Final ranking pass
            $sorted = !$hasNoWeight
                ? $group->sortBy('grand_total')->values()
                : $group->sortBy('grand_total_rank')->values();

            $result = collect();
            $i      = 0;
            $n      = $sorted->count();

            while ($i < $n) {
                $current = !$hasNoWeight ? $sorted[$i]['grand_total'] : $sorted[$i]['grand_total_rank'];
                $start   = $i;
                $end     = $i;

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
                    $item                     = $sorted[$j];
                    $item['grand_final_rank'] = $rank;
                    $result->push($item);
                }

                $i = $end + 1;
            }

            return $result;
        };

        // male&female = separate rankings per gender
        if ($genderCategory === 'male&female' && $contestType !== 'team') {
            return $collection
                ->groupBy('gender')
                ->map(fn($group) => $rankFn($group))
                ->flatten(1);
        }

        // male / female / mixed / team = everyone ranked together
        return $rankFn($collection);
    }

    /**
     * Rank a flat collection using modified competition ranking (ties get average position).
     *
     * @param string $sortKey  'total_rank' or 'grand_total'
     * @param string $direction 'asc' for rank-based, 'desc' for score-based
     */
    private function rankGroup(Collection $collection, string $sortKey, string $direction = 'asc'): Collection
    {
        $sorted = $direction === 'asc'
            ? $collection->sortBy($sortKey)->values()
            : $collection->sortByDesc($sortKey)->values();

        $result = collect();
        $i      = 0;
        $n      = $sorted->count();

        while ($i < $n) {
            $current = $sorted[$i][$sortKey];
            $start   = $i;
            $end     = $i;

            while ($end + 1 < $n && $sorted[$end + 1][$sortKey] == $current) {
                $end++;
            }

            $rank = ($start + 1 + ($end + 1)) / 2;

            for ($j = $start; $j <= $end; $j++) {
                $item                     = $sorted[$j];
                $item['final_rank']       = $rank;
                $item['grand_final_rank'] = $rank;
                $result->push($item);
            }

            $i = $end + 1;
        }

        return $result;
    }

    /**
     * Handles combined prelim+final scoring when final_scoring_method = PrelimFinal.
     */
    private function tabulatePrelimFinal(string $genderCategory = 'mixed'): void
    {
        $criteria = $this->criteria;

        $score = Result::where('criteria_id', $this->criteria[0]['id'])
            ->where('round', Round::Preliminary)
            ->where('contest_category', 'Top Finalist')
            ->get();

        $scoreFinal = Result::where('criteria_id', $this->criteria[0]['id'])
            ->where('round', Round::Final)
            ->get();

        $resultFinal = collect($scoreFinal)
            ->flatMap(fn($judgeScore) => collect($judgeScore->result)->map(fn($item) => [
                'participant'    => $item['participant'],
                'participant_id' => $item['participant']['id'],
                'total'          => $item['total'],
            ]))
            ->groupBy('participant_id')
            ->map(function ($items) use ($criteria) {
                $first = $items->first();
                return [
                    'participant'    => $first['participant'],
                    'participant_id' => $first['participant_id'],
                    'final_total'    => $first['total'],
                    'final_score'    => $first['total'] * ($criteria[0]['final_round_percentage_score'] / 100),
                ];
            })
            ->sortBy('participant_no')
            ->values();

        $results = collect($score)
            ->flatMap(fn($judgeScore) => collect($judgeScore->result)->map(fn($item) => [
                'contest_category' => $judgeScore['contest_category'],
                'participant_id'   => $item['participant']['id'],
                'participant'      => $item['participant'],
                'grand_total'      => $item['grand_total'],
            ]))
            ->groupBy('participant_id')
            ->map(function ($items) use ($criteria) {
                $first = $items->first();
                return [
                    'participant'       => $first['participant'],
                    'participant_id'    => $first['participant_id'],
                    'participant_no'    => $first['participant']['participant']['participant_no'],
                    'gender'            => $first['participant']['participant']['gender'],
                    'grand_final_rank'  => null,
                    'preliminary_total' => $first['grand_total'],
                    'preliminary_score' => $first['grand_total'] * ($criteria[0]['preliminary_round_percentage_score'] / 100),
                ];
            })
            ->sortBy('participant_no')
            ->values();

        $merged = $results
            ->map(function ($item) use ($resultFinal) {
                $final = $resultFinal->firstWhere('participant_id', $item['participant_id']);
                return array_merge($item, [
                    'final_total' => $final ? $final['final_total'] : 0,
                    'final_score' => $final ? $final['final_score'] : 0,
                    'grand_total' => ($item['preliminary_score'] ?? 0) + ($final ? $final['final_score'] : 0),
                ]);
            })
            ->filter(fn($item) => $item['final_total'] > 0 && $item['final_score'] > 0)
            ->values();

        // Apply gender-category-aware ranking
        $merged = ($genderCategory === 'male&female')
            ? $merged
            ->groupBy('gender')
            ->map(fn($group) => $this->rankGroup($group, 'grand_total', 'desc'))
            ->flatten(1)
            ->values()
            : $this->rankGroup($merged, 'grand_total', 'desc')->values();

        Result::updateOrCreate(
            [
                'contest_id'       => $this->criteria[0]['contest_id'],
                'criteria_id'      => $this->criteria[0]['id'],
                'contest_category' => 'Final Score',
                'round'            => 'prelimFinal',
            ],
            ['result' => $merged],
        );
    }
}
