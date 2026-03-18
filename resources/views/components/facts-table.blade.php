@props([
    'title' => null,
    'rows' => [],
])

<div {{ $attributes->merge(['class' => 'border border-base-200 rounded-corner-lg overflow-hidden']) }}>
    @if($title)
        <div class="bg-primary-800 text-white font-semibold text-sm px-6 py-3">{{ $title }}</div>
    @endif
    <table class="w-full text-sm">
        <tbody>
            @foreach($rows as $row)
                <tr class="{{ $loop->even ? 'bg-base-50' : 'bg-white' }}">
                    <td class="px-6 py-3 font-medium text-base-900 w-2/5">{{ $row['key'] }}</td>
                    <td class="px-6 py-3 text-base-600">{{ $row['value'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
