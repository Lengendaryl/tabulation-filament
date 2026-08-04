<?php

use Livewire\Component;

new class extends Component {
    public $isTeam;
    public $labels;
    public $maleByRank;
    public $femaleByRank;
    public $total;
    public $participantLabel;
};
?>

<div class="grid grid-cols-2 gap-4">
    <flux:card x:card class="w-full mb-6">
        <flux:table class="font-bold">
            <div class="border-b border-zinc-800/10 dark:border-white/20 text-center">
                <p class="text-xl font-bold uppercase mb-2">Male {{ $this->participantLabel }}</p>
            </div>
            <flux:table.columns>
                <flux:table.column>
                    <p class="w-full uppercase  font-bold">{{ $this->participantLabel }} NO</p>
                </flux:table.column>
                <flux:table.column>
                    <p class="w-full  font-bold">NAME</p>
                </flux:table.column>
                <flux:table.column>
                    <p class="w-full  font-bold">PLACEMENT</p>
                </flux:table.column>
                <flux:table.column>
                    <p class="w-full  font-bold">RANK</p>
                </flux:table.column>
            </flux:table.columns>
            <flux:table.rows>
                @for ($i = 0; $i < $this->total; $i++)
                    @php
                        $rank = $this->isTeam ? $i + 1 : $this->total - $i;
                        $label = $this->labels[$rank] ?? 'Rank ' . $rank;
                        $male = $this->maleByRank[$i] ?? null;
                    @endphp
                    @if ($male)
                        <flux:table.row>
                            <flux:table.cell>
                                <p class="text-black dark:text-white  font-bold">
                                    {{ $this->isTeam ? $male['participant']['participant']['team_participant_no'] : $male['participant']['participant']['participant_no'] }}
                                </p>
                            </flux:table.cell>
                            <flux:table.cell>
                                <p class="text-black dark:text-white  font-bold">
                                    {{ $this->isTeam ? $male['participant']['participant']['team_name'] : $male['participant']['participant']['first_name'] . ' ' . $male['participant']['participant']['last_name'] }}
                                </p>
                            </flux:table.cell>
                            <flux:table.cell>
                                <p class="text-black dark:text-white  font-bold">
                                    {{ $label }}
                                </p>
                            </flux:table.cell>
                            <flux:table.cell>
                                <p class="text-black dark:text-white  font-bold">
                                    {{ $male['grand_final_rank'] }}
                                </p>
                            </flux:table.cell>
                        </flux:table.row>
                    @endif
                @endfor
            </flux:table.rows>
        </flux:table>
    </flux:card>

    <flux:card x:card class="w-full mb-6">
        <flux:table class="font-bold">
            <div class="border-b border-zinc-800/10 text-center dark:border-white/20 ">
                <p class="text-xl font-bold uppercase mb-2">Female {{ $this->participantLabel }}</p>
            </div>
            <flux:table.columns>
                <flux:table.column>
                    <p class="w-full uppercase font-bold">{{ $this->participantLabel }} NO</p>
                </flux:table.column>
                <flux:table.column>
                    <p class="w-full  font-bold">NAME</p>
                </flux:table.column>
                <flux:table.column>
                    <p class="w-full  font-bold">PLACEMENT</p>
                </flux:table.column>
                <flux:table.column>
                    <p class="w-full  font-bold">RANK</p>
                </flux:table.column>
            </flux:table.columns>
            <flux:table.rows>
                @for ($i = 0; $i < $this->total; $i++)
                    @php
                        $rank = $this->isTeam ? $i + 1 : $this->total - $i;
                        $label = $this->labels[$rank] ?? 'Rank ' . $rank;
                        $female = $this->femaleByRank[$i] ?? null;
                    @endphp
                    @if ($female)
                        <flux:table.row>
                            <flux:table.cell>
                                <p class="text-black dark:text-white  font-bold">
                                    {{ $this->isTeam ? $female['participant']['participant']['team_participant_no'] : $female['participant']['participant']['participant_no'] }}
                                </p>
                            </flux:table.cell>
                            <flux:table.cell>
                                <p class="text-black dark:text-white  font-bold">
                                    {{ $this->isTeam ? $female['participant']['participant']['team_name'] : $female['participant']['participant']['first_name'] . ' ' . $female['participant']['participant']['last_name'] }}
                                </p>
                            </flux:table.cell>
                            <flux:table.cell>
                                <p class="text-black dark:text-white  font-bold">
                                    {{ $label }}
                                </p>
                            </flux:table.cell>
                            <flux:table.cell>
                                <p class="text-black dark:text-white  font-bold">
                                    {{ $female['grand_final_rank'] }}
                                </p>
                            </flux:table.cell>
                        </flux:table.row>
                    @endif
                @endfor
            </flux:table.rows>
        </flux:table>
    </flux:card>
</div>
