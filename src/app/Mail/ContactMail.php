<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    /**
     * Create a new message instance.
     *
     * @param array $contactData
     */
    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('お問い合わせのお知らせ')
            ->view('emails.contact')
            ->with([
                'contactData' => $this->contactData,
            ]);
    }
}
