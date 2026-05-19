<?php

use PostHog\Client as PostHogClient;

beforeEach(function () {
    config()->set('posthog.token', 'phc_test_token');
    $this->postHogMock = Mockery::mock(PostHogClient::class);
    $this->app->instance(PostHogClient::class, $this->postHogMock);
});

it('captures a $pageview for a successful HTML GET request', function () {
    $this->postHogMock
        ->shouldReceive('capture')
        ->once()
        ->withArgs(function (array $payload) {
            return $payload['event'] === '$pageview'
                && is_string($payload['distinctId'])
                && strlen($payload['distinctId']) === 64
                && $payload['properties']['server_side'] === true
                && $payload['properties']['$ip'] === null
                && $payload['properties']['$pathname'] === '/contact';
        });

    $this->get('/contact')->assertOk();
});

it('does not capture when no PostHog token is configured', function () {
    config()->set('posthog.token', null);
    $this->postHogMock->shouldNotReceive('capture');

    $this->get('/contact')->assertOk();
});

it('does not capture non-GET requests', function () {
    $this->postHogMock->shouldNotReceive('capture');

    $this->post('/contact', [])->assertStatus(302);
});

it('does not capture non-200 responses', function () {
    $this->postHogMock->shouldNotReceive('capture');

    $this->get('/this-path-does-not-exist')->assertNotFound();
});

it('does not capture excluded admin paths', function () {
    $this->postHogMock->shouldNotReceive('capture');

    $this->get('/admin/login');
});

it('does not capture bot user agents', function () {
    $this->postHogMock->shouldNotReceive('capture');

    $this->withHeaders(['User-Agent' => 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'])
        ->get('/contact')
        ->assertOk();
});

it('reads consent state from the cookie when present', function () {
    $this->postHogMock
        ->shouldReceive('capture')
        ->once()
        ->withArgs(function (array $payload) {
            return $payload['properties']['consent'] === 'granted';
        });

    $this->withUnencryptedCookies(['cookie_consent' => 'granted'])
        ->get('/contact')
        ->assertOk();
});

it('reports unknown consent when no cookie is present', function () {
    $this->postHogMock
        ->shouldReceive('capture')
        ->once()
        ->withArgs(function (array $payload) {
            return $payload['properties']['consent'] === 'unknown';
        });

    $this->get('/contact')->assertOk();
});

it('does not break the request when PostHog capture throws', function () {
    $this->postHogMock
        ->shouldReceive('capture')
        ->once()
        ->andThrow(new RuntimeException('PostHog unreachable'));

    $this->get('/contact')->assertOk();
});

it('rotates the distinct ID across days', function () {
    $captured = [];
    $this->postHogMock
        ->shouldReceive('capture')
        ->andReturnUsing(function (array $payload) use (&$captured) {
            $captured[] = $payload['distinctId'];
        });

    Carbon\Carbon::setTestNow('2026-05-19 10:00:00');
    $this->get('/contact')->assertOk();

    Carbon\Carbon::setTestNow('2026-05-20 10:00:00');
    $this->get('/contact')->assertOk();

    Carbon\Carbon::setTestNow();

    expect($captured)->toHaveCount(2)
        ->and($captured[0])->not->toBe($captured[1]);
});
