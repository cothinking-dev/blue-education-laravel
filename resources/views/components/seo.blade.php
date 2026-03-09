@props([
    'title' => null,
    'description' => null,
    'keywords' => null,
    'robots' => null,
    'ogType' => null,
    'ogImage' => null,
    'canonical' => null,
    'noSuffix' => false,
    'jsonLd' => null,
])

@php
    $defaults = config('seo.defaults');
    $og = config('seo.og');
    $twitter = config('seo.twitter');

    $pageTitle = $title
        ? ($noSuffix ? $title : $title . $defaults['title_suffix'])
        : $defaults['title'];
    $pageDescription = $description ?? $defaults['description'];
    $pageKeywords = $keywords ?? $defaults['keywords'];
    $pageRobots = $robots ?? $defaults['robots'];
    $pageOgType = $ogType ?? $og['type'];
    $pageOgImage = $ogImage ?? $og['image'];
    $pageCanonical = $canonical ?? url()->current();
@endphp

<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}">
<meta name="keywords" content="{{ $pageKeywords }}">
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
<meta property="og:image:width" content="{{ $og['image_width'] }}">
<meta property="og:image:height" content="{{ $og['image_height'] }}">

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
        'foundingDate' => (string) $org['founding_year'],
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

{{-- Optional additional JSON-LD --}}
@if($jsonLd)
<script type="application/ld+json">{!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>
@endif
