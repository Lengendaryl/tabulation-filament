<?php

use App\Models\Result;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public Collection $criteria;
    #[Computed]
    public function final()
    {
        return Result::where('contest_category', 'Final Score')
            ->where('round', 'prelimFinal')
            ->where('criteria_id', $this->criteria[0]['id'])
            ->get();
    }
};
?>

<div class="space-y-6">
    @foreach ($this->final as $res)
        <div class="space-y-4">

            <div>
                <flux:heading size="xl" class="text-center uppercase">
                    {{ $res->contest_category }}
                </flux:heading>
            </div>

            @php
                $groupedResults = collect($res->result)->groupBy('gender')->sortBy(
                    fn($group, $gender) => match (strtolower($gender)) {
                        'male' => 0,
                        'female' => 1,
                        default => 2,
                    },
                );
            @endphp

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                @foreach ($groupedResults as $gender => $scores)
                    @php
                        // Sort ranks for this gender group only
                        $sortedRanks = $scores->pluck('grand_final_rank')->sort()->values();
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
                                    <p class="w-full text-center font-bold">NO</p>
                                </flux:table.column>

                                <flux:table.column>
                                    <div class="flex flex-col font-bold w-full">
                                        <p class="text-center">
                                            PRELIMINARY ROUND
                                        </p>

                                        <div class="flex justify-around uppercase text-xs">
                                            <p>%</p>
                                            <p>50</p>
                                        </div>
                                    </div>
                                </flux:table.column>
                                <flux:table.column>
                                    <div class="flex flex-col font-bold w-full">
                                        <p class="text-center">
                                            FINAL ROUND
                                        </p>

                                        <div class="flex justify-around uppercase text-xs">
                                            <p>%</p>
                                            <p>50</p>
                                        </div>
                                    </div>
                                </flux:table.column>
                                <flux:table.column>
                                    <p class="w-full text-center font-bold">TOTAL</p>
                                </flux:table.column>
                                <flux:table.column>
                                    <p class="w-full text-center font-bold">FINAL RANK</p>
                                </flux:table.column>
                            </flux:table.columns>
                            <flux:table.rows>
                                @foreach ($scores as $score)
                                    @php
                                        $rankValue = (float) $score['grand_final_rank'];

                                        $isHighlighted = $cutoffRank !== null && $rankValue <= $cutoffRank;
                                        logger($isHighlighted);
                                        $rowBg = $isHighlighted
                                            ? 'bg-gradient-to-r from-violet-600/50 via-violet-600 to-transparent ring-2 ring-inset ring-violet-600'
                                            : '';

                                    @endphp
                                    <flux:table.row class="{{ $rowBg }}">
                                        <flux:table.cell>
                                            <p class="text-black dark:text-white text-center">
                                                {{ $score['participant']['participant']['participant_no'] }}
                                            </p>
                                        </flux:table.cell>

                                        <flux:table.cell>
                                            <div class="flex justify-around text-black dark:text-white">
                                                <p>
                                                    {{ number_format($score['preliminary_total'], 2) }}
                                                </p>

                                                <p>
                                                    {{ number_format($score['preliminary_score'], 2) }}
                                                </p>
                                            </div>
                                        </flux:table.cell>

                                        <flux:table.cell>
                                            <div class="flex justify-around text-black dark:text-white">
                                                <p>
                                                    {{ number_format($score['final_total'], 2) }}
                                                </p>

                                                <p>
                                                    {{ number_format($score['final_score'], 2) }}
                                                </p>
                                            </div>
                                        </flux:table.cell>

                                        <flux:table.cell>
                                            <p class="text-center dark:text-white text-black">
                                                {{ number_format($score['grand_total'], 2) }}
                                            </p>
                                        </flux:table.cell>
                                        <flux:table.cell>
                                            <p class="text-center dark:text-white text-black">
                                                {{ $score['grand_final_rank'] }}
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
