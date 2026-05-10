<x-filament-panels::page>
    <x-filament::tabs>
        @foreach ($allCriteria->first()->criteria as $item)
            @php
                $tabId = Str::slug($item['data']['content']);
            @endphp

            <x-filament::tabs.item class="uppercase text-wrap" :active="$activeTab === $tabId"
                wire:click="$set('activeTab', '{{ $tabId }}')">
                {{ $item['data']['content'] }}
            </x-filament::tabs.item>
        @endforeach
    </x-filament::tabs>

    <form class="space-y-4" wire:submit.prevent="submit" x-data="{ isShowing: false }">
        <flux:card class="flex items-center justify-center">
            <p class="font-bold text-3xl uppercase">{{ str($activeTab)->replace('-', ' ') }}</p>
        </flux:card>

        @foreach ($allCriteria->first()->criteria as $group)
            @php
                $thisTabId = Str::slug($group['data']['content']);
            @endphp
            @php
                $groupedParticipants = $allCriteria
                    ->first()
                    ->contest->participants->sortBy(fn($p) => $p['participant']['participant_no'])
                    ->groupBy(fn($p) => $p['participant']['gender']);
            @endphp
            @if ($activeTab === $thisTabId)
                @foreach ($groupedParticipants as $gender => $participants)
                    <flux:card class="overflow-hidden relative uppercase">

                        <div class="p-4 border-b border-zinc-200 dark:border-zinc-700 flex justify-between items-center">
                            <p class="text-lg font-bold">{{ $gender }} Candidates</p>

                            <flux:button variant="ghost" size="sm" @click="isShowing = !isShowing"
                                inset="top bottom">
                                {{-- Toggle Icon: Changes based on state --}}
                                <flux:icon.eye x-show="!isShowing" class="size-5" />
                                <flux:icon.eye-slash x-show="isShowing" class="size-5" />
                            </flux:button>
                        </div>

                        <div x-show="isShowing" x-transition.opacity
                            class="absolute inset-0 z-10 bg-zinc-900/40 backdrop-blur-sm flex items-center justify-center">
                            <div
                                class="bg-white dark:bg-zinc-800 p-4 rounded-xl shadow-2xl flex flex-col items-center gap-2">
                                <flux:icon.lock-closed class="size-8 text-zinc-400" />
                                <p class="font-medium">Score is hidden</p>
                                <flux:button size="sm" @click="isShowing = false">Reveal Table</flux:button>
                            </div>
                        </div>


                        <div x-data="{
                            results: {},
                            get rankings() {
                                // 1. Calculate totals for everyone
                                let scoresArray = Object.keys(this.results).map(id => {
                                    let total = Object.values(this.results[id]).reduce((a, b) => Number(a) + Number(b), 0);
                                    return { id: id, total: total };
                                });
                        
                                // 2. Sort by total descending
                                scoresArray.sort((a, b) => b.total - a.total);
                        
                                // 3. Assign ranks (handling ties)
                                let ranks = {};
                                scoresArray.forEach((item, index) => {
                                    // Basic rank is index + 1
                                    // If total is 0, we can leave it blank or make it last
                                    ranks[item.id] = item.total > 0 ? (index + 1) : '-';
                                });
                                return ranks;
                            }
                        }">
                            <flux:table>
                                <flux:table.columns sticky class="bg-white dark:bg-zinc-900">
                                    <flux:table.column sticky class="bg-white dark:bg-zinc-900">No</flux:table.column>
                                    @foreach ($group['data']['criteria'] as $item)
                                        <flux:table.column class="text-wrap ">
                                            {{ $item['criterion'] }}
                                        </flux:table.column>
                                    @endforeach
                                    <flux:table.column sticky class="bg-white dark:bg-zinc-900">Total
                                    </flux:table.column>
                                    <flux:table.column sticky class="bg-white dark:bg-zinc-900">Rank</flux:table.column>
                                </flux:table.columns>
                                <flux:table.rows>
                                    @foreach ($participants as $participant)
                                        <flux:table.row>
                                            <flux:table.cell variant="strong">
                                                {{ $participant['participant']['participant_no'] }}
                                            </flux:table.cell>
                                            @foreach ($group['data']['criteria'] as $index => $item)
                                                @php $slug = Str::slug($item['criterion']); @endphp
                                                <flux:table.cell variant="strong">
                                                    <flux:input.group>
                                                        <flux:input required type="number" min="0"
                                                            max="{{ $item['score'] }}"
                                                            x-on:input="if(!results['{{ $participant['id'] }}']) results['{{ $participant['id'] }}'] = {};
                                                            results['{{ $participant['id'] }}']['{{ $slug }}'] = $event.target.value"
                                                            wire:model="scores.{{ $participant['id'] }}.{{ $slug }}" />
                                                        <flux:input.group.suffix>
                                                            /{{ $item['score'] }}
                                                        </flux:input.group.suffix>
                                                    </flux:input.group>
                                                </flux:table.cell>
                                            @endforeach
                                            <flux:table.cell variant="strong"
                                                x-text="() => {
                                                let pScores = results['{{ $participant['id'] }}'] || {};
                                                return Object.values(pScores).reduce((a, b) => Number(a) + Number(b), 0) + '%';
                                            }">
                                                0
                                            </flux:table.cell>
                                            <flux:table.cell variant="strong">
                                                <span x-text="rankings['{{ $participant['id'] }}'] || '-'"></span>
                                            </flux:table.cell>
                                        </flux:table.row>
                                    @endforeach
                                </flux:table.rows>
                            </flux:table>
                        </div>
                    </flux:card>
                @endforeach
            @endif
        @endforeach
        <div class="flex items-center justify-end gap-2">
            <flux:button variant="primary" color="zinc" type="submit" @click="isShowing = true">Submit
            </flux:button>
        </div>
    </form>
</x-filament-panels::page>
