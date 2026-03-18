<?php

use Illuminate\Support\Facades\Cache;

/*
|--------------------------------------------------------------------------
| Sitemap Tests
|--------------------------------------------------------------------------
|
| Verify sitemap generation discovers routes and excludes dev-only routes.
|
*/

it('generates sitemap with discovered routes', function () {
    $this->artisan('sitemap:generate')->assertSuccessful();

    $xml = Cache::get('sitemap:xml');

    expect($xml)
        ->toContain(route('home'))
        ->toContain(route('contact'))
        ->toContain(route('faq'))
        ->toContain(route('blog.index'));
});

it('excludes showcase from sitemap', function () {
    $this->artisan('sitemap:generate')->assertSuccessful();

    $xml = Cache::get('sitemap:xml');

    expect($xml)->not->toContain(route('showcase'));
});
