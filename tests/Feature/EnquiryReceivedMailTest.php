<?php

use App\Mail\EnquiryConfirmation;
use App\Mail\EnquiryReceived;
use App\Models\Enquiry;

/*
|--------------------------------------------------------------------------
| Enquiry Mail Tests
|--------------------------------------------------------------------------
|
| Verify both the internal-notification email (EnquiryReceived) and the
| user-facing confirmation email (EnquiryConfirmation) build with the
| right recipients, subject, and content.
|
*/

it('includes enquiry details in the staff notification', function () {
    $enquiry = Enquiry::factory()->create([
        'full_name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    $mailable = new EnquiryReceived($enquiry);

    $mailable->assertSeeInHtml('Test User');
    $mailable->assertSeeInHtml('test@example.com');
});

it('has the correct subject line on the staff notification', function () {
    $enquiry = Enquiry::factory()->create(['full_name' => 'Jane Smith']);

    $mailable = new EnquiryReceived($enquiry);

    $mailable->assertHasSubject('New Enquiry from Jane Smith');
});

it('addresses the staff notification to the configured recipient + cc list', function () {
    config()->set('seo.enquiry.recipient', 'sonia@example.com');
    config()->set('seo.enquiry.cc', ['info@example.com', 'jotham@example.com']);

    $mailable = new EnquiryReceived(Enquiry::factory()->create());

    $mailable
        ->assertTo('sonia@example.com')
        ->assertHasCc('info@example.com')
        ->assertHasCc('jotham@example.com');
});

it('sets the reply-to on the staff notification to the enquirer', function () {
    $enquiry = Enquiry::factory()->create([
        'full_name' => 'Jane Doe',
        'email' => 'jane@example.com',
    ]);

    (new EnquiryReceived($enquiry))->assertHasReplyTo('jane@example.com');
});

it('sends the user confirmation to the enquirer', function () {
    $enquiry = Enquiry::factory()->create([
        'full_name' => 'Jane Doe',
        'email' => 'jane@example.com',
    ]);

    (new EnquiryConfirmation($enquiry))->assertTo('jane@example.com');
});

it('greets the enquirer by first name in the confirmation', function () {
    $enquiry = Enquiry::factory()->create(['full_name' => 'Jane Smith Doe']);

    (new EnquiryConfirmation($enquiry))->assertSeeInHtml('Hi Jane,');
});

it('falls back to the full name when no spaces are present', function () {
    $enquiry = Enquiry::factory()->create(['full_name' => 'Madonna']);

    (new EnquiryConfirmation($enquiry))->assertSeeInHtml('Hi Madonna,');
});

it('uses an appropriate subject for the user confirmation', function () {
    (new EnquiryConfirmation(Enquiry::factory()->create()))
        ->assertHasSubject("We've received your enquiry — Blue Education");
});
