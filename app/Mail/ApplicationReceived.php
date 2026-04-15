<?php

namespace App\Mail;

use App\Models\CareerApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public CareerApplication $application) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Application — ' . $this->application->role . ' (' . $this->application->name . ')',
            replyTo: [$this->application->email],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.application-received');
    }
}
