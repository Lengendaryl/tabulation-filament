<?php

use App\Actions\Tabulate\Tabulate;
use App\Actions\Tabulate\TabulateFinalist;
use App\Enums\ContestType;
use App\Enums\Round;
use App\Enums\ScoringType;
use App\Events\JudgeSubmittedEvent;
use App\Events\TabulateEvent;
use App\Models\Contest;
use App\Models\Criteria;
use App\Models\JudgesGroup;
use App\Models\Result;
use App\Models\Score;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;
use STS\FilamentImpersonate\Actions\Impersonate;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;

new class extends Component implements HasActions, HasSchemas {
    use InteractsWithActions;
    use InteractsWithSchemas;

    public string $heading = '';
    public Collection $judges;
    public Collection $contest;
    public array $judgeStatusMap = [];
    public Collection $criteria;
    public Collection $score;
    public int $judgeCount;
    public int $criteriaCount;
    public string $roundType = 'preliminary';
    public int $selectedJudgeId = 0;
    public string $contestType;
    public function buildJudgeStatusMap(): void
    {
        $groups = JudgesGroup::where('criteria_id', $this->criteria[0]['id'])->get();
        $map = [];

        foreach ($groups as $group) {
            foreach ($group->judges as $levelGroup) {
                $categoryName = $levelGroup['content'] ?? null;
                foreach ($levelGroup['judges'] ?? [] as $judgeStatus) {
                    $judgeId = $judgeStatus['judge_id'] ?? null;
                    if ($categoryName && $judgeId) {
                        $map[$categoryName][$judgeId] = [
                            'status' => $judgeStatus['status'] ?? false,
                            'request_edit' => $judgeStatus['request_edit'] ?? false,
                        ];
                    }
                }
            }
        }

        $this->judgeStatusMap = $map;
    }

    // ✅ Add this
    public function mount(): void
    {
        $this->contestType = $this->criteria[0]['contest']['contest_type'];
        $this->judgeCount = JudgesGroup::where('criteria_id', $this->criteria[0]['id'])
            ->pluck('judge_id')
            ->flatten()
            ->count();

        $this->criteriaCount = collect($this->criteria[0]['criteria'])
            ->where('data.level', Round::Preliminary)
            ->count();

        $this->buildJudgeStatusMap();
    }
    public function impersonateAction(): Action
    {
        return Impersonate::make('impersonate')->record(fn() => User::find($this->selectedJudgeId))->redirectTo(route('filament.judge.resources.contests.index'))->label('Login as');
    }

    #[On('echo:judging,.JudgeSubmittedEvent')]
    public function handleJudgeSubmitted(): void
    {
        $this->buildJudgeStatusMap();
    }

    public function toggleStatus(string $originalCategory, string $level, int $judgeId)
    {
        $groups = JudgesGroup::where('criteria_id', $this->criteria[0]['id'])->get();
        foreach ($groups as $group) {
            $judges = $group->judges;
            $updated = false;

            foreach ($judges as $i => $competitionLevel) {
                if (($competitionLevel['content'] ?? null) !== $originalCategory || ($competitionLevel['level'] ?? null) !== $level) {
                    continue;
                }

                foreach ($competitionLevel['judges'] as $j => $judgeStatus) {
                    if (($judgeStatus['judge_id'] ?? null) == $judgeId) {
                        // ✅ TOGGLE instead of forcing true
                        $currentStatus = $judges[$i]['judges'][$j]['status'] ?? false;
                        $statusRequestEdit = $judges[$i]['judges'][$j]['request_edit'] ?? false;
                        $judges[$i]['judges'][$j]['status'] = !$currentStatus;
                        $judges[$i]['judges'][$j]['request_edit'] = !$statusRequestEdit;

                        $updated = true;

                        break 2;
                    }
                }
            }

            if ($updated) {
                $group->judges = $judges;
                $group->save();
                $this->buildJudgeStatusMap();
                broadcast(new JudgeSubmittedEvent($judgeId, $originalCategory))->toOthers();
            }
        }
    }

    public function tabulate(string $level, string $contestCategory)
    {
        Tabulate::fromComponent($this)->tabulate($level, $contestCategory);
    }

    public function tabulateFinalist(string $level)
    {
        TabulateFinalist::fromComponent($this)->tabulateFinalist($level);
    }
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
                <flux:table.cell class="flex gap-1 items-center justify-between">
                    <p class="text-black font-medium dark:text-white">{{ $judge['name'] }}</p>
                    <flux:icon.eye variant="solid"
                        wire:click="$set('selectedJudgeId', {{ $judge['judge_id'] }}); mountAction('impersonate')" />
                </flux:table.cell>
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

    <div class="flex items-center justify-between gap-4 ">
        @foreach ($contest as $content)
        @php
        $categoryName = $content['content'];
        @endphp
        <flux:card class="w-full p-4 space-y-4">
            <div>
                <flux:heading size="lg" class="uppercase">{{ $categoryName }}</flux:heading>
            </div>
            <div>
                <flux:button variant="primary" color="violet"
                    class="w-full hover:bg-violet-600 hover:shadow-lg hover:shadow-violet-600/50"
                    wire:click="tabulate('{{ Str::lower($heading) }}','{{ $categoryName }}')">
                    TABULATE {{ Str::upper($categoryName) }}
                </flux:button>
            </div>
        </flux:card>
        @endforeach
        @if ($roundType === Round::Preliminary->value && $contestType === ContestType::Individual->value)
        <flux:card class="w-full p-4 space-y-4">
            <div>
                <flux:heading size="lg" class="uppercase">TOP {{ $criteria[0]['qualified_participant'] }}
                    FINALIST
                </flux:heading>
            </div>

            <div>
                <flux:button variant="primary" color="violet"
                    class="w-full hover:bg-violet-600 hover:shadow-lg hover:shadow-violet-600/50"
                    wire:click="tabulateFinalist('{{ Str::lower($heading) }}')">
                    TABULATE TOP {{ $criteria[0]['qualified_participant'] }} FINALIST
                </flux:button>
            </div>
        </flux:card>
        @endif
    </div>
</div>