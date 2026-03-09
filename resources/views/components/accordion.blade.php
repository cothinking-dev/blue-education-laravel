@props([
    'items' => [],
])

<div {{ $attributes->merge(['class' => 'space-y-3']) }}>
    @foreach($items as $item)
        <details class="group border border-gray-200 rounded-corner-lg overflow-hidden" {{ !empty($item['open']) ? 'open' : '' }}>
            <summary class="flex items-center justify-between gap-4 px-6 py-4 cursor-pointer select-none hover:bg-gray-50 transition-colors font-medium text-gray-900">
                {{ $item['question'] }}
                <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </summary>
            <div class="px-6 pb-5 text-gray-600 leading-relaxed text-pretty">
                {{ $item['answer'] }}
            </div>
        </details>
    @endforeach
</div>
