<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PartnerMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $partner, $to_email, $role;
    /**
     * Create a new message instance.
     */
    public function __construct($partner, $to_email, $role)
    {
        $this->partner = $partner;
        $this->to_email = $to_email;
        $this->role = $role;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Partner Mail',
            to: $this->to_email
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.partners',
            with: [
                'data' => $this->partner,
                'role' => $this->role
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
