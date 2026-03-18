@props([
    'items' => [],
    'dark' => false,
])

<nav {{ $attributes->merge(['class' => 'text-sm', 'aria-label' => 'Breadcrumb']) }}>
    <ol class="flex items-center gap-1.5">
        <li>
            <a href="{{ url('/') }}" class="{{ $dark ? 'text-base-300 hover:text-white' : 'text-base-500 hover:text-primary-800' }} transition-colors">Home</a>
        </li>
        @foreach($items as $item)
            <li class="flex items-center gap-1.5">
                <x-heroicon-m-chevron-right class="w-3.5 h-3.5 {{ $dark ? 'text-base-500' : 'text-base-400' }}" aria-hidden="true" />
                @if(!empty($item['href']))
                    <a href="{{ $item['href'] }}" class="{{ $dark ? 'text-base-300 hover:text-white' : 'text-base-500 hover:text-primary-800' }} transition-colors">{{ $item['label'] }}</a>
                @else
                    <span class="{{ $dark ? 'text-white font-medium' : 'text-base-900 font-medium' }}">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
