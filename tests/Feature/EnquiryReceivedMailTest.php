<?php

use App\Mail\EnquiryReceived;
use App\Models\Enquiry;

/*
|--------------------------------------------------------------------------
| Enquiry Received Mailable Tests
|--------------------------------------------------------------------------
|
| Verify the enquiry notification email contains correct content.
|
*/

it('includes enquiry details in the email', function () {
    $enquiry = Enquiry::factory()->create([
        'full_name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    $mailable = new EnquiryReceived($enquiry);

    $mailable->assertSeeInHtml('Test User');
    $mailable->assertSeeInHtml('test@example.com');
});

it('has the correct subject line', function () {
    $enquiry = Enquiry::factory()->create(['full_name' => 'Jane Smith']);

    $mailable = new EnquiryReceived($enquiry);

    $mailable->assertHasSubject('New Enquiry from Jane Smith');
});
