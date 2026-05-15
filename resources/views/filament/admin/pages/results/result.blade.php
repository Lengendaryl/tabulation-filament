<x-filament-panels::page>

    <flux:card class="space-y-8">
        @php
            $preliminaryContents = collect($judgesGroup)
                ->flatMap(fn($group) => collect($group->judges))
                ->where('level', 'preliminary')
                ->unique('content')
                ->values();

            $finalContents = collect($judgesGroup)
                ->flatMap(fn($group) => collect($group->judges))
                ->where('level', 'final')
                ->unique('content')
                ->values();

            $uniqueJudges = collect($judgesGroup)
                ->flatMap(fn($group) => collect($group->judges)->flatMap(fn($levelGroup) => $levelGroup['judges']))
                ->unique('judge_id')
                ->values();
        @endphp

        {{-- PRELIMINARY --}}
        <div class="space-y-2">
            <p class="text-xl font-bold">PRELIMINARY JUDGES CONTEST</p>
            <flux:table class="border-b">
                <flux:table.columns>
                    <flux:table.column>JUDGES</flux:table.column>
                    @foreach ($preliminaryContents as $content)
                        <flux:table.column class="uppercase text-wrap">{{ $content['content'] }}</flux:table.column>
                        <flux:table.column>ACTION</flux:table.column>
                    @endforeach
                </flux:table.columns>
                <flux:table.rows>
                    @foreach ($uniqueJudges as $judge)
                        <flux:table.row class="uppercase">
                            <flux:table.cell>{{ $judge['name'] }}</flux:table.cell>
                            @foreach ($preliminaryContents as $content)
                                @php
                                    $status =
                                        $judgeStatusMap[$content['content']][$judge['judge_id']]['status'] ?? null;
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

        {{-- FINAL --}}
        <div class="space-y-2">
            <p class="text-xl font-bold">FINAL JUDGES CONTEST</p>
            <flux:table class="border-b">
                <flux:table.columns>
                    <flux:table.column>JUDGES</flux:table.column>
                    @foreach ($finalContents as $content)
                        <flux:table.column class="uppercase text-wrap">{{ $content['content'] }}</flux:table.column>
                        <flux:table.column>ACTION</flux:table.column>
                    @endforeach
                </flux:table.columns>
                <flux:table.rows>
                    @foreach ($uniqueJudges as $judge)
                        <flux:table.row class="uppercase">
                            <flux:table.cell>{{ $judge['name'] }}</flux:table.cell>
                            @foreach ($finalContents as $content)
                                @php
                                    $status =
                                        $judgeStatusMap[$content['content']][$judge['judge_id']]['status'] ?? null;
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
    </flux:card>

    <div class="w-fit ">
        <x-filament::tabs label="Content tabs">
            <x-filament::tabs.item>
                PRELIMINARY
            </x-filament::tabs.item>
            <x-filament::tabs.item>
                FINAL
            </x-filament::tabs.item>
            <x-filament::tabs.item>
                MAJOR AWARDS
            </x-filament::tabs.item>
            <x-filament::tabs.item>
                @foreach (collect($criteria)->unique('criteria.id') as $item)
                    TOP {{ $item['criteria']['qualified_participant'] }} RESULTS
                @endforeach
            </x-filament::tabs.item>
            <x-filament::tabs.item>
                FINAL RESULTS
            </x-filament::tabs.item>
            @foreach (collect($criteria)->unique('judge.id') as $item)
                <x-filament::tabs.item class="uppercase">
                    {{ $item['judge']['name'] }}
                </x-filament::tabs.item>
            @endforeach
        </x-filament::tabs>
    </div>

    <flux:card class="space-y-6">
        <div>
            <flux:heading size="xl" class="text-center uppercase ">Production Number</flux:heading>
        </div>
        <flux:card x:card>
            <flux:table>
                <div class="border-b border-zinc-800/10 dark:border-white/20">
                    <p class="text-lg font-bold">Gender Candidates</p>
                </div>
                <flux:table.columns>
                    <flux:table.column> Customer</flux:table.column>
                    <flux:table.column>Date</flux:table.column>
                    <flux:table.column>Status</flux:table.column>
                    <flux:table.column>Amount</flux:table.column>
                </flux:table.columns>
                <flux:table.rows>
                    <flux:table.row>
                        <flux:table.cell>Lindsey Aminoff</flux:table.cell>
                        <flux:table.cell>Jul 29, 10:45 AM</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                        </flux:table.cell>
                        <flux:table.cell variant="strong">$49.00</flux:table.cell>
                    </flux:table.row>
                    <flux:table.row>
                        <flux:table.cell>Hanna Lubin</flux:table.cell>
                        <flux:table.cell>Jul 28, 2:15 PM</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                        </flux:table.cell>
                        <flux:table.cell variant="strong">$312.00</flux:table.cell>
                    </flux:table.row>
                    <flux:table.row>
                        <flux:table.cell>Kianna Bushevi</flux:table.cell>
                        <flux:table.cell>Jul 30, 4:05 PM</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge color="zinc" size="sm" inset="top bottom">Refunded</flux:badge>
                        </flux:table.cell>
                        <flux:table.cell variant="strong">$132.00</flux:table.cell>
                    </flux:table.row>
                    <flux:table.row>
                        <flux:table.cell>Gustavo Geidt</flux:table.cell>
                        <flux:table.cell>Jul 27, 9:30 AM</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                        </flux:table.cell>
                        <flux:table.cell variant="strong">$31.00</flux:table.cell>
                    </flux:table.row>
                </flux:table.rows>
            </flux:table>
        </flux:card>
        <flux:card x:card>
            <flux:table>
                <flux:table.columns>
                    <flux:table.column>Customer</flux:table.column>
                    <flux:table.column>Date</flux:table.column>
                    <flux:table.column>Status</flux:table.column>
                    <flux:table.column>Amount</flux:table.column>
                </flux:table.columns>
                <flux:table.rows>
                    <flux:table.row>
                        <flux:table.cell>Lindsey Aminoff</flux:table.cell>
                        <flux:table.cell>Jul 29, 10:45 AM</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                        </flux:table.cell>
                        <flux:table.cell variant="strong">$49.00</flux:table.cell>
                    </flux:table.row>
                    <flux:table.row>
                        <flux:table.cell>Hanna Lubin</flux:table.cell>
                        <flux:table.cell>Jul 28, 2:15 PM</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                        </flux:table.cell>
                        <flux:table.cell variant="strong">$312.00</flux:table.cell>
                    </flux:table.row>
                    <flux:table.row>
                        <flux:table.cell>Kianna Bushevi</flux:table.cell>
                        <flux:table.cell>Jul 30, 4:05 PM</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge color="zinc" size="sm" inset="top bottom">Refunded</flux:badge>
                        </flux:table.cell>
                        <flux:table.cell variant="strong">$132.00</flux:table.cell>
                    </flux:table.row>
                    <flux:table.row>
                        <flux:table.cell>Gustavo Geidt</flux:table.cell>
                        <flux:table.cell>Jul 27, 9:30 AM</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                        </flux:table.cell>
                        <flux:table.cell variant="strong">$31.00</flux:table.cell>
                    </flux:table.row>
                </flux:table.rows>
            </flux:table>
        </flux:card>
    </flux:card>
</x-filament-panels::page>
