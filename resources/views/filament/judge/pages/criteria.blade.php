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
            <p class="font-bold text-3xl uppercase">{{ $tabLabels[$activeTab] ?? str($activeTab)->replace('-', ' ') }}
            </p>
        </flux:card>

        @foreach ($allCriteria->first()->criteria as $group)
            @php
                $thisTabId = Str::slug($group['data']['content']);
                $isFinalLevel = $group['data']['level'] === 'final';
                $activeGroup = collect($allCriteria->first()->criteria)->first(
                    fn($g) => Str::slug($g['data']['content']) === $activeTab,
                );
                $activeIsFinalLevel = $activeGroup['data']['level'] === 'final';
                $finalIds = $this->grandFinalParticipants;

                $groupedParticipants = $allCriteria
                    ->first()
                    ->contest->participants->when($isFinalLevel, function ($collection) use ($finalIds) {
                        return $collection->filter(fn($p) => in_array($p->id, $finalIds));
                    })
                    ->sortBy(fn($p) => $p['participant']['participant_no'])
                    ->groupBy(fn($p) => $p['participant']['gender'])
                    ->sortBy(
                        fn($group, $gender) => match (strtolower($gender)) {
                            'male' => 0,
                            'female' => 1,
                            default => 2,
                        },
                    );

                $isLocked = isset($activeTab) ? $this->isSubmitted($activeTab) : true;
            @endphp
            @if ($activeTab === $thisTabId)
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                    @foreach ($groupedParticipants as $gender => $participants)
                        <flux:card class="overflow-hidden relative uppercase w-full">
                            <div
                                class="p-4 border-b border-zinc-800/10 dark:border-white/20 flex justify-between items-center">
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
                                <div class="p-4 rounded-xl shadow-2xl flex flex-col items-center gap-2 bg-zinc-900">
                                    <flux:icon.lock-closed class="size-8 text-zinc-400" />
                                    <p class="font-medium text-white">Score is hidden</p>
                                    <flux:button variant="primary" size="sm" @click="isShowing = false">Reveal
                                        Table
                                    </flux:button>
                                </div>
                            </div>

                            <div x-data="rankingSystem(
                                $wire.entangle('scores'),
                                @js($participants->pluck('id')->values()),
                                '{{ $activeTab }}'
                            )">
                                <flux:table>
                                    <flux:table.columns>
                                        <flux:table.column>
                                            <p class="w-full text-center">No</p>
                                        </flux:table.column>
                                        @foreach ($group['data']['criteria'] as $item)
                                            <flux:table.column class="text-wrap ">
                                                <div class="w-full text-center">
                                                    <p>{{ $item['criterion'] }}</p>
                                                    <p>{{ $item['score'] }}%</p>
                                                </div>
                                            </flux:table.column>
                                        @endforeach
                                        <flux:table.column>
                                            <p class="w-full text-center">Total</p>
                                        </flux:table.column>
                                        <flux:table.column>
                                            <p class="w-full text-center">Rank</p>
                                        </flux:table.column>
                                    </flux:table.columns>
                                    <flux:table.rows>
                                        @foreach ($participants as $participant)
                                            <flux:table.row>
                                                <flux:table.cell variant="strong" class=" text-center">
                                                    {{ $participant['participant']['participant_no'] }}
                                                </flux:table.cell>
                                                @foreach ($group['data']['criteria'] as $index => $item)
                                                    @php $slug = Str::slug($item['criterion']); @endphp
                                                    <flux:table.cell variant="strong">
                                                        <flux:input
                                                            x-on:keypress="
                                                            if (['-', '+', 'e', 'E'].includes($event.key)|| $event.target.value.length >= 3) {
                                                            $event.preventDefault()
                                                            }"
                                                            required type="number" min="0"
                                                            max="{{ $item['score'] }}"
                                                            x-on:input="if(!results['{{ $participant['id'] }}']) results['{{ $participant['id'] }}'] = {};
                                                            results['{{ $participant['id'] }}']['{{ $slug }}'] = Number($event.target.value)"
                                                            wire:model="scores.{{ $activeTab }}.{{ $participant['id'] }}.{{ $slug }}"
                                                            :disabled="$isLocked"
                                                            placeholder="{{ $item['score'] }}%" />
                                                    </flux:table.cell>
                                                @endforeach
                                                <flux:table.cell variant="strong" class=" text-center"
                                                    x-text="() => {
                                                    let pScores = results['{{ $activeTab }}']?.['{{ $participant['id'] }}'] || {};
                                                    return Object.values(pScores).reduce((a, b) => Number(a) + Number(b), 0) + '%';
                                                }">
                                                    0
                                                </flux:table.cell>
                                                <flux:table.cell variant="strong" class=" text-center"
                                                    x-bind:class="{
                                                        'bg-violet-600/60 text-white': (() => {
                                                                let r = rankings['{{ $participant['id'] }}'];
                                                                return r !== undefined && r !== '-' && r >=
                                                                    1 && r <= 3.5;
                                                            })
                                                            ()
                                                    }">
                                                    <span x-text="rankings['{{ $participant['id'] }}'] || '-'"></span>
                                                </flux:table.cell>
                                            </flux:table.row>
                                        @endforeach
                                    </flux:table.rows>
                                </flux:table>
                            </div>
                        </flux:card>
                    @endforeach
                </div>
            @endif
        @endforeach

        @if (!$activeIsFinalLevel || !empty($finalIds))
            <div class="flex items-center justify-end gap-2">
                <flux:button variant="primary" type="submit"
                    class="{{ $isLocked ? 'opacity-50 pointer-events-none cursor-not-allowed' : '' }}"
                    :disabled="$isLocked" wire:loading.attr="disabled" wire:target="submit">

                    <flux:icon.loading wire:loading class="animate-spin size-4" wire:target="submit" />
                    Submit
                </flux:button>
                @if ($isLocked)
                    <flux:button wire:click="requestEdit" variant="primary" type="button" wire:loading.attr="disabled"
                        wire:target="requestEdit">
                        Request Edit Score
                    </flux:button>
                @endif
            </div>
        @endif

    </form>
</x-filament-panels::page>
