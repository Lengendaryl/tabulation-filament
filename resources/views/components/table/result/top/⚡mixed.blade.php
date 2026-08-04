<?php

use Livewire\Component;

new class extends Component {
    public $results;
    public $isTeam;
    public string $participantLabel;
};
?>

<div>
    <flux:card x:card class="w-full mb-6">
        <flux:table class="font-bold">
            <div class="border-b border-zinc-800/10 dark:border-white/20 text-center">
                <p class="text-xl font-bold uppercase mb-2">
                    {{ $this->isTeam ? 'Team' : 'Mixed' }} {{ $this->participantLabel }}</p>
            </div>
            <flux:table.columns>
                <flux:table.column>
                    <p class="w-full  font-bold uppercase">{{ $this->participantLabel }} NO</p>
                </flux:table.column>
                <flux:table.column>
                    <p class="w-full  font-bold">NAME</p>
                </flux:table.column>
                <flux:table.column>
                    <p class="w-full  font-bold">FINAL RANK</p>
                </flux:table.column>
            </flux:table.columns>
            <flux:table.rows>
                @foreach ($this->results->result['mixed'] ?? [] as $res)
                    <flux:table.row>
                        <flux:table.cell>
                            <p class="text-black dark:text-white  font-bold">
                                {{ $this->isTeam ? $res['participant']['participant']['team_participant_no'] : $res['participant']['participant']['participant_no'] }}
                            </p>
                        </flux:table.cell>
                        <flux:table.cell>
                            <p class="text-black dark:text-white  font-bold">
                                {{ $this->isTeam ? $res['participant']['participant']['team_name'] : $res['participant']['participant']['first_name'] . ' ' . $res['participant']['participant']['last_name'] }}
                            </p>
                        </flux:table.cell>
                        <flux:table.cell>
                            <p class="text-black dark:text-white  font-bold">
                                {{ $res['grand_final_rank'] }}
                            </p>
                        </flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </flux:card>
</div>
