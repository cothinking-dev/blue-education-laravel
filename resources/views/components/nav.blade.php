@props(['transparent' => true])

@php
    $navItems = config('nav.items', []);

    $isActive = function (array $item): bool {
        $patterns = $item['active'] ?? $item['route'] ?? null;
        if (! $patterns) {
            return false;
        }
        return request()->routeIs(...(array) $patterns);
    };

    $isChildActive = function (array $child): bool {
        $pattern = $child['active'] ?? $child['route'] ?? null;
        return $pattern && request()->routeIs($pattern);
    };
@endphp

<header role="banner"
    x-data="{ openMenu: null, scrolled: false }"
    x-init="scrolled = window.scrollY > 100"
    @scroll.window="scrolled = window.scrollY > 100"
    :class="scrolled ? 'bg-white/95 backdrop-blur-sm border-b border-base-200 nav-scrolled' : 'border-b border-transparent'"
    class="fixed top-0 left-0 right-0 z-50 nav-transparent"
>
    <a class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-50 focus:bg-white focus:text-primary-800 focus:px-4 focus:py-2 focus:rounded focus:shadow-lg focus:text-sm focus:font-semibold" href="#main-content">Skip to content</a>

    <nav aria-label="Main navigation" class="px-8 py-4 flex items-center justify-between gap-12">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="shrink-0" aria-label="Blue Education — home">
            <picture>
                <source srcset="{{ asset('brand/logo-sm.webp') }}" type="image/webp">
                <img src="{{ asset('brand/logo-sm.png') }}" alt="Blue Education" class="h-10 w-auto nav-logo">
            </picture>
        </a>

        {{-- Desktop nav links --}}
        <div class="hidden lg:flex items-center gap-6 text-sm font-medium text-base-600 flex-1">
            @foreach ($navItems as $item)
                @if (isset($item['children']))
                    @php $slug = Str::slug($item['label']); @endphp
                    <div class="relative" @click.away="openMenu = openMenu === '{{ $slug }}' ? null : openMenu">
                        <button type="button" @click="openMenu = openMenu === '{{ $slug }}' ? null : '{{ $slug }}'" :aria-expanded="openMenu === '{{ $slug }}'"
                                class="nav-link flex items-center gap-1 py-1 transition-colors focus:outline-none {{ $isActive($item) ? 'text-primary-800 font-semibold' : 'hover:text-primary-800 focus:text-primary-800' }}">
                            {{ $item['label'] }}
                            <x-heroicon-m-chevron-down class="w-3 h-3 mt-0.5 transition-transform" ::class="{ 'rotate-180': openMenu === '{{ $slug }}' }" aria-hidden="true" />
                        </button>
                        <div x-show="openMenu === '{{ $slug }}'" x-cloak x-transition @click.away="openMenu = null" class="absolute top-full left-0 mt-2 w-64 bg-white border border-base-200 rounded-lg shadow-lg py-2 z-50">
                            @foreach ($item['children'] as $child)
                                @if (! empty($child['divider']))
                                    <hr class="my-1 border-base-100">
                                @elseif (isset($child['heading']))
                                    <div class="px-3 py-1 text-xs font-bold text-base-400 uppercase tracking-wider">{{ $child['heading'] }}</div>
                                @else
                                    <a href="{{ route($child['route']) }}" class="block px-4 py-2 text-sm text-base-700 hover:bg-primary-50 hover:text-primary-800 {{ ! empty($child['indent']) ? 'pl-8' : '' }} {{ $isChildActive($child) ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">{{ $child['label'] }}</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ route($item['route']) }}" class="nav-link py-1 transition-colors focus:outline-none {{ $isActive($item) ? 'text-primary-800 font-semibold' : 'hover:text-primary-800 focus:text-primary-800' }}">{{ $item['label'] }}</a>
                @endif
            @endforeach
        </div>

        {{-- CTA + Hamburger --}}
        <div class="flex items-center gap-3 shrink-0">
            <a href="{{ route('contact') }}" class="hidden lg:inline-flex bg-primary-500 text-white text-sm font-semibold px-5 py-2 rounded-corner hover:bg-primary-600 focus:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300">Book a Consultation</a>

            {{-- Mobile hamburger --}}
            <button type="button" x-data @click="$dispatch('toggle-mobile-nav')" aria-label="Open navigation menu"
                    class="nav-hamburger lg:hidden p-2 rounded text-base-600 hover:text-primary-800 focus:outline-none focus:ring-2 focus:ring-primary-300">
                <x-heroicon-o-bars-3 class="w-6 h-6" aria-hidden="true" />
            </button>
        </div>

    </nav>

    {{-- Mobile drawer --}}
    <div x-data="{ open: false, openSection: null }" @toggle-mobile-nav.window="open = !open" x-show="open" x-cloak x-transition
         class="lg:hidden border-t border-base-200 bg-white px-6 py-4 space-y-1">

        @foreach ($navItems as $item)
            @if (isset($item['children']))
                @php $slug = Str::slug($item['label']); @endphp
                <div>
                    <button type="button" @click="openSection = openSection === '{{ $slug }}' ? null : '{{ $slug }}'"
                            :aria-expanded="openSection === '{{ $slug }}'"
                            class="flex items-center justify-between w-full py-2 text-sm font-medium {{ $isActive($item) ? 'text-primary-800' : 'text-base-700 hover:text-primary-800' }}">
                        {{ $item['label'] }}
                        <x-heroicon-m-chevron-down class="w-4 h-4 transition-transform" ::class="{ 'rotate-180': openSection === '{{ $slug }}' }" aria-hidden="true" />
                    </button>
                    <div x-show="openSection === '{{ $slug }}'" x-cloak x-transition class="pl-4 space-y-0.5 pb-2">
                        @foreach ($item['children'] as $child)
                            @if (! empty($child['divider']))
                                <hr class="my-1 border-base-100">
                            @elseif (isset($child['heading']))
                                <p class="text-xs font-bold text-base-400 uppercase tracking-wider py-1 {{ ! $loop->first ? 'mt-1' : '' }}">{{ $child['heading'] }}</p>
                            @else
                                <a href="{{ route($child['route']) }}" class="block py-1.5 text-sm {{ ! empty($child['indent']) ? 'pl-3' : '' }} {{ $isChildActive($child) ? 'text-primary-800 font-semibold' : 'text-base-600 hover:text-primary-800' }}">{{ $child['label'] }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            @else
                <a href="{{ route($item['route']) }}" class="block py-2 text-sm font-medium {{ $isActive($item) ? 'text-primary-800' : 'text-base-700 hover:text-primary-800' }}">{{ $item['label'] }}</a>
            @endif
        @endforeach

        <div class="pt-4 pb-2">
            <a href="{{ route('contact') }}" class="block w-full text-center bg-primary-500 text-white text-sm font-semibold px-5 py-3 rounded-corner hover:bg-primary-600">Book a Consultation</a>
        </div>
    </div>

</header>
