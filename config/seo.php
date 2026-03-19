<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default SEO Settings
    |--------------------------------------------------------------------------
    |
    | These defaults are used on every page unless overridden by passing
    | values to the <x-seo> component or via the page's view data.
    |
    */

    'defaults' => [
        'title' => env('APP_NAME', 'Blue Education'),
        'title_suffix' => ' — Blue Education',
        'description' => 'Independent education, career, and migration advice from Perth, Western Australia; Since 1998.',
        'author' => 'Blue Education Pty Ltd',
        'robots' => 'index, follow',
    ],

    /*
    |--------------------------------------------------------------------------
    | Open Graph Defaults
    |--------------------------------------------------------------------------
    */

    'og' => [
        'type' => 'website',
        'site_name' => 'Blue Education',
        'locale' => 'en_AU',
        'image' => '/brand/logo-og.png',
        'image_width' => 1200,
        'image_height' => 630,
    ],

    /*
    |--------------------------------------------------------------------------
    | Twitter Card Defaults
    |--------------------------------------------------------------------------
    */

    'twitter' => [
        'card' => 'summary_large_image',
        'site' => env('TWITTER_HANDLE', '@BlueEducationAU'),
    ],

    /*
    |--------------------------------------------------------------------------
    | JSON-LD Organization Schema
    |--------------------------------------------------------------------------
    */

    'organization' => [
        'name' => 'Blue Education Pty Ltd',
        'url' => env('APP_URL', 'https://blueeducation.com.au'),
        'logo' => '/brand/logo.png',
        'address' => [
            'street' => '33 Barrack St, GF Unit 2',
            'city' => 'Perth',
            'state' => 'WA',
            'postal_code' => '6000',
            'country' => 'AU',
        ],
        'phone' => '+61 8 6381 0030',
        'phone_mobile' => '+61 411 708 899',
        'phone_national' => '1300 040 696',
        'email' => 'info@blueeducation.com.au',
        'founding_year' => 1998,
        'whatsapp' => env('WHATSAPP_NUMBER', '61411708899'),
    ],

];
