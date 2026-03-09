@props([
    'headers' => [],
    'rows' => [],
    'caption' => null,
    'striped' => true,
])

<div {{ $attributes->merge(['class' => 'border border-gray-200 rounded-corner-lg overflow-hidden overflow-x-auto']) }}>
    <table class="w-full text-sm">
        @if($caption)
            <caption class="px-6 py-3 text-left text-gray-500 text-xs font-medium uppercase tracking-wider bg-gray-50">{{ $caption }}</caption>
        @endif
        <thead>
            <tr class="bg-primary-800 text-white text-left">
                @foreach($headers as $header)
                    <th class="px-6 py-3 font-semibold text-sm">{{ $header }}</th>
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
