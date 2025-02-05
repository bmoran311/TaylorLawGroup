<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Message from TaylorTaxLaw.com'
        );
    }

    /**
     * Get the content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with: ['data' => $this->data]
        );
    }
}
