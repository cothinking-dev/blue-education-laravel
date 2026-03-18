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
        'preferred_language' => 'English',
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

it('rejects an invalid preferred language', function () {
    $this->postJson(route('contact.submit'), [
        'full_name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'preferred_language' => 'Klingon',
    ])->assertUnprocessable()
        ->assertJsonValidationErrors(['preferred_language']);
});

it('sends an email notification on valid enquiry', function () {
    Mail::fake();

    $this->postJson(route('contact.submit'), [
        'full_name' => 'Jane Doe',
        'email' => 'jane@example.com',
    ])->assertSuccessful();

    Mail::assertSent(EnquiryReceived::class, function ($mail) {
        return $mail->hasTo(config('seo.organization.email'));
    });
});
