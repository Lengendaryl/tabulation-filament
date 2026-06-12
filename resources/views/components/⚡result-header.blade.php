<?php

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

new class extends Component {
    public Collection $contest;
};
?>

<header class="flex flex-col  gap-10">
    <div class="flex justify-between">
        <div class="flex gap-4 items-center">
            <div>
                <img src="{{ asset('asset/bisu.png') }}" alt="" class="h-16">
            </div>
            <div class="leading-tight">
                <p>Republic of the Philippines</p>
                <p>BOHOL ISLAND STATE UNIVERSITY</p>
                <p>Masgsija, Balilihan, 6342, Bohol, Philippines</p>
                <p>Balance | Integrity | Stewardship | Uprightness</p>
            </div>
        </div>
        <div class="flex gap-4">
            <img src="{{ asset('asset/bagong.png') }}" alt="" class="h-16">
            <img src="{{ asset('asset/certified.jpg') }}" alt="" class="h-16">
        </div>
    </div>

    <div class="flex justify-center items-center w-full">
        <div class="flex flex-col items-center justify-center gap-1">
            <img class="h-36 w-32" src="{{ Storage::url($contest[0]['contest']['event']['poster']) }}" alt="">
            <p class="font-medium">
                {{ $contest[0]['contest']['event']['name'] }}
            </p>
            <div class="flex gap-1 text-xs">
                <p>{{ date_format(date_create($contest[0]['contest']['event']['date']), 'F j, Y') }}</p>
                <p>|</p>
                <p>{{ $contest[0]['contest']['event']['venue'] }}</p>
            </div>
        </div>
    </div>
</header>
