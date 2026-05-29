<?php

use App\Models\Result;
use Livewire\Component;
use Illuminate\Support\Collection;

new class extends Component {
    public string $gender;
    public Collection $criteria;
    public Collection $score;
    public Collection $result;
    public string $roundType;

    public function mount()
    {
        $this->result = Result::where('contest_id', $this->score[0]['contest_id'])
            ->where('criteria_id', $this->criteria[0]['id'])
            ->where('round', $this->roundType)
            ->whereNotIn('contest_category', ['Top Finalist'])
            ->get();
    }
};
?>

<div class="space-y-6">
    @foreach ($result as $res)
        <div class="space-y-4">

            <div>
                <flux:heading size="xl" class="text-center uppercase">
                    {{ $res->contest_category }}
                </flux:heading>
            </div>

            @php
                $groupedResults = collect($res->result)->groupBy('gender');
            @endphp

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                @foreach ($groupedResults as $gender => $scores)
                    @php
                        // Sort ranks for this gender group only
                        $sortedRanks = $scores->pluck('final_rank')->sort()->values();
                        // Top 3 cutoff
                        $cutoffRank = $sortedRanks[2] ?? null;
                    @endphp
                    <flux:card x:card class="w-full">
                        <flux:table class="font-bold">
                            <div class="border-b border-zinc-800/10 dark:border-white/20 text-center ">
                                <p class="text-xl font-bold uppercase mb-2">
                                    {{ $gender }} Candidates
                                </p>
                            </div>
                            <flux:table.columns>
                                <flux:table.column>
                                    <p class="w-full text-center font-bold">No</p>
                                </flux:table.column>
                                @foreach ($scores->first()['judges'] as $judge)
                                    <flux:table.column>
                                        <div class="flex flex-col font-bold w-full">
                                            <p class="text-center">
                                                {{ $judge['judge'] }}
                                            </p>

                                            <div class="flex justify-around uppercase text-xs">
                                                <p>%</p>
                                                <p>Rank</p>
                                            </div>
                                        </div>
                                    </flux:table.column>
                                @endforeach
                                <flux:table.column>
                                    <p class="w-full text-center font-bold">TOTAL</p>
                                </flux:table.column>
                                <flux:table.column>
                                    <p class="w-full text-center font-bold">TOTAL RANK</p>
                                </flux:table.column>
                                <flux:table.column>
                                    <p class="w-full text-center font-bold">FINAL RANK</p>
                                </flux:table.column>
                            </flux:table.columns>
                            <flux:table.rows>
                                @foreach ($scores as $score)
                                    @php
                                        $rankValue = (float) $score['final_rank'];

                                        $isHighlighted = $cutoffRank !== null && $rankValue <= $cutoffRank;

                                        $rowBg = $isHighlighted ? 'bg-violet-600/60' : '';
                                    @endphp
                                    <flux:table.row class="{{ $rowBg }}">
                                        <flux:table.cell>
                                            <p class="text-black dark:text-white text-center">
                                                {{ $score['participant']['participant']['participant_no'] }}
                                            </p>
                                        </flux:table.cell>
                                        @foreach ($score['judges'] as $judge)
                                            <flux:table.cell>
                                                <div class="flex justify-around text-black dark:text-white">
                                                    <p>
                                                        {{ $judge['total_score'] }}
                                                    </p>

                                                    <p>
                                                        {{ $judge['rank'] }}
                                                    </p>
                                                </div>
                                            </flux:table.cell>
                                        @endforeach
                                        <flux:table.cell>
                                            <p class="text-center dark:text-white text-black">
                                                {{ number_format($score['total'], 2) }}
                                            </p>
                                        </flux:table.cell>
                                        <flux:table.cell>
                                            <p class="text-center dark:text-white text-black">
                                                {{ number_format($score['total_rank'], 2) }}
                                            </p>
                                        </flux:table.cell>
                                        <flux:table.cell>
                                            <p class="text-center dark:text-white text-black">
                                                {{ $score['final_rank'] }}
                                            </p>
                                        </flux:table.cell>
                                    </flux:table.row>
                                @endforeach
                            </flux:table.rows>
                        </flux:table>
                    </flux:card>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
