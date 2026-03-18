<?php

use App\Models\Subscriber;

/*
|--------------------------------------------------------------------------
| Newsletter Subscription Tests
|--------------------------------------------------------------------------
|
| Verify newsletter subscription, validation, and duplicate handling.
|
*/

it('subscribes a new email', function () {
    $this->postJson(route('newsletter.subscribe'), ['email' => 'test@example.com'])
        ->assertSuccessful()
        ->assertJson(['success' => true]);

    $this->assertDatabaseHas('subscribers', ['email' => 'test@example.com']);
});

it('handles duplicate email gracefully', function () {
    Subscriber::factory()->create(['email' => 'test@example.com']);

    $this->postJson(route('newsletter.subscribe'), ['email' => 'test@example.com'])
        ->assertSuccessful();

    expect(Subscriber::where('email', 'test@example.com')->count())->toBe(1);
});

it('rejects an invalid email', function () {
    $this->postJson(route('newsletter.subscribe'), ['email' => 'not-an-email'])
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['email']);
});

it('rejects a missing email', function () {
    $this->postJson(route('newsletter.subscribe'), [])
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['email']);
});
