<?php

namespace App\Mail;

use App\Models\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryConfirmation extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(public Enquiry $enquiry) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "We've received your enquiry — Blue Education",
            to: [new Address($this->enquiry->email, $this->enquiry->full_name)],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.enquiry-confirmation',
            with: [
                'firstName' => $this->firstName(),
            ],
        );
    }

    private function firstName(): string
    {
        $first = trim(strtok($this->enquiry->full_name, ' ') ?: '');

        return $first !== '' ? $first : $this->enquiry->full_name;
    }
}
