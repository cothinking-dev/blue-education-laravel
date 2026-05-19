<?php

use App\Models\Redirect;

it('redirects requests matching an enabled redirect', function () {
    Redirect::factory()->create([
        'from_path' => '/old-page',
        'to_path' => '/contact',
        'status_code' => 301,
    ]);

    $this->get('/old-page')
        ->assertStatus(301)
        ->assertRedirect('/contact');
});

it('does not redirect when the rule is disabled', function () {
    Redirect::factory()->disabled()->create([
        'from_path' => '/disabled-page',
        'to_path' => '/contact',
    ]);

    $this->get('/disabled-page')->assertNotFound();
});

it('passes through requests with no matching redirect', function () {
    $this->get('/contact')->assertOk();
});

it('records a hit when a redirect fires', function () {
    $redirect = Redirect::factory()->create([
        'from_path' => '/track-me',
        'to_path' => '/contact',
        'hits' => 0,
        'last_hit_at' => null,
    ]);

    $this->get('/track-me');

    $redirect->refresh();

    expect($redirect->hits)->toBe(1)
        ->and($redirect->last_hit_at)->not->toBeNull();
});

it('matches paths case-insensitively and ignores trailing slashes', function () {
    Redirect::factory()->create([
        'from_path' => '/about-us',
        'to_path' => '/about',
    ]);

    $this->get('/About-Us/')->assertRedirect('/about');
});

it('forwards to absolute URLs when configured', function () {
    Redirect::factory()->create([
        'from_path' => '/external',
        'to_path' => 'https://example.com/landing',
    ]);

    $this->get('/external')->assertRedirect('https://example.com/landing');
});

it('honours the configured status code', function () {
    Redirect::factory()->create([
        'from_path' => '/temp',
        'to_path' => '/contact',
        'status_code' => 302,
    ]);

    $this->get('/temp')->assertStatus(302);
});

it('does not intercept POST requests', function () {
    Redirect::factory()->create([
        'from_path' => '/contact',
        'to_path' => '/about',
    ]);

    $response = $this->post('/contact', []);

    expect($response->status())->not->toBe(301);
});
