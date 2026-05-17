@props(['heading', 'subHeading' => false, 'category' => [], 'judges' => []])


<div class="font-serif">
    <div class=" border-t border-b p-2">
        <h2 class="text-2xl font-bold text-center">
            {{ $heading }}
        </h2>
    </div>

    @if ($subHeading)
        <div>
            <h3>TOP {{ $heading }} FINALIST</h3>
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
