<?php

use Illuminate\Support\Collection;
use Livewire\Component;

new class extends Component {
    public Collection $judges;
};
?>

<div class="flex flex-col justify-center items-center  uppercase">
    <div class="grid grid-cols-2 place-items-center gap-4">
        @foreach (collect($judges)->sortBy(fn($judge) => empty($judge['judge_no']) ? PHP_INT_MAX : $judge['judge_no'])->values() as $judge)
            <div class="text-center mt-4">
                <p class="font-medium  border-b border-black dark:border-white ">{{ $judge['name'] }}
                </p>
                <p class="text-xs">{{ $judge['position'] }} {{ $judge['no'] }}</p>
            </div>
        @endforeach
    </div>
    <div class="w-fit text-center mt-4">
        <p class="font-medium  border-b border-black dark:border-white ">
            {{ auth()->user()->name }}
        </p>
        <p class="text-center text-xs">
            TABULATOR
        </p>
    </div>
</div>
