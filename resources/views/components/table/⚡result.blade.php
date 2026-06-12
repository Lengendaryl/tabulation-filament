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
            $item->result = collect($item->result)->where('final_rank', 1)->values()->groupBy('gender')->all();

            return $item;
        });
    }

    #[Computed]
    public function topResult()
    {
        return $this->result->where('contest_category', 'Top Finalist')->map(function ($item) {
            $item->result = collect($item->result)
                ->groupBy('gender')
                ->map(function ($group) {
                    return $group->sortBy('grand_final_rank')->take(3)->values();
                })
                ->all();
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
            $item->result = collect($item->result)
                ->groupBy('gender')
                ->map(function ($group) use ($contestType) {
                    return $contestType === ContestType::Individual->value ? $group->sortByDesc('grand_final_rank')->take(3)->values() : $group->sortBy('grand_final_rank')->take(3)->values();
                })
                ->all();
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


<div class="font-serif space-y-10">
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
            @foreach ($this->majorAward as $results)
                <div
                    class="flex flex-col w-full justify-evenly border-b border-dashed border-black dark:border-white p-4">
                    <div class="text-center">
                        <p class="font-bold">Best in {{ $results['contest_category'] }}</p>
                        <p>Category</p>
                    </div>
                    <div class="flex w-full justify-evenly">
                        @foreach ($results->result['male'] ?? [] as $res)
                            <div class="flex justify-around font-bold">
                                <div class="text-center">
                                    <p class="text-lg">CANDIDATE
                                        NO.{{ $res['participant']['participant']['participant_no'] }}</p>
                                    <p>Male</p>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($results->result['female'] ?? [] as $res)
                            <div class="flex justify-around font-bold">
                                <div class="text-center">
                                    <p class="text-lg">CANDIDATE
                                        NO.{{ $res['participant']['participant']['participant_no'] }}</p>
                                    <p>Female</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @elseif ($tabType === 'top')
        <div class="flex flex-col justify-center    w-full">
            @foreach ($this->topResult as $results)
                <div
                    class="flex flex-col w-full justify-evenly border-b border-dashed border-black dark:border-white  p-4">
                    <div class="flex flex-col gap-8 w-full justify-evenly">
                        <div class="flex w-full justify-evenly">
                            @foreach ($results->result['male'] ?? [] as $res)
                                <div class="flex justify-around font-bold">
                                    <div class="text-center">
                                        <p class="text-lg">CANDIDATE
                                            NO.{{ $res['participant']['participant']['participant_no'] }}</p>
                                        <p>Male</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex w-full justify-evenly">
                            @foreach ($results->result['female'] ?? [] as $res)
                                <div class="flex justify-around font-bold">
                                    <div class="text-center">
                                        <p class="text-lg">CANDIDATE
                                            NO.{{ $res['participant']['participant']['participant_no'] }}</p>
                                        <p>Female</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @elseif ($tabType === $t)
        <div class="flex flex-col justify-center w-full">

            @foreach ($this->finalResult as $results)
                @php

                    $category = $results['contest']['category'];

                    $labels = [
                        1 =>
                            $results['contest']['category'] .
                            date_format(date_create($results['contest']['date']), ' Y'),
                        2 => $category . ' Second Runner Up',
                        3 => $category . ' Third Runner Up',
                        4 => $category . ' Fourth Runner Up',
                        5 => $category . ' Fifth Runner Up',
                        6 => $category . ' Sixth Runner Up',
                    ];
                    $maleByRank = collect($results->result['male'] ?? [])->values();
                    $femaleByRank = collect($results->result['female'] ?? [])->values();
                    $teamByRank = collect($results->result['team'] ?? [])->values();
                    $total =
                        $contestType === ContestType::Team->value
                            ? $teamByRank->count()
                            : max($maleByRank->count(), $femaleByRank->count());
                @endphp
                @if ($contestType === ContestType::Individual->value)
                    @for ($i = 0; $i < $total; $i++)
                        @php
                            $rank = $total - $i; // since sorted descending, index 0=lowest rank
                            $label = $labels[$rank] ?? 'Rank ' . $rank;
                            $male = $maleByRank[$i] ?? null;
                            $female = $femaleByRank[$i] ?? null;
                            $team = $teamByRank[$i] ?? null;
                        @endphp
                        <div
                            class="flex flex-col w-full justify-evenly border-b border-dashed border-black dark:border-white p-4">
                            <div class="text-center mb-2">
                                <p class="font-bold">{{ $label }}</p>
                            </div>
                            <div class="flex w-full justify-evenly">
                                <div class="text-center">
                                    @if ($male)
                                        <p class="text-lg font-bold">CANDIDATE NO.
                                            {{ $male['participant']['participant']['participant_no'] }}
                                        </p>
                                        <p>Male</p>
                                    @endif
                                </div>
                                <div class="text-center">
                                    @if ($female)
                                        <p class="text-lg font-bold">CANDIDATE NO.
                                            {{ $female['participant']['participant']['participant_no'] }}
                                        </p>
                                        <p>Female</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endfor
                @else
                    @for ($i = $total - 1; $i >= 0; $i--)
                        @php
                            $rank = $i + 1;
                            $label = $labels[$rank] ?? 'Rank ' . $rank;
                            $team = $teamByRank[$i] ?? null;
                        @endphp
                        <div
                            class="flex flex-col w-full justify-evenly border-b border-dashed border-black dark:border-white p-4">
                            <div class="text-center mb-2">
                                <p class="font-bold">{{ $label }}</p>
                            </div>
                            <div class="flex w-full justify-evenly">
                                <div class="text-center">
                                    @if ($team)
                                        <p class="text-lg font-bold">TEAM CANDIDATE NO.
                                            {{ $team['participant']['participant']['team_participant_no'] }}
                                        </p>
                                        <p>Male</p>
                                    @endif
                                </div>
                            </div>

                        </div>
                    @endfor
                @endif
            @endforeach
        </div>
    @endif

    <livewire:footer :judges="$judges" />
</div>
