<?php

use App\Enums\ContestType;
use App\Enums\Round;
use App\Models\Result;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {
    public string $heading;
    public string $subHeading;
    public Collection $judges;
    public Collection $criteria;
    public Collection $score;
    public string $roundType;
    public string $tabType;
    public string $resultType;
    public bool $isRunnerUp;
    #[On('echo:tabulate,.Tabulate')]
    public function refreshData()
    {
        unset($this->result);
    }

    #[Computed]
    public function result()
    {
        return Result::where('contest_id', $this->criteria[0]['contest_id'])
            ->where('criteria_id', $this->criteria[0]['id'])
            ->where('round', $this->roundType)
            ->with(['contest', 'criteria'])
            ->get();
    }

    #[Computed]
    public function majorAward()
    {
        return $this->result->whereNotIn('contest_category', ['Top Finalist'])->map(function ($item) {
            $rankOne = collect($item->result)->where('final_rank', 1)->values();

            $item->result = $item->contest->gender_category === 'mixed' ? ['mixed' => $rankOne->all()] : $rankOne->groupBy('gender')->all();

            return $item;
        });
    }

    #[Computed]
    public function topResult()
    {
        return $this->result->where('contest_category', 'Top Finalist')->map(function ($item) {
            $qualified_participant = $this->result[0]['criteria']['qualified_participant'] ?? 3;

            if ($item->contest->gender_category === 'mixed') {
                $item->result = [
                    'mixed' => collect($item->result)->sortBy('grand_final_rank')->take($qualified_participant)->values()->all(),
                ];
            } else {
                $item->result = collect($item->result)->groupBy('gender')->map(fn($group) => $group->sortBy('grand_final_rank')->take($qualified_participant)->values())->all();
            }

            return $item;
        });
    }

    #[Computed]
    public function finalResult()
    {
        $isFinalPrelim = $this->criteria[0]['final_scoring_method'] == 'prelimFinal';
        $category = $isFinalPrelim ? 'Final Score' : $this->result[0]['contest_category'] ?? '';
        $contestType = $this->result[0]['contest']['contest_type'];

        return $this->result->where('contest_category', $category)->map(function ($item) use ($contestType) {
            $qualified_participant = $this->result[0]['criteria']['qualified_participant'] ?? 3;

            if ($item->contest->gender_category === 'mixed') {
                $sorted = $contestType === ContestType::Individual->value ? collect($item->result)->sortByDesc('grand_final_rank')->take($qualified_participant)->values() : collect($item->result)->sortBy('grand_final_rank')->take($qualified_participant)->values();

                $item->result = ['mixed' => $sorted->all()];
            } else {
                $item->result = collect($item->result)->groupBy('gender')->map(fn($group) => $contestType === ContestType::Individual->value ? $group->sortByDesc('grand_final_rank')->take($qualified_participant)->values() : $group->sortBy('grand_final_rank')->take($qualified_participant)->values())->all();
            }

            return $item;
        });
    }

    #[Computed]
    public function teamResult()
    {
        return $this->result;
    }
};
?>


<div class="font-serif space-y-10 mt-10">
    <div class=" border-t border-b p-2 border-black dark:border-white ">
        <h2 class="text-2xl font-bold text-center">
            {{ $heading }}
        </h2>
    </div>
    @php
        $contestType = $this->result[0]['contest']['contest_type'] ?? null;
        $t = $contestType === ContestType::Individual->value ? Round::Final->value : Round::Preliminary->value;

    @endphp
    @if ($subHeading)
        <div>
            <h3 class="text-center text-xl">TOP {{ $subHeading }} FINALIST</h3>
        </div>
    @endif

    @if ($tabType === 'major')
        <div class="flex flex-col justify-center w-full">
            @php
                $allMale = collect();
                $allFemale = collect();
                $allMixed = collect();
                $participantLabel = $criteria[0]['participant_label'];

                foreach ($this->majorAward as $results) {
                    $category = $results['contest_category'];
                    $isTeam = $contestType === ContestType::Team->value;

                    foreach ($results->result['male'] ?? [] as $res) {
                        $allMale->push([
                            'participant_no' => $isTeam
                                ? $res['participant']['participant']['team_participant_no']
                                : $res['participant']['participant']['participant_no'],
                            'category' => $category,
                            'name' => $isTeam
                                ? $res['participant']['participant']['team_name']
                                : $res['participant']['participant']['first_name'] .
                                    ' ' .
                                    $res['participant']['participant']['last_name'],
                        ]);
                    }

                    foreach ($results->result['female'] ?? [] as $res) {
                        $allFemale->push([
                            'participant_no' => $isTeam
                                ? $res['participant']['participant']['team_participant_no']
                                : $res['participant']['participant']['participant_no'],
                            'category' => $category,
                            'name' => $isTeam
                                ? $res['participant']['participant']['team_name']
                                : $res['participant']['participant']['first_name'] .
                                    ' ' .
                                    $res['participant']['participant']['last_name'],
                        ]);
                    }

                    foreach ($results->result['mixed'] ?? [] as $res) {
                        $allMixed->push([
                            'participant_no' => $isTeam
                                ? $res['participant']['participant']['team_participant_no']
                                : $res['participant']['participant']['participant_no'],
                            'category' => $category,
                            'name' => $isTeam
                                ? $res['participant']['participant']['team_name']
                                : $res['participant']['participant']['first_name'] .
                                    ' ' .
                                    $res['participant']['participant']['last_name'],
                        ]);
                    }
                }
            @endphp

            <div class="flex justify-between items-center gap-4">
                @if ($allMale->isNotEmpty())
                    <flux:card x:card class="w-full mb-6">
                        <flux:table class="font-bold">
                            <div class="border-b border-zinc-800/10 dark:border-white/20 text-center">
                                <p class="text-xl font-bold uppercase mb-2">Male {{ $participantLabel }}</p>
                            </div>
                            <flux:table.columns>
                                <flux:table.column>
                                    <p class="font-bold uppercase">{{ $participantLabel }} NO</p>
                                </flux:table.column>
                                <flux:table.column>
                                    <p class="font-bold">NAME</p>
                                </flux:table.column>
                                <flux:table.column>
                                    <p class="font-bold">CATEGORY</p>
                                </flux:table.column>
                            </flux:table.columns>
                            <flux:table.rows>
                                @foreach ($allMale as $entry)
                                    <flux:table.row>
                                        <flux:table.cell>
                                            <p class="text-black dark:text-white  font-bold">
                                                {{ $entry['participant_no'] }}
                                            </p>
                                        </flux:table.cell>
                                        <flux:table.cell>
                                            <p class="text-black dark:text-white  font-bold">{{ $entry['name'] }}</p>
                                        </flux:table.cell>
                                        <flux:table.cell>
                                            <p class="text-black dark:text-white  font-bold">Best in
                                                {{ $entry['category'] }}</p>
                                        </flux:table.cell>
                                    </flux:table.row>
                                @endforeach
                            </flux:table.rows>
                        </flux:table>
                    </flux:card>
                @endif
                @if ($allFemale->isNotEmpty())
                    <flux:card x:card class="w-full mb-6">
                        <flux:table class="font-bold">
                            <div class="border-b border-zinc-800/10 dark:border-white/20 text-center">
                                <p class="text-xl font-bold uppercase mb-2">Female {{ $participantLabel }}</p>
                            </div>
                            <flux:table.columns>
                                <flux:table.column>
                                    <p class="font-bold uppercase">{{ $participantLabel }} NO</p>
                                </flux:table.column>
                                <flux:table.column>
                                    <p class=" font-bold">NAME</p>
                                </flux:table.column>
                                <flux:table.column>
                                    <p class="  font-bold">CATEGORY</p>
                                </flux:table.column>
                            </flux:table.columns>
                            <flux:table.rows>
                                @foreach ($allFemale as $entry)
                                    <flux:table.row>
                                        <flux:table.cell>
                                            <p class="text-black dark:text-white  font-bold">
                                                {{ $entry['participant_no'] }}
                                            </p>
                                        </flux:table.cell>
                                        <flux:table.cell>
                                            <p class="text-black dark:text-white  font-bold">{{ $entry['name'] }}</p>
                                        </flux:table.cell>
                                        <flux:table.cell>
                                            <p class="text-black dark:text-white  font-bold">Best in
                                                {{ $entry['category'] }}</p>
                                        </flux:table.cell>
                                    </flux:table.row>
                                @endforeach
                            </flux:table.rows>
                        </flux:table>
                    </flux:card>
                @endif
            </div>

            @if ($allMixed->isNotEmpty())
                <flux:card x:card class="w-full mb-6">
                    <flux:table class="font-bold">
                        <div class="border-b border-zinc-800/10 dark:border-white/20 text-center">
                            <p class="text-xl font-bold uppercase mb-2">Mixed {{ $participantLabel }}</p>
                        </div>
                        <flux:table.columns>
                            <flux:table.column>
                                <p class="font-bold uppercase">{{ $participantLabel }} NO</p>
                            </flux:table.column>
                            <flux:table.column>
                                <p class=" font-bold">NAME</p>
                            </flux:table.column>
                            <flux:table.column>
                                <p class=" font-bold">CATEGORY</p>
                            </flux:table.column>
                        </flux:table.columns>
                        <flux:table.rows>
                            @foreach ($allMixed as $entry)
                                <flux:table.row>
                                    <flux:table.cell>
                                        <p class="text-black dark:text-white  font-bold">{{ $entry['participant_no'] }}
                                        </p>
                                    </flux:table.cell>
                                    <flux:table.cell>
                                        <p class="text-black dark:text-white  font-bold">{{ $entry['name'] }}</p>
                                    </flux:table.cell>
                                    <flux:table.cell>
                                        <p class="text-black dark:text-white  font-bold">Best in
                                            {{ $entry['category'] }}</p>
                                    </flux:table.cell>
                                </flux:table.row>
                            @endforeach
                        </flux:table.rows>
                    </flux:table>
                </flux:card>
            @endif
        </div>
    @elseif ($tabType === 'top')
        <div class="flex flex-col justify-center w-full">
            @foreach ($this->topResult as $results)
                @php
                    $genderCategory = $results->contest->gender_category;
                    $participantLabel = $results['criteria']['participant_label'] ?? '';
                    $isTeam = $contestType === ContestType::Team->value;
                @endphp

                @if ($genderCategory === 'male&female')
                    <livewire:table.result.top.male-female :results="$results" :isTeam="$isTeam" :key="'top-result-' . $results->id"
                        :participantLabel="$participantLabel" />
                @elseif ($genderCategory === 'male')
                    <livewire:table.result.top.male :results="$results" :isTeam="$isTeam" :key="'top-result-' . $results->id"
                        :participantLabel="$participantLabel" />
                @elseif ($genderCategory === 'female')
                    <livewire:table.result.top.female :results="$results" :isTeam="$isTeam" :key="'top-result-' . $results->id"
                        :participantLabel="$participantLabel" />
                @else
                    <livewire:table.result.top.mixed :results="$results" :isTeam="$isTeam" :key="'top-result-' . $results->id"
                        :participantLabel="$participantLabel" />
                @endif
            @endforeach
        </div>
    @elseif ($tabType === $t)
        <div class="flex flex-col justify-center w-full">

            @foreach ($this->finalResult as $results)
                @php
                    $category = $results['contest']['category'];
                    $participantLabel = $results['criteria']['participant_label'];

                    $qualifiedParticipant = $results['criteria']['qualified_participant'] ?? 3;

                    $ordinalSuffixes = ['th', 'st', 'nd', 'rd'];
                    $runnerUpOrdinals = [
                        'First', 'Second', 'Third', 'Fourth', 'Fifth',
                        'Sixth', 'Seventh', 'Eighth', 'Ninth', 'Tenth',
                        'Eleventh', 'Twelfth', 'Thirteenth', 'Fourteenth', 'Fifteenth',
                    ];

                    $labels = [];
                    for ($i = 1; $i <= $qualifiedParticipant; $i++) {
                        if ($i === 1 && $isRunnerUp) {
                            $labels[$i] = $results['contest']['category'] .
                                date_format(date_create($results['contest']['date']), ' Y');
                        } elseif ($isRunnerUp) {
                            $runnerUpLabel = $runnerUpOrdinals[$i - 1] ?? $i . $ordinalSuffixes[min($i % 100, 10)] ?? 'th';
                            $labels[$i] = $category . ' ' . $runnerUpLabel . ' Runner Up';
                        } else {
                            $suffix = $ordinalSuffixes[min($i % 100, 10)] ?? 'th';
                            $labels[$i] = $category . ' ' . $i . $suffix . ' Place';
                        }
                    }

                    $genderCategory = $results->contest->gender_category;
                    $isTeam = $contestType === ContestType::Team->value;

                    $maleByRank = collect($results->result['male'] ?? [])->values();
                    $femaleByRank = collect($results->result['female'] ?? [])->values();
                    $mixedByRank = collect($results->result['mixed'] ?? [])->values();
                    $teamByRank = collect($results->result['team'] ?? [])->values();

                    $total = $isTeam
                        ? $teamByRank->count()
                        : ($genderCategory === 'mixed'
                            ? $mixedByRank->count()
                            : max($maleByRank->count(), $femaleByRank->count()));
                @endphp

                @if ($genderCategory === 'male&female')
                    <livewire:table.result.final.male-female :labels="$labels" :isTeam="$isTeam" :maleByRank="$maleByRank"
                        :femaleByRank="$femaleByRank" :key="'top-result-' . $results->id" :total="$total" :participantLabel="$participantLabel" />
                @elseif ($genderCategory === 'male')
                    <livewire:table.result.final.male :labels="$labels" :isTeam="$isTeam" :maleByRank="$maleByRank"
                        :key="'top-result-' . $results->id" :total="$total" :participantLabel="$participantLabel" />
                @elseif ($genderCategory === 'female')
                    <livewire:table.result.final.female :labels="$labels" :isTeam="$isTeam" :femaleByRank="$femaleByRank"
                        :key="'top-result-' . $results->id" :total="$total" :participantLabel="$participantLabel" />
                @else
                    <livewire:table.result.final.mixed :labels="$labels" :isTeam="$isTeam" :mixedByRank="$mixedByRank"
                        :teamByRank="$teamByRank" :key="'top-result-' . $results->id" :total="$total" :participantLabel="$participantLabel" />
                @endif
            @endforeach
        </div>
    @endif
    <livewire:footer :judges="$judges" />
</div>
