@props([
    'headers' => [],
    'rows' => [],
    'caption' => null,
    'striped' => true,
])

<div {{ $attributes->merge(['class' => 'relative border border-gray-200 rounded-corner-lg overflow-hidden']) }}
     x-data="{ canScroll: false, scrolledEnd: false }"
     x-init="
         const el = $refs.tableWrap;
         const check = () => {
             canScroll = el.scrollWidth > el.clientWidth;
             scrolledEnd = el.scrollLeft + el.clientWidth >= el.scrollWidth - 2;
         };
         check();
         new ResizeObserver(check).observe(el);
         el.addEventListener('scroll', check, { passive: true });
     ">
    <div class="overflow-x-auto" x-ref="tableWrap">
        <table class="w-full text-sm">
            @if($caption)
                <caption class="px-6 py-3 text-left text-gray-500 text-xs font-medium uppercase tracking-wider bg-gray-50">{{ $caption }}</caption>
            @endif
            <thead>
                <tr class="bg-primary-800 text-white text-left">
                    @foreach($headers as $header)
                        <th class="px-6 py-3 font-semibold text-sm whitespace-nowrap">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row)
                    <tr class="{{ $striped && $loop->even ? 'bg-gray-50' : 'bg-white' }} border-t border-gray-100">
                        @foreach($row as $cell)
                            <td class="px-6 py-3 text-gray-700">{{ $cell }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Scroll indicator shadow --}}
    <div x-show="canScroll && !scrolledEnd"
         x-transition:leave.opacity
         class="absolute top-0 right-0 bottom-0 w-8 pointer-events-none bg-gradient-to-l from-black/10 to-transparent rounded-r-corner-lg"
         aria-hidden="true"></div>
</div>
