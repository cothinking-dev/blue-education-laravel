@props([
    'items' => [],
])

<div {{ $attributes->merge(['class' => 'space-y-3']) }}>
    @foreach($items as $item)
        <details class="group border border-base-200 rounded-corner-lg overflow-hidden bg-white transition-shadow hover:shadow-sm" {{ !empty($item['open']) ? 'open' : '' }}>
            <summary class="flex items-center justify-between gap-4 px-6 py-4 cursor-pointer select-none bg-base-50 hover:bg-base-100 transition-colors">
                <span class="font-semibold text-base-900 text-sm">{{ $item['question'] }}</span>
                <x-heroicon-m-chevron-down class="w-5 h-5 text-base-400 shrink-0 transition-transform duration-200 group-open:rotate-180" aria-hidden="true" />
            </summary>
            <div class="px-6 pb-5 text-base-600 text-sm leading-relaxed text-pretty border-t border-base-100 pt-4">
                {!! \App\Models\Post::sanitizeHtml($item['answer']) !!}
            </div>
        </details>
    @endforeach
</div>
