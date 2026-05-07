<x-filament-panels::page>

    <x-filament::tabs>

        <x-filament::tabs.item :active="$activeTab === 'tab1'" wire:click="$set('activeTab', 'tab1')">
            Tab 1
        </x-filament::tabs.item>

        <x-filament::tabs.item :active="$activeTab === 'tab2'" wire:click="$set('activeTab', 'tab2')">
            Tab 2
        </x-filament::tabs.item>

        <x-filament::tabs.item :active="$activeTab === 'tab3'" wire:click="$set('activeTab', 'tab3')">
            Tab 3
        </x-filament::tabs.item>

        <x-filament::tabs.item :active="$activeTab === 'tab4'" wire:click="$set('activeTab', 'tab4')">
            Tab 4
        </x-filament::tabs.item>

    </x-filament::tabs>


    <div class="space-y-4">

        {{-- <flux:input type="file" wire:model="logo" label="Logo" />
         --}}
        @if ($activeTab === 'tab1')
            <div>

                <div>
                    <p class="text-lg font-bold">Male Candidates</p>
                </div>
                <flux:table>
                    <flux:table.columns sticky class="bg-white dark:bg-zinc-900">

                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">No</flux:table.column>
                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">Poise & Bearing</flux:table.column>

                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">Beauty & Wits</flux:table.column>

                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">Question & Answer
                        </flux:table.column>

                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">Sincerity & Grace Under Pressure
                        </flux:table.column>
                        <!-- ... -->
                    </flux:table.columns>

                    <flux:table.rows>
                        {{-- @foreach ($this->orders as $order)

                @endforeach --}}
                        <flux:table.row>
                            @foreach (range(1, 6) as $i)
                                <flux:table.row>
                                    <flux:table.cell>
                                        {{ $i }}
                                    </flux:table.cell>
                                    <flux:table.cell>
                                        <flux:input.group>
                                            <flux:input placeholder="chunky-spaceship" />
                                            <flux:input.group.suffix>10</flux:input.group.suffix>
                                        </flux:input.group>
                                    </flux:table.cell>


                                    <flux:table.cell>
                                        <flux:input.group>
                                            <flux:input placeholder="chunky-spaceship" />
                                            <flux:input.group.suffix>10</flux:input.group.suffix>
                                        </flux:input.group>
                                    </flux:table.cell>

                                    <flux:table.cell>
                                        <flux:input.group>
                                            <flux:input placeholder="chunky-spaceship" />
                                            <flux:input.group.suffix>10</flux:input.group.suffix>
                                        </flux:input.group>
                                    </flux:table.cell>
                                    <flux:table.cell>
                                        <flux:input.group>
                                            <flux:input placeholder="chunky-spaceship" />
                                            <flux:input.group.suffix>10</flux:input.group.suffix>
                                        </flux:input.group>
                                    </flux:table.cell>
                                </flux:table.row>
                            @endforeach
                            <!-- ... -->
                        </flux:table.row>
                    </flux:table.rows>
                </flux:table>
            </div>
            <div>
                <div>
                    <p class="text-lg font-bold">Female Candidates</p>
                </div>
                <flux:table>
                    <flux:table.columns sticky class="bg-white dark:bg-zinc-900">

                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">No</flux:table.column>
                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">Poise & Bearing</flux:table.column>

                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">Beauty & Wits</flux:table.column>

                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">Question & Answer
                        </flux:table.column>

                        <flux:table.column sticky class="bg-white dark:bg-zinc-900">Sincerity & Grace Under Pressure
                        </flux:table.column>
                        <!-- ... -->
                    </flux:table.columns>

                    <flux:table.rows>
                        {{-- @foreach ($this->orders as $order)

                @endforeach --}}
                        <flux:table.row>
                            @foreach (range(1, 6) as $i)
                                <flux:table.row>
                                    <flux:table.cell>
                                        {{ $i }}
                                    </flux:table.cell>
                                    <flux:table.cell>
                                        <flux:input.group>
                                            <flux:input placeholder="chunky-spaceship" />
                                            <flux:input.group.suffix>10</flux:input.group.suffix>
                                        </flux:input.group>
                                    </flux:table.cell>


                                    <flux:table.cell>
                                        <flux:input.group>
                                            <flux:input placeholder="chunky-spaceship" />
                                            <flux:input.group.suffix>10</flux:input.group.suffix>
                                        </flux:input.group>
                                    </flux:table.cell>

                                    <flux:table.cell>
                                        <flux:input.group>
                                            <flux:input placeholder="chunky-spaceship" />
                                            <flux:input.group.suffix>10</flux:input.group.suffix>
                                        </flux:input.group>
                                    </flux:table.cell>
                                    <flux:table.cell>
                                        <flux:input.group>
                                            <flux:input placeholder="chunky-spaceship" />
                                            <flux:input.group.suffix>10</flux:input.group.suffix>
                                        </flux:input.group>
                                    </flux:table.cell>
                                </flux:table.row>
                            @endforeach
                            <!-- ... -->
                        </flux:table.row>
                    </flux:table.rows>
                </flux:table>
            </div>
        @endif

        @if ($activeTab === 'tab2')
            <div>
                asd
            </div>
        @endif

    </div>
</x-filament-panels::page>
