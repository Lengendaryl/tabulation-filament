<?php

use App\Events\JudgeSubmittedEvent;
use App\Filament\Resources\Results\Pages\ViewResult;
use App\Models\Criteria;
use App\Models\JudgesGroup;
use Illuminate\Support\Collection;
use Livewire\Component;

new class extends Component {
    public string $heading = '';
    public Collection $judges;
    public Collection $contest;
    public array $judgeStatusMap = [];
    public collection $criteria;

    protected $listeners = [
        'echo:judging,.JudgeSubmittedEvent' => 'handleJudgeSubmitted',
    ];
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
                            'status'       => $judgeStatus['status'] ?? false,
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
        $this->buildJudgeStatusMap();
    }

    // ✅ Add this
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

                if (
                    ($competitionLevel['content'] ?? null) !== $originalCategory ||
                    ($competitionLevel['level'] ?? null) !== $level
                ) {
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
                broadcast(new JudgeSubmittedEvent(
                    $judgeId,
                    $originalCategory,
                ))->toOthers();
            }
        }
    }
};
?>

<div class="space-y-2">
    <p class="text-xl font-bold">{{ $heading }} JUDGES CONTESTsad</p>
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
    <flux:button variant="primary" color="violet" class="w-full">TABULATE</flux:button>
</div>