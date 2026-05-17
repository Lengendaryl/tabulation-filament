@props(['heading', 'subHeading' => false,'category' => [], 'judges' => []])


<div class="font-serif space-y-10">
    <div class=" border-t border-b p-2">
        <h2 class="text-2xl font-bold text-center">
            {{ $heading }}
        </h2>
    </div>

    @if ($subHeading)
        <div>
            <h3 class="text-center text-2xl">TOP {{ $subHeading }} FINALIST</h3>
        </div>
    @endif

    <div>
        @foreach ($category as $result)
            <div>
                sd
            </div>
        @endforeach
    </div>

    <div>
        @foreach ($judges as $judge)
            <div>
                sad
            </div>
        @endforeach
    </div>
</div>
