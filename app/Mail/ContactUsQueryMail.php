<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ContactUsQueryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $queryData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($queryData)
    {
        $this->queryData = $queryData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Us Query')
                    ->view('emails.contact_us_query');
    }
}
