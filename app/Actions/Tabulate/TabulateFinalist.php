<?php

namespace App\Actions\Tabulate;

use App\Enums\ContestType;
use App\Enums\Round;
use App\Enums\ScoringType;
use App\Events\TabulateEvent;
use App\Models\Contest;
use App\Models\Result;
use Filament\Notifications\Notification;
use Illuminate\Support\Collection;

class TabulateFinalist
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

    public static function fromComponent(object $component): static
    {
        $instance = new static();
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

    public function tabulateFinalist(string $level)
    {
        $score = Result::where('criteria_id', $this->criteria[0]['id'])
            ->where('round', $level)
            ->whereNotIn('contest_category', ['Top Finalist'])
            ->get();

        $scoringType    = Contest::where('id', $this->criteria[0]['contest_id'])->value('scoring_type');
        $contestType    = Contest::where('id', $this->criteria[0]['contest_id'])->value('contest_type');
        $genderCategory = Contest::where('id', $this->criteria[0]['contest_id'])->value('gender_category');
        $judgeCount     = $this->judgeCount;
        $criteriaCount  = $this->criteriaCount;

        $weight = collect($this->criteria)->map(function ($criteria) {
            return collect($criteria['criteria'])->filter(fn($block) => $block['data']['level'] !== Round::Final->value)->map(
                fn($block) => [
                    'weight' => $block['data']['weight'] ?? 0,
                    'content' => $block['data']['content'],
                    'level' => $block['data']['level'],
                ],
            );
        });
        $hasNoWeight = $weight->flatten(1)->every(fn($block) => empty($block['weight']));

        if ($contestType == ContestType::Individual->value) {
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
                ->groupBy('participant_id')
                ->map(function ($items) use ($criteriaCount, $judgeCount, $scoringType) {
                    $first = $items->first();

                    $categoryScores = $items
                        ->keyBy('contest_category')
                        ->map(
                            fn($cat) => [
                                'contest_category' => $cat['contest_category'],
                                'total_score' => $scoringType == ScoringType::RANK_BASED->value ? $cat['total_score'] : $cat['total_score'] / $judgeCount,
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

                        'grand_total_rank' => $scoringType == ScoringType::RANK_BASED->value ? $items->sum('total_rank') : $items->sum('final_rank'),
                        'grand_total' => $scoringType == ScoringType::RANK_BASED->value ? $items->sum('total_score') / $criteriaCount : $items->sum('total_score') / $judgeCount,
                        'grand_final_rank' => null,
                    ];
                })
                // ✅ Filter participants based on gender_category (mirrors Tabulate.php)
                ->filter(fn($item) => $this->filterByGender($item['gender'], $genderCategory))
                // ✅ Rank either per-gender or as one pool, depending on gender_category
                ->pipe(fn($collection) => $this->applyRankingByGenderCategory(
                    $collection,
                    $genderCategory,
                    $scoringType,
                    $weight,
                    $hasNoWeight
                ))
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

    /**
     * Determine whether a participant should be included based on gender_category.
     */
    private function filterByGender(string $gender, string $genderCategory): bool
    {
        return match ($genderCategory) {
            'male'        => $gender === 'male',
            'female'      => $gender === 'female',
            'male&female' => in_array($gender, ['male', 'female']),
            'mixed'       => true,
            default       => true,
        };
    }

    /**
     * Rank either per-gender (male&female) or as a single combined pool (mixed/male/female).
     */
    private function applyRankingByGenderCategory(
        Collection $collection,
        string $genderCategory,
        string $scoringType,
        Collection $weight,
        bool $hasNoWeight,
    ): Collection {
        $rankFn = function (Collection $group) use ($scoringType, $weight, $hasNoWeight) {
            $categoryNames = $group->first()['categories']->pluck('contest_category');

            if ($scoringType != ScoringType::RANK_BASED->value) {
                foreach ($categoryNames as $categoryName) {
                    $sorted = $group
                        ->sortByDesc(function ($p) use ($categoryName) {
                            return $p['categories']->firstWhere('contest_category', $categoryName)['total_score'] ?? 0;
                        })
                        ->values();

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
                                    $p['categories'] = $p['categories']
                                        ->map(function ($cat) use ($categoryName, $rank) {
                                            if ($cat['contest_category'] === $categoryName) {
                                                $cat['final_rank'] = $rank;
                                            }
                                            return $cat;
                                        })
                                        ->values();
                                }
                                return $p;
                            });
                        }

                        $i = $end + 1;
                    }
                }
            }

            $group = $group->map(function ($p) use ($weight, $hasNoWeight, $scoringType) {
                if (!$hasNoWeight) {
                    $p['categories'] = $p['categories']
                        ->map(function ($cat) use ($weight) {
                            $categoryWeight = $weight->flatten(1)->firstWhere('content', $cat['contest_category']);
                            $w = $categoryWeight['weight'] / 100;
                            $cat['weighted_rank'] = $cat['final_rank'] * $w;
                            return $cat;
                        })
                        ->values();
                    $p['grand_total_rank'] = $p['categories']->sum('final_rank');
                    $p['grand_total'] = $p['categories']->sum('weighted_rank');
                }

                if ($hasNoWeight) {
                    $p['grand_total_rank'] = match (true) {
                        $scoringType == ScoringType::RANK_BASED->value => $p['categories']->sum('total_rank'),
                        default => $p['categories']->sum('final_rank'),
                    };
                }

                return $p;
            });

            $sorted = !$hasNoWeight ? $group->sortBy('grand_total')->values() : $group->sortBy('grand_total_rank')->values();
            $result = collect();
            $i = 0;
            $n = $sorted->count();

            while ($i < $n) {
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
        };

        // male&female = separate rankings per gender
        if ($genderCategory === 'male&female') {
            return $collection
                ->groupBy('gender')
                ->map(fn($group) => $rankFn($group))
                ->flatten(1);
        }

        // male / female / mixed = everyone ranked together
        return $rankFn($collection);
    }
}
