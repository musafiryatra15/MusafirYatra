<?php

namespace Musafir\Shop\Mail\Customer\GDPR;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Musafir\Admin\Mail\Mailable;
use Musafir\GDPR\Contracts\GDPRDataRequest;

class StatusUpdateNotification extends Mailable
{
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public GDPRDataRequest $gdprRequest) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            to: [
                new Address($this->gdprRequest->email),
            ],
            subject: trans('shop::app.emails.customers.gdpr.status-update.subject')
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'shop::emails.customers.gdpr.status-update-notification',
        );
    }
}
