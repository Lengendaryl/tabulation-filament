<?php

use Livewire\Component;

new class extends Component {
    public $isTeam;
    public $labels;
    public $team;
    public $teamByRank;
    public $mixedByRank;
    public $total;
};
?>

<div>
    <flux:card x:card class="w-full mb-6">
        <flux:table class="font-bold">
            <div class="border-b border-zinc-800/10 dark:border-white/20 text-center">
                <p class="text-xl  font-bold uppercase mb-2">{{ $this->isTeam ? 'Team' : 'Mixed' }}
                    {{ $this->participantLabel }}</p>
            </div>
            <flux:table.columns>
                <flux:table.column>
                    <p class="w-full  font-bold">NO</p>
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
                @if ($this->isTeam)
                    @for ($i = $this->total - 1; $i >= 0; $i--)
                        @php
                            $rank = $i + 1;
                            $label = $this->labels[$rank] ?? 'Rank ' . $rank;
                            $team = $this->teamByRank[$i] ?? null;
                        @endphp
                        @if ($team)
                            <flux:table.row>
                                <flux:table.cell>
                                    <p class="text-black dark:text-white  font-bold">
                                        {{ $team['participant']['participant']['team_participant_no'] }}
                                    </p>
                                </flux:table.cell>
                                <flux:table.cell>
                                    <p class="text-black dark:text-white  font-bold">
                                        {{ $team['participant']['participant']['team_name'] }}
                                    </p>
                                </flux:table.cell>
                                <flux:table.cell>
                                    <p class="text-black dark:text-white  font-bold">
                                        {{ $label }}
                                    </p>
                                </flux:table.cell>
                                <flux:table.cell>
                                    <p class="text-black dark:text-white  font-bold">
                                        {{ $team['grand_final_rank'] }}
                                    </p>
                                </flux:table.cell>
                            </flux:table.row>
                        @endif
                    @endfor
                @else
                    @for ($i = 0; $i < $this->total; $i++)
                        @php
                            $rank = $this->total - $i;
                            $label = $this->labels[$rank] ?? 'Rank ' . $rank;
                            $mixed = $this->mixedByRank[$i] ?? null;
                        @endphp
                        @if ($mixed)
                            <flux:table.row>
                                <flux:table.cell>
                                    <p class="text-black dark:text-white  font-bold">
                                        {{ $mixed['participant']['participant']['participant_no'] }}
                                    </p>
                                </flux:table.cell>
                                <flux:table.cell>
                                    <p class="text-black dark:text-white  font-bold">
                                        {{ $label }}
                                    </p>
                                </flux:table.cell>
                                <flux:table.cell>
                                    <p class="text-black dark:text-white  font-bold">
                                        {{ $mixed['participant']['participant']['first_name'] . ' ' . $mixed['participant']['participant']['last_name'] }}
                                    </p>
                                </flux:table.cell>
                                <flux:table.cell>
                                    <p class="text-black dark:text-white  font-bold">
                                        {{ $mixed['grand_final_rank'] }}
                                    </p>
                                </flux:table.cell>
                            </flux:table.row>
                        @endif
                    @endfor
                @endif
            </flux:table.rows>
        </flux:table>
    </flux:card>
</div>
