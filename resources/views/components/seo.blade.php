@props([
    'title' => null,
    'description' => null,
    'robots' => null,
    'ogType' => null,
    'ogImage' => null,
    'ogImageWidth' => null,
    'ogImageHeight' => null,
    'canonical' => null,
    'noSuffix' => false,
    'jsonLd' => null,
    'articlePublishedTime' => null,
    'articleModifiedTime' => null,
])

@php
    $defaults = config('seo.defaults');
    $og = config('seo.og');
    $twitter = config('seo.twitter');

    $pageTitle = $title
        ? ($noSuffix ? $title : $title . $defaults['title_suffix'])
        : $defaults['title'];
    $pageDescription = $description ?? $defaults['description'];
    $pageRobots = $robots ?? $defaults['robots'];
    $pageOgType = $ogType ?? $og['type'];
    $pageOgImage = $ogImage ?? route('og-image', ['path' => trim(request()->path(), '/')]);
    $pageCanonical = $canonical ?? url()->current();
@endphp

<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}">
<meta name="author" content="{{ $defaults['author'] }}">
<meta name="robots" content="{{ $pageRobots }}">
<link rel="canonical" href="{{ $pageCanonical }}">

{{-- Open Graph --}}
<meta property="og:title" content="{{ $title ?? $defaults['title'] }}">
<meta property="og:description" content="{{ $pageDescription }}">
<meta property="og:type" content="{{ $pageOgType }}">
<meta property="og:url" content="{{ $pageCanonical }}">
<meta property="og:site_name" content="{{ $og['site_name'] }}">
<meta property="og:locale" content="{{ $og['locale'] }}">
<meta property="og:image" content="{{ url($pageOgImage) }}">
<meta property="og:image:alt" content="{{ $title ?? $defaults['title'] }}">
<meta property="og:image:width" content="{{ $ogImageWidth ?? $og['image_width'] }}">
<meta property="og:image:height" content="{{ $ogImageHeight ?? $og['image_height'] }}">
@if($articlePublishedTime)
<meta property="article:published_time" content="{{ $articlePublishedTime }}">
@endif
@if($articleModifiedTime)
<meta property="article:modified_time" content="{{ $articleModifiedTime }}">
@endif

{{-- Twitter --}}
<meta name="twitter:card" content="{{ $twitter['card'] }}">
@if($twitter['site'])
<meta name="twitter:site" content="{{ $twitter['site'] }}">
@endif
<meta name="twitter:title" content="{{ $title ?? $defaults['title'] }}">
<meta name="twitter:description" content="{{ $pageDescription }}">
<meta name="twitter:image" content="{{ url($pageOgImage) }}">

{{-- JSON-LD: Organization (on all pages) --}}
@php
    $org = config('seo.organization');
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'EducationalOrganization',
        'name' => $org['name'],
        'url' => $org['url'],
        'logo' => url($org['logo']),
        'telephone' => $org['phone'],
        'email' => $org['email'],
        'foundingDate' => $org['founding_year'] . '-01-01',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $org['address']['street'],
            'addressLocality' => $org['address']['city'],
            'addressRegion' => $org['address']['state'],
            'postalCode' => $org['address']['postal_code'],
            'addressCountry' => $org['address']['country'],
        ],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>

{{-- JSON-LD: BreadcrumbList --}}
@php
    $segments = explode('/', trim(request()->path(), '/'));
    $breadcrumbItems = [['name' => 'Home', 'url' => url('/')]];

    if ($segments !== ['']) {
        $path = '';
        foreach ($segments as $segment) {
            $path .= '/' . $segment;
            $matchedRoute = collect(app('router')->getRoutes()->getRoutes())
                ->first(function ($r) use ($path) {
                    if (!in_array('GET', $r->methods())) {
                        return false;
                    }
                    $routePath = '/' . trim($r->uri(), '/');
                    // Exact match
                    if ($routePath === $path) {
                        return true;
                    }
                    // Match parameterized routes by replacing {param} segments with the actual segment
                    $routeSegments = explode('/', trim($r->uri(), '/'));
                    $pathSegments = explode('/', trim($path, '/'));
                    if (count($routeSegments) !== count($pathSegments)) {
                        return false;
                    }
                    foreach ($routeSegments as $i => $routeSegment) {
                        if (str_starts_with($routeSegment, '{')) {
                            continue;
                        }
                        if ($routeSegment !== $pathSegments[$i]) {
                            return false;
                        }
                    }
                    return true;
                });
            $label = $matchedRoute?->defaults['label']
                ?? str($segment)->replace('-', ' ')->title()->toString();
            $breadcrumbItems[] = ['name' => $label, 'url' => url($path)];
        }
    }

    $breadcrumbSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => collect($breadcrumbItems)->map(fn ($item, $i) => [
            '@type' => 'ListItem',
            'position' => $i + 1,
            'name' => $item['name'],
            'item' => $item['url'],
        ])->all(),
    ];
@endphp
@if(count($breadcrumbItems) > 1)
<script type="application/ld+json">{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>
@endif

{{-- Optional additional JSON-LD --}}
@if($jsonLd)
<script type="application/ld+json">{!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>
@endif
