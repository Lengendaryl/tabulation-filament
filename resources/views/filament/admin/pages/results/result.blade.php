<x-filament-panels::page>

    <flux:card>
        <flux:table>
            <flux:table.columns>
                <flux:table.column>JUDGES</flux:table.column>
                @foreach ($criteria as $item)
                    @foreach (collect($item['score'])->unique('contest_category') as $c)
                        <flux:table.column class="uppercase">{{ $c['contest_category'] }}</flux:table.column>
                    @endforeach
                @endforeach

            </flux:table.columns>
            <flux:table.rows>
                <flux:table.row class="uppercase ">
                    @foreach (collect($criteria)->unique('judge.id') as $item)
                        <flux:table.cell>{{ $item['judge']['name'] }}</flux:table.cell>
                    @endforeach
                    @foreach ($criteria as $item)
                        @foreach (collect($item['score'])->unique('contest_category') as $c)
                            <flux:table.cell>
                                <flux:button variant="primary" color="purple">ENABLED</flux:button>
                            </flux:table.cell>
                        @endforeach
                    @endforeach
                </flux:table.row>
            </flux:table.rows>
        </flux:table>
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
                TOP 3 RESULTS
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
