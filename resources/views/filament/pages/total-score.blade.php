@php
    $total = collect($get('criteria') ?? [])
        ->sum(fn ($item) => (float) ($item['score'] ?? 0));
@endphp

<div class="text-sm font-medium">
    Total Score: {{ $total }} / 100
</div>