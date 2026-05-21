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

            $judges = collect($judgesGroup)
                ->flatMap(fn($group) => collect($group->judges)->flatMap(fn($levelGroup) => $levelGroup['judges']))
                ->unique('judge_id')
                ->values();

            $judgeStatusMap = [];
            foreach ($judgesGroup as $group) {
                foreach ($group->judges as $levelGroup) {
                    $categoryName = $levelGroup['content'];
                    foreach ($levelGroup['judges'] as $jStatus) {
                        $judgeStatusMap[$categoryName][$jStatus['judge_id']] = [
                            'status' => (bool) $jStatus['status'],
                            'request_edit' => (bool) $jStatus['request_edit'],
                        ];
                    }
                }
            }

            $topParticipants = collect($criteria)->unique('criteria.id')->first()['criteria']['qualified_participant'];
        @endphp

        {{-- PRELIMINARY --}}
        <x-table-judge-result heading="PRELIMINARY" :judges="$judges" :contest="$preliminaryContents" :judgeStatusMap="$judgeStatusMap"/>

        {{-- FINAL --}}
        <x-table-judge-result heading="FINAL" :judges="$judges" :contest="$finalContents" :judgeStatusMap="$judgeStatusMap"/>

    </flux:card>

    <div x-data="{ activeTab: 'preliminary' }" label="Content tabs">
        <div class="w-fit">
            <x-filament::tabs>
                <x-filament::tabs.item alpine-active="activeTab === 'preliminary'" x-on:click="activeTab = 'preliminary'">
                    PRELIMINARY
                </x-filament::tabs.item>

                <x-filament::tabs.item alpine-active="activeTab === 'final'" x-on:click="activeTab = 'final'">
                    FINAL
                </x-filament::tabs.item>

                <x-filament::tabs.item alpine-active="activeTab === 'major_awards'"
                    x-on:click="activeTab = 'major_awards'">
                    MAJOR AWARDS
                </x-filament::tabs.item>

                <x-filament::tabs.item alpine-active="activeTab === 'top_result'" x-on:click="activeTab = 'top_result'">
                    TOP {{ $topParticipants }} RESULTS
                </x-filament::tabs.item>

                <x-filament::tabs.item alpine-active="activeTab === 'final_result'"
                    x-on:click="activeTab = 'final_result'">
                    FINAL RESULTS
                </x-filament::tabs.item>

                @foreach (collect($criteria)->unique('judge.id') as $item)
                    <x-filament::tabs.item class="uppercase">
                        {{ $item['judge']['name'] }}
                    </x-filament::tabs.item>
                @endforeach

            </x-filament::tabs>
        </div>
        <div class="mt-4">
            {{-- Preliminary Content Section --}}
            <div class="space-y-10" x-show="activeTab === 'preliminary'" x-cloak>
                <x-printable-header />
                <h2 class="text-center text-3xl font-bold">CONSOLIDATED RESULT</h2>
                <x-table gender="Male">
                    {{-- Preliminary Table Data --}}
                </x-table>
            </div>

            {{-- Final Content Section --}}
            <div class="space-y-10" x-show="activeTab === 'final'" x-cloak>
                <x-printable-header />
                <h2 class="text-center text-3xl font-bold">CONSOLIDATED RESULT</h2>
                <x-table gender="Male">
                    {{-- Final Table Data --}}
                </x-table>
            </div>

            {{-- Major Awards Content Section --}}
            <div class="space-y-10" x-show="activeTab === 'major_awards'" x-cloak>
                @php
                    $test = ['sad'];
                @endphp
                <x-printable-header />
                <x-printable-result heading="MAJOR AWARD" :category="$test" :judges="$test" />
            </div>

            <div class="space-y-10" x-show="activeTab === 'top_result'" x-cloak>
                <x-printable-header />
                <x-printable-result heading="TOP {{ $topParticipants }} RESULT" :subHeading="$topParticipants" :category="$test"
                    :judges="$test" />
            </div>

            <div class="space-y-10" x-show="activeTab === 'final_result'" x-cloak>
                <x-printable-header />
                <x-printable-result heading="FINAL RESULT" :category="$test" :judges="$test" />
            </div>

        </div>
    </div>

</x-filament-panels::page>
