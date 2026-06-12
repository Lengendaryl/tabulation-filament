 @use('App\Enums\ContestType')
 @use('App\Enums\Round')
 <x-filament-panels::page>
     <flux:card class="space-y-8">
         @php
             $preliminaryContents = collect($judgesGroup)
                 ->flatMap(fn($group) => collect($group->judges))
                 ->where('level', Round::Preliminary)
                 ->unique('content')
                 ->values();

             $finalContents = collect($judgesGroup)
                 ->flatMap(fn($group) => collect($group->judges))
                 ->where('level', Round::Final)
                 ->unique('content')
                 ->values();

             $judges = collect($judgesGroup)
                 ->flatMap(fn($group) => collect($group->judges)->flatMap(fn($levelGroup) => $levelGroup['judges']))
                 ->unique('judge_id')
                 ->values();
             $topParticipants = $criteria[0]['qualified_participant'];
             $finalRoundType = $criteria[0]['final_scoring_method'];
             $contestType = $criteria[0]['contest']['contest_type'];

         @endphp

         {{-- JUDGES --}}
         {{-- PRELIMINARY --}}
         <livewire:table.judge-status heading="PRELIMINARY" :judges="$judges" :contest="$preliminaryContents" :criteria="$criteria"
             :score="$score" roundType="{{ Round::Preliminary->value }}" />

         {{-- FINAL --}}

         @if ($contestType === ContestType::Individual->value)
             <livewire:table.judge-status heading="FINAL" :judges="$judges" :contest="$finalContents" :criteria="$criteria"
                 :score="$score" roundType="{{ Round::Final->value }}" />
         @endif
     </flux:card>

     <div x-data="{ activeTab: '{{ Round::Preliminary->value }}' }" label="Content tabs">
         <x-filament::tabs class="w-fit">
             <x-filament::tabs.item alpine-active="activeTab === '{{ Round::Preliminary->value }}'"
                 x-on:click="activeTab = '{{ Round::Preliminary->value }}'">
                 {{ $contestType == ContestType::Individual->value ? 'PRELIMINARY' : 'FINAL' }}
             </x-filament::tabs.item>

             @if ($contestType == ContestType::Individual->value)
                 <x-filament::tabs.item alpine-active="activeTab === '{{ Round::Final->value }}'"
                     x-on:click="activeTab = '{{ Round::Final->value }}'">
                     FINAL
                 </x-filament::tabs.item>

                 <x-filament::tabs.item alpine-active="activeTab === 'major_awards'"
                     x-on:click="activeTab = 'major_awards'">
                     MAJOR AWARDS
                 </x-filament::tabs.item>

                 <x-filament::tabs.item alpine-active="activeTab === 'top_result'"
                     x-on:click="activeTab = 'top_result'">
                     TOP {{ $topParticipants }} RESULTS
                 </x-filament::tabs.item>
             @endif
             <x-filament::tabs.item alpine-active="activeTab === 'final_result'"
                 x-on:click="activeTab = 'final_result'">
                 FINAL RESULTS
             </x-filament::tabs.item>

             @foreach (collect($score)->unique('judge.id') as $item)
                 @php
                     $judgeName = data_get($item, 'judge.name');
                 @endphp

                 @if ($judgeName)
                     <x-filament::tabs.item alpine-active="activeTab === '{{ $judgeName }}'"
                         x-on:click="activeTab = '{{ $judgeName }}'" class="uppercase">
                         {{ $judgeName }}
                     </x-filament::tabs.item>
                 @endif
             @endforeach

         </x-filament::tabs>
         <div class="mt-4">
             {{-- Preliminary Content Section --}}
             <div class="space-y-10" x-show="activeTab === '{{ Round::Preliminary->value }}'" x-cloak>
                 <flux:button x-on:click="printDiv('preliminary')" variant="primary" icon="printer" color="violet">Print
                 </flux:button>
                 <div class="space-y-10" id="preliminary">
                     <livewire:result-header :contest="$criteria" />
                     <h2 class="text-center text-3xl font-bold">CONSOLIDATED RESULT</h2>
                     <flux:card class="space-y-6">
                         <livewire:table.finalist gender="Male" :criteria="$criteria" :score="$score"
                             roundType="{{ Round::Preliminary->value }}" />

                         <livewire:table.preliminary gender="Female" :criteria="$criteria" :judges="$judges"
                             :score="$score" roundType="{{ Round::Preliminary->value }}" />
                     </flux:card>
                 </div>
             </div>

             {{-- Final Content Section --}}
             <div class="space-y-10" x-show="activeTab === '{{ Round::Final->value }}'" x-cloak>
                 <flux:button x-on:click="printDiv('final')" variant="primary" icon="printer" color="violet">Print
                 </flux:button>
                 <div class="space-y-10" id="final">
                     <livewire:result-header :contest="$criteria" />
                     <h2 class="text-center text-3xl font-bold">CONSOLIDATED RESULT</h2>
                     <flux:card class="space-y-6">
                         <livewire:table.preliminary gender="Male" :criteria="$criteria" :judges="$judges"
                             :score="$score" roundType="{{ Round::Final->value }}" />
                         <livewire:table.final-score :criteria="$criteria" :judges="$judges" />
                     </flux:card>
                 </div>
             </div>

             {{-- Major Awards Content Section --}}
             <div class="space-y-10" x-show="activeTab === 'major_awards'" x-cloak>
                 <flux:button x-on:click="printDiv('major_awards')" variant="primary" icon="printer" color="violet">
                     Print
                 </flux:button>
                 <div class="space-y-10" id="major_awards">
                     <livewire:result-header :contest="$criteria" />
                     <livewire:table.result heading="MAJOR AWARDS" :criteria="$criteria" :score="$score"
                         roundType="{{ Round::Preliminary->value }}" :judges="$judges" tabType="major" />
                 </div>
             </div>

             <div class="space-y-10" x-show="activeTab === 'top_result'" x-cloak>
                 <flux:button x-on:click="printDiv('top_result')" variant="primary" icon="printer" color="violet">Print
                 </flux:button>
                 <div class="space-y-10" id="top_result">
                     <livewire:result-header :contest="$criteria" />
                     <livewire:table.result heading="TOP {{ $topParticipants }} RESULT"
                         subHeading="{{ $topParticipants }}" :criteria="$criteria" :score="$score"
                         roundType="{{ Round::Preliminary->value }}" :judges="$judges" tabType="top" />
                 </div>
             </div>

             <div class="space-y-10" x-show="activeTab === 'final_result'" x-cloak>
                 <flux:button x-on:click="printDiv('final_result')" variant="primary" icon="printer" color="violet">
                     Print
                 </flux:button>
                 <div class="space-y-10" id="final_result">
                     <livewire:result-header :contest="$criteria" />
                     <livewire:table.result heading="FINAL RESULT" :criteria="$criteria" :score="$score"
                         roundType="{{ $contestType === ContestType::Individual->value ? $finalRoundType : Round::Preliminary->value }}"
                         :judges="$judges"
                         tabType="{{ $contestType === ContestType::Individual->value ? Round::Final->value : Round::Preliminary->value }}" />
                 </div>
             </div>
             @foreach (collect($score)->unique('judge.id') as $judgeItem)
                 @php
                     $judgeEntries = collect($score)->where('judge.id', $judgeItem['judge']['id']);

                     $uniqueCategories = $judgeEntries->unique('contest_category');
                 @endphp
                 @if ($judgeItem)
                     <div id="{{ $judgeItem }}" class="space-y-10"
                         x-show="activeTab === '{{ $judgeItem['judge']['name'] }}'" x-cloak>

                         <flux:button x-on:click="printDiv('{{ $judgeItem }}')" icon="printer" variant="primary"
                             color="violet" class="no-print">
                             Print
                         </flux:button>

                         <livewire:result-header :contest="$criteria" />
                         <p class="text-center uppercase font-bold text-3xl">
                             {{ $judgeItem['judge']['name'] }}
                         </p>
                         @foreach ($uniqueCategories as $categoryItem)
                             @php
                                 $criteriaBlock = collect($judgeItem['criteria']['criteria'])->firstWhere(
                                     'data.content',
                                     $categoryItem['contest_category'],
                                 );

                                 $dynamicDynamicCriteria = collect(data_get($criteriaBlock, 'data.criteria', []))
                                     ->pluck('criterion')
                                     ->values()
                                     ->toArray();
                                 $scores = collect($categoryItem['score']);
                                 $maleParticipants = $scores
                                     ->filter(fn($p) => data_get($p, 'participant.participant.gender') === 'male')
                                     ->sortBy(fn($p) => data_get($p, 'participant.participant.participant_no'));
                                 $femaleParticipants = $scores
                                     ->filter(fn($p) => data_get($p, 'participant.participant.gender') === 'female')
                                     ->sortBy(fn($p) => data_get($p, 'participant.participant.participant_no'));
                                 $teamParticipants = $scores->sortBy(
                                     fn($p) => data_get($p, 'participant.participant.team_participant_no'),
                                 );
                             @endphp
                             <flux:card class="space-y-8 uppercase ">
                                 <flux:heading size="xl" class="text-center uppercase">
                                     {{ $categoryItem['contest_category'] }}
                                 </flux:heading>
                                 @php
                                     logger($contestType);
                                     logger(ContestType::Individual->value);
                                 @endphp
                                 <div
                                     class="{{ $contestType === ContestType::Individual->value ? 'grid grid-cols-1 xl:grid-cols-2 gap-4' :'' }}">

                                     @if ($contestType == ContestType::Individual->value)
                                         <flux:card class="w-full">
                                             <div class="border-b border-zinc-800/10 dark:border-white/20">
                                                 <p class="mb-2 font-semibold text-xl">
                                                     MALE CANDIDATES
                                                 </p>
                                             </div>
                                             <flux:table class="font-bold">
                                                 <flux:table.columns>
                                                     <flux:table.column>
                                                         <div class="text-center w-full">Participant</div>
                                                     </flux:table.column>
                                                     @foreach ($dynamicDynamicCriteria as $criterion)
                                                         <flux:table.column>
                                                             <div class="text-center w-full">{{ $criterion }}
                                                             </div>
                                                         </flux:table.column>
                                                     @endforeach
                                                     <flux:table.column>
                                                         <div class="text-center w-full">Total</div>
                                                     </flux:table.column>
                                                     <flux:table.column>
                                                         <div class="text-center w-full">Rank</div>
                                                     </flux:table.column>
                                                 </flux:table.columns>
                                                 <flux:table.rows>
                                                     @foreach ($maleParticipants as $participant)
                                                         @php
                                                             $rankValue = (float) $participant['rank'];

                                                             $sortedRanks = collect($maleParticipants)
                                                                 ->pluck('rank')
                                                                 ->map(fn($r) => (float) $r)
                                                                 ->sort()
                                                                 ->values();
                                                             $cutoffRank = $sortedRanks[3] ?? null;
                                                             $isHighlighted =
                                                                 $cutoffRank !== null && $rankValue <= $cutoffRank;
                                                             $rowBg = $isHighlighted
                                                                 ? 'bg-violet-600/10 ring-1 ring-inset ring-violet-500 text-white'
                                                                 : '';
                                                         @endphp
                                                         <flux:table.row class="{{ $rowBg }} text-center">
                                                             <flux:table.cell>
                                                                 <p class="text-black dark:text-white">
                                                                     {{ data_get($participant, 'participant.participant.participant_no') }}
                                                                 </p>
                                                             </flux:table.cell>
                                                             @foreach ($dynamicDynamicCriteria as $criterion)
                                                                 @php
                                                                     $key = Str::slug($criterion);
                                                                 @endphp
                                                                 <flux:table.cell>
                                                                     <p class="text-black dark:text-white">
                                                                         {{ $participant['scores'][$key] ?? 0 }}
                                                                     </p>
                                                                 </flux:table.cell>
                                                             @endforeach
                                                             <flux:table.cell>
                                                                 <p class="text-black dark:text-white">
                                                                     {{ $participant['total_score'] }}</p>
                                                             </flux:table.cell>
                                                             <flux:table.cell>
                                                                 <p class="text-black dark:text-white">
                                                                     {{ $participant['rank'] }}</p>
                                                             </flux:table.cell>
                                                         </flux:table.row>
                                                     @endforeach
                                                 </flux:table.rows>
                                             </flux:table>
                                         </flux:card>

                                         <flux:card class="w-full">
                                             <div class="border-b border-zinc-800/10 dark:border-white/20">
                                                 <p class="mb-2 font-semibold text-xl">
                                                     FEMALE CANDIDATES
                                                 </p>
                                             </div>
                                             <flux:table class="font-bold">
                                                 <flux:table.columns>
                                                     <flux:table.column>
                                                         <div class="text-center w-full">Participant</div>
                                                     </flux:table.column>
                                                     @foreach ($dynamicDynamicCriteria as $criterion)
                                                         <flux:table.column>
                                                             <div class="text-center w-full">{{ $criterion }}
                                                             </div>
                                                         </flux:table.column>
                                                     @endforeach
                                                     <flux:table.column>
                                                         <div class="text-center w-full">Total</div>
                                                     </flux:table.column>
                                                     <flux:table.column>
                                                         <div class="text-center w-full">Rank</div>
                                                     </flux:table.column>
                                                 </flux:table.columns>
                                                 <flux:table.rows>
                                                     @foreach ($femaleParticipants as $participant)
                                                         @php
                                                             $rankValue = (float) $participant['rank'];

                                                             $sortedRanks = collect($maleParticipants)
                                                                 ->pluck('rank')
                                                                 ->map(fn($r) => (float) $r)
                                                                 ->sort()
                                                                 ->values();
                                                             $cutoffRank = $sortedRanks[3] ?? null;
                                                             $isHighlighted =
                                                                 $cutoffRank !== null && $rankValue <= $cutoffRank;
                                                             $rowBg = $isHighlighted
                                                                 ? 'bg-violet-600/10 ring-1 ring-inset ring-violet-500 text-white'
                                                                 : '';
                                                         @endphp
                                                         <flux:table.row class="{{ $rowBg }} text-center">
                                                             <flux:table.cell>
                                                                 <p class="text-black dark:text-white">
                                                                     {{ data_get($participant, 'participant.participant.participant_no') }}
                                                                 </p>
                                                             </flux:table.cell>
                                                             @foreach ($dynamicDynamicCriteria as $criterion)
                                                                 @php
                                                                     $key = Str::slug($criterion);
                                                                 @endphp
                                                                 <flux:table.cell>
                                                                     <p class="text-black dark:text-white">
                                                                         {{ $participant['scores'][$key] ?? 0 }}
                                                                     </p>
                                                                 </flux:table.cell>
                                                             @endforeach
                                                             <flux:table.cell>
                                                                 <p class="text-black dark:text-white">
                                                                     {{ $participant['total_score'] }}</p>
                                                             </flux:table.cell>
                                                             <flux:table.cell>
                                                                 <p class="text-black dark:text-white">
                                                                     {{ $participant['rank'] }}</p>
                                                             </flux:table.cell>
                                                         </flux:table.row>
                                                     @endforeach
                                                 </flux:table.rows>
                                             </flux:table>
                                         </flux:card>
                                     @else
                                         <flux:card class="w-full">
                                             <div class="border-b border-zinc-800/10 dark:border-white/20">
                                                 <p class="mb-2 font-semibold text-xl">
                                                     TEAM CANDIDATES
                                                 </p>
                                             </div>
                                             <flux:table class="font-bold">
                                                 <flux:table.columns>
                                                     <flux:table.column>
                                                         <div class="text-center w-full">Participant</div>
                                                     </flux:table.column>
                                                     @foreach ($dynamicDynamicCriteria as $criterion)
                                                         <flux:table.column>
                                                             <div class="text-center w-full">{{ $criterion }}
                                                             </div>
                                                         </flux:table.column>
                                                     @endforeach
                                                     <flux:table.column>
                                                         <div class="text-center w-full">Total</div>
                                                     </flux:table.column>
                                                     <flux:table.column>
                                                         <div class="text-center w-full">Rank</div>
                                                     </flux:table.column>
                                                 </flux:table.columns>
                                                 <flux:table.rows>
                                                     @foreach ($teamParticipants as $participant)
                                                         @php
                                                             $rankValue = (float) $participant['rank'];
                                                             $qualifiedCount =
                                                                 (int) $criteria[0]['qualified_participant'];

                                                             $sortedRanks = collect($teamParticipants)
                                                                 ->pluck('rank')
                                                                 ->map(fn($r) => (float) $r)
                                                                 ->sort()
                                                                 ->values();

                                                             $cutoffRank = $sortedRanks[$qualifiedCount - 1] ?? null;

                                                             $isHighlighted =
                                                                 $cutoffRank !== null && $rankValue <= $cutoffRank;

                                                             $rowBg = $isHighlighted
                                                                 ? 'bg-violet-600/10 ring-1 ring-inset ring-violet-500 text-white'
                                                                 : '';
                                                         @endphp
                                                         <flux:table.row class="{{ $rowBg }} text-center">
                                                             <flux:table.cell>
                                                                 <p class="text-black dark:text-white">
                                                                     {{ data_get($participant, 'participant.participant.team_participant_no') }}
                                                                 </p>
                                                             </flux:table.cell>
                                                             @foreach ($dynamicDynamicCriteria as $criterion)
                                                                 @php
                                                                     $key = Str::slug($criterion);
                                                                 @endphp
                                                                 <flux:table.cell>
                                                                     <p class="text-black dark:text-white">
                                                                         {{ $participant['scores'][$key] ?? 0 }}
                                                                     </p>
                                                                 </flux:table.cell>
                                                             @endforeach
                                                             <flux:table.cell>
                                                                 <p class="text-black dark:text-white">
                                                                     {{ $participant['total_score'] }}</p>
                                                             </flux:table.cell>
                                                             <flux:table.cell>
                                                                 <p class="text-black dark:text-white">
                                                                     {{ $participant['rank'] }}</p>
                                                             </flux:table.cell>
                                                         </flux:table.row>
                                                     @endforeach
                                                 </flux:table.rows>
                                             </flux:table>
                                         </flux:card>
                                     @endif
                                 </div>
                             </flux:card>
                         @endforeach
                         <div class="flex flex-col justify-center items-center uppercase gap-4">
                             <div>
                                 <p class="font-medium  border-b border-black dark:border-white ">
                                     {{ $judgeItem['judge']['name'] }}
                                 </p>
                                 <p class="text-center text-xs">
                                     JUDGE
                                 </p>
                             </div>

                             <div>
                                 <p class="font-medium text-center  border-b border-black dark:border-white ">
                                     {{ auth()->user()->name }}
                                 </p>
                                 <p class="text-center text-xs">
                                     TABULATOR
                                 </p>
                             </div>
                         </div>
                     </div>
                 @endif
             @endforeach
         </div>
 </x-filament-panels::page>
