@props(['heading', 'judges' => [], 'contest' => [], 'judgeStatusMap' => []])

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

                            // Safely read the status from our mapping dictionary
                            $status = $judgeStatusMap[$categoryName][$judgeId]['status'] ?? false;
                        @endphp
                        <flux:table.cell>
                            <flux:badge variant="solid" color="{{ $status ? 'green' : 'red' }}" size="sm"
                                icon="{{ $status ? 'check-circle' : 'x-circle' }}">
                                {{ $status ? 'SUBMITTED' : 'UNSUBMITTED' }}
                            </flux:badge>
                        </flux:table.cell>
                        <flux:table.cell>
                            <flux:button :disabled="$status" variant="primary" color="violet" size="xs">
                                {{ $status ? 'DISABLED' : 'ENABLED' }}</flux:button>
                        </flux:table.cell>
                    @endforeach
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
    <flux:button variant="primary" color="violet" class="w-full">TABULATE</flux:button>
</div>
