{{--
| Prop    | Type   | Default | Description                                                |
|---------|--------|---------|------------------------------------------------------------|
| items   | array  | []      | Array of {term, description, detail?, href?, linkText?}    |
| columns | int    | 2       | Number of grid columns (1, 2, or 3)                        |
--}}
@props([
    'items' => [],
    'columns' => 2,
])

@php
    $colMap = [1 => 'sm:grid-cols-1', 2 => 'sm:grid-cols-2', 3 => 'sm:grid-cols-3'];
    $colClass = $colMap[$columns] ?? 'sm:grid-cols-2';
@endphp

<dl {{ $attributes->merge(['class' => "space-y-6 $colClass sm:space-y-0 sm:grid sm:gap-6"]) }}>
    @foreach($items as $i => $item)
        <div class="border border-base-200 rounded-corner-lg p-5 bg-base-50/50">
            <dt class="text-sm font-semibold text-base-900 flex items-start gap-3 mb-3">
                <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-primary-100 text-primary-800 text-xs font-bold shrink-0">{{ $i + 1 }}</span>
                <span>{{ $item['term'] }}</span>
            </dt>
            <dd class="pl-10">
                <p class="text-sm text-base-600 leading-relaxed text-pretty">{{ $item['description'] }}</p>
                @if(!empty($item['detail']))
                    <p class="text-xs text-base-500 leading-relaxed text-pretty mt-2">{{ $item['detail'] }}</p>
                @endif
                @if(!empty($item['href']))
                    <a href="{{ $item['href'] }}" class="text-primary-800 font-medium hover:underline text-xs mt-3 block">{{ $item['linkText'] ?? 'Learn more' }} &rarr;</a>
                @endif
            </dd>
        </div>
    @endforeach
</dl>
