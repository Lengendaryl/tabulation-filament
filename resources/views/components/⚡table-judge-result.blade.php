<?php

use Illuminate\Support\Collection;
use Livewire\Component;

new class extends Component {
    public string $heading = '';
    public Collection $judges;
    public Collection $contest;
    public array $judgeStatusMap = [];
};
?>

<div class="space-y-2">
    <p class="text-xl font-bold">{{ $heading }} JUDGES CONTEST</p>
    <flux:table class="border-b">
        <flux:table.columns>
            <flux:table.column>JUDGES</flux:table.column>
            @foreach ($contest as $content)
            <flux:table.column class="uppercase text-wrap">{{ $content['content'] }}</flux:table.column>
            <flux:table.column>ACTION</flux:table.column>
            @endforeach
        </flux:table.columns>
        <flux:table.rows>
            @foreach ($judges as $judge)
            <flux:table.row class="uppercase">
                <flux:table.cell>{{ $judge['name'] }}</flux:table.cell>
                @foreach ($contest as $content)
                @php
                $categoryName = $content['content'];
                $judgeId = $judge['judge_id'];
                $level = $content['level'];
                $status = $judgeStatusMap[$categoryName][$judgeId]['status'] ?? false;
                $request = $judgeStatusMap[$categoryName][$judgeId]['request_edit'] ?? false;
                @endphp
                <flux:table.cell>
                    <flux:badge variant="solid" color="{{ $status ? 'green' : 'red' }}" size="sm"
                        icon="{{ $status ? 'check-circle' : 'x-circle' }}">
                        {{ $status ? 'SUBMITTED' : 'UNSUBMITTED' }}
                    </flux:badge>
                </flux:table.cell>
                <flux:table.cell class="flex items-center gap-1">
                    <flux:button
                        wire:click="toggleStatus('{{ $categoryName }}', '{{ $level }}','{{ $judgeId }}')"
                        :variant="$status ? null : 'primary'" color="violet" size="xs">
                        {{ $status ? 'DISABLED' : 'ENABLED' }}
                    </flux:button>

                    @if ($request)
                    <flux:icon.pencil variant="mini" class="text-violet-400" />
                    @endif
                </flux:table.cell>
                @endforeach
            </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
    <flux:button variant="primary" color="violet" class="w-full">TABULATE</flux:button>
</div>