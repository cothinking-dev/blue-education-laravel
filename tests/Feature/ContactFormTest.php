<?php

use App\Mail\EnquiryReceived;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Contact Form Tests
|--------------------------------------------------------------------------
|
| Verify form submission, validation, and database storage.
|
*/

it('stores a valid enquiry', function () {
    $payload = [
        'full_name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'phone' => '+61 400 000 000',
        'country' => 'Australia',
        'enquiry_type' => 'Education',
        'message' => 'I would like more information about studying in Perth.',
    ];

    $this->postJson(route('contact.submit'), $payload)
        ->assertSuccessful()
        ->assertJson(['success' => true]);

    $this->assertDatabaseHas('enquiries', [
        'full_name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'enquiry_type' => 'Education',
    ]);
});

it('stores a minimal enquiry with only required fields', function () {
    $payload = [
        'full_name' => 'Min User',
        'email' => 'min@example.com',
    ];

    $this->postJson(route('contact.submit'), $payload)
        ->assertSuccessful();

    $this->assertDatabaseHas('enquiries', [
        'full_name' => 'Min User',
        'email' => 'min@example.com',
    ]);
});

it('rejects an enquiry without a full name', function () {
    $this->postJson(route('contact.submit'), [
        'email' => 'jane@example.com',
    ])->assertUnprocessable()
        ->assertJsonValidationErrors(['full_name']);
});

it('rejects an enquiry without an email', function () {
    $this->postJson(route('contact.submit'), [
        'full_name' => 'Jane Doe',
    ])->assertUnprocessable()
        ->assertJsonValidationErrors(['email']);
});

it('rejects an invalid email', function () {
    $this->postJson(route('contact.submit'), [
        'full_name' => 'Jane Doe',
        'email' => 'not-an-email',
    ])->assertUnprocessable()
        ->assertJsonValidationErrors(['email']);
});

it('rejects an invalid enquiry type', function () {
    $this->postJson(route('contact.submit'), [
        'full_name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'enquiry_type' => 'Invalid Type',
    ])->assertUnprocessable()
        ->assertJsonValidationErrors(['enquiry_type']);
});

it('sends an email notification on valid enquiry', function () {
    Mail::fake();

    $this->postJson(route('contact.submit'), [
        'full_name' => 'Jane Doe',
        'email' => 'jane@example.com',
    ])->assertSuccessful();

    Mail::assertQueued(EnquiryReceived::class, function ($mail) {
        return $mail->hasTo(config('seo.organization.email'));
    });
});

it('rejects submissions with honeypot field filled', function () {
    $this->postJson(route('contact.submit'), [
        'full_name' => 'Bot User',
        'email' => 'bot@example.com',
        'website' => 'http://spam.com',
    ])->assertUnprocessable()
        ->assertJsonValidationErrors('website');
});

it('rate limits contact form submissions', function () {
    for ($i = 0; $i < 5; $i++) {
        $this->postJson(route('contact.submit'), [
            'full_name' => 'Test',
            'email' => "test{$i}@example.com",
        ])->assertSuccessful();
    }

    $this->postJson(route('contact.submit'), [
        'full_name' => 'Test',
        'email' => 'test6@example.com',
    ])->assertTooManyRequests();
});
