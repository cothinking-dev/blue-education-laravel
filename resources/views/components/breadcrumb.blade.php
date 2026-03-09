@props([
    'items' => [],
    'dark' => false,
])

<nav {{ $attributes->merge(['class' => 'text-sm', 'aria-label' => 'Breadcrumb']) }}>
    <ol class="flex items-center gap-1.5">
        <li>
            <a href="{{ url('/') }}" class="{{ $dark ? 'text-gray-300 hover:text-white' : 'text-gray-500 hover:text-primary-800' }} transition-colors">Home</a>
        </li>
        @foreach($items as $item)
            <li class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 {{ $dark ? 'text-gray-500' : 'text-gray-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                @if(!empty($item['href']))
                    <a href="{{ $item['href'] }}" class="{{ $dark ? 'text-gray-300 hover:text-white' : 'text-gray-500 hover:text-primary-800' }} transition-colors">{{ $item['label'] }}</a>
                @else
                    <span class="{{ $dark ? 'text-white font-medium' : 'text-gray-900 font-medium' }}">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
