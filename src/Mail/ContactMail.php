<?php

namespace Sumanraj\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $fullname;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullname, $message)
    {
        $this->fullname = $fullname;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@gingerbd.com', 'Ginger BD')
            ->subject('Contact Feedback')
            ->markdown('contact::contact.email')->with(['fullname'=> $this->fullname, 'message'=>$this->message]);
    }
}
