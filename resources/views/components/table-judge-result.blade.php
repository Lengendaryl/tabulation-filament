@props(['heading', 'judges' => [], 'contest' => []])

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
                            $status = $judgeStatusMap[$content['content']][$judge['judge_id']]['status'] ?? null;
                        @endphp
                        <flux:table.cell>
                            @if ($status === true)
                                <span class="text-green-500">✅ SUBMITTED</span>
                            @else
                                <span class="text-red-400">❌ UNSUBMITTED</span>
                            @endif
                        </flux:table.cell>
                        <flux:table.cell>
                            <flux:button variant="primary" color="violet" size="xs">ENABLED</flux:button>
                        </flux:table.cell>
                    @endforeach
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
    <flux:button variant="primary" color="violet" class="w-full">TABULATE</flux:button>
</div>
