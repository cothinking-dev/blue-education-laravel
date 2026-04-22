{{--
| Prop       | Type    | Default | Description                                           |
|------------|---------|---------|-------------------------------------------------------|
| items      | array   | []      | Array of {question, answer, open?} items               |
| exclusive  | bool    | true    | Only one item open at a time                           |
--}}
@props([
    'items' => [],
    'exclusive' => true,
])

@php
    $groupName = $exclusive ? 'accordion-' . crc32(serialize(array_column($items, 'question'))) : null;
@endphp

<div {{ $attributes->merge(['class' => 'space-y-3']) }}>
    @foreach($items as $item)
        <details
            class="group border border-base-200 rounded-corner-lg overflow-hidden bg-white transition-shadow hover:shadow-sm"
            {{ !empty($item['open']) ? 'open' : '' }}
            @if($groupName) name="{{ $groupName }}" @endif
        >
            <summary class="flex items-center justify-between gap-4 px-6 py-4 cursor-pointer select-none bg-base-50 hover:bg-base-100 transition-colors">
                <span class="font-semibold text-base-900 text-sm">{{ $item['question'] }}</span>
                <x-heroicon-m-chevron-down class="w-5 h-5 text-base-400 shrink-0 transition-transform duration-200 group-open:rotate-180" aria-hidden="true" />
            </summary>
            <div class="grid grid-rows-[0fr] group-open:grid-rows-[1fr] transition-[grid-template-rows] duration-200 ease-in-out">
                <div class="overflow-hidden">
                    <div class="px-6 pb-5 text-base-600 text-sm leading-relaxed text-pretty border-t border-base-100 pt-4">
                        {!! \App\Models\Post::sanitizeHtml($item['answer']) !!}
                    </div>
                </div>
            </div>
        </details>
    @endforeach
</div>
