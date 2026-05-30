<?php

use App\Models\Result;
use Illuminate\Support\Collection;
use Livewire\Component;

new class extends Component {
    public string $heading;
    public string $subHeading;
    public Collection $category;
    public Collection $judges;
    public Collection $criteria;
    public Collection $score;
    public Collection $result;
    public string $roundType;
    public string $tabType;
    public Collection $topResult;

    public function mount()
    {
        $this->result = Result::where('contest_id', $this->score[0]['contest_id'])
            ->where('criteria_id', $this->criteria[0]['id'])
            ->where('round', $this->roundType)
            ->get();

        if ($this->tabType == 'major') {
            $this->majorAward();
        } elseif ($this->tabType == 'top') {
            $this->topResult();

            logger($this->topResult);
        }
    }

    public function majorAward()
    {
        $this->category = $this->result->whereNotIn('contest_category', ['Top Finalist'])->map(function ($item) {
            $item->result = collect($item->result)->where('final_rank', 1)->values()->groupBy('gender')->all();

            return $item;
        });
    }

    public function topResult()
    {
        $this->topResult = $this->result->where('contest_category', 'Top Finalist')->map(function ($item) {
            $item->result = collect($item->result)
                ->groupBy('gender')
                ->map(function ($group) {
                    return $group->sortBy('grand_final_rank')->take(3)->values();
                })
                ->all();
            return $item;
        });
    }
};
?>


<div class="font-serif space-y-10">
    <div class=" border-t border-b p-2">
        <h2 class="text-2xl font-bold text-center">
            {{ $heading }}
        </h2>
    </div>

    @if ($subHeading)
        <div>
            <h3 class="text-center text-xl">TOP {{ $subHeading }} FINALIST</h3>
        </div>
    @endif

    @if ($tabType === 'major')
        <div class="flex flex-col justify-center w-full">
            @foreach ($category as $results)
                <div class="flex flex-col w-full justify-evenly border-b border-dashed p-4">
                    <div class="text-center">
                        <p class="font-bold">Best in {{ $results['contest_category'] }}</p>
                        <p>Category</p>
                    </div>
                    <div class="flex w-full justify-evenly">
                        @foreach ($results->result['male'] as $res)
                            <div class="flex justify-around font-bold">
                                <div class="text-center">
                                    <p class="text-lg">CANDIDATE
                                        NO.{{ $res['participant']['participant']['participant_no'] }}</p>
                                    <p>Male</p>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($results->result['female'] as $res)
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
            @foreach ($topResult as $results)
                <div class="flex flex-col w-full justify-evenly border-b border-dashed p-4">
                    <div class="flex flex-col gap-8 w-full justify-evenly">
                        <div class="flex w-full justify-evenly">
                            @foreach ($results->result['male'] as $res)
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
                            @foreach ($results->result['female'] as $res)
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
    @endif



    <div class="flex flex-col justify-center items-center  uppercase">
        <div class="grid grid-cols-2 place-items-center gap-4">
            @foreach ($judges as $judge)
                <div class="text-center mt-4">
                    <p class="font-medium border-b">{{ $judge['name'] }}</p>
                    <p class="text-xs">JUDGE</p>
                </div>
            @endforeach
        </div>
        <div class="w-fit text-center mt-4">
            <p class="font-medium  border-b">
                {{ auth()->user()->name }}
            </p>
            <p class="text-center text-xs">
                TABULATOR
            </p>
        </div>
    </div>
</div>
