@props([
    'dark' => false,
])

@php
    $route = request()->route();
    $segments = explode('/', trim(request()->path(), '/'));
    $crumbs = [['label' => 'Home', 'href' => route('home')]];

    // Build breadcrumbs from URL segments using route metadata
    $path = '';
    foreach ($segments as $i => $segment) {
        $path .= '/' . $segment;
        $isLast = $i === count($segments) - 1;

        // Try to find a named route for this path
        $matchedRoute = collect(app('router')->getRoutes()->getRoutes())
            ->first(fn ($r) => '/' . trim($r->uri(), '/') === $path && in_array('GET', $r->methods()));

        $label = $matchedRoute?->defaults['label']
            ?? str($segment)->replace('-', ' ')->title()->toString();

        $href = $isLast ? null : url($path);

        $crumbs[] = ['label' => $label, 'href' => $href];
    }
@endphp

@if(count($crumbs) > 1)
    <nav aria-label="Breadcrumb">
        <ol class="flex flex-wrap items-center gap-1.5 text-sm {{ $dark ? 'text-white/70' : 'text-base-500' }}">
            @foreach($crumbs as $crumb)
                <li class="flex items-center gap-1.5">
                    @if(!$loop->first)
                        <x-heroicon-m-chevron-right class="h-3.5 w-3.5 shrink-0 {{ $dark ? 'text-white/40' : 'text-base-400' }}" aria-hidden="true" />
                    @endif

                    @if($crumb['href'])
                        <a href="{{ $crumb['href'] }}" class="{{ $dark ? 'hover:text-white' : 'hover:text-primary-800' }} transition-colors">
                            {{ $crumb['label'] }}
                        </a>
                    @else
                        <span class="{{ $dark ? 'text-white' : 'text-base-900' }} font-medium" aria-current="page">
                            {{ $crumb['label'] }}
                        </span>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endif
