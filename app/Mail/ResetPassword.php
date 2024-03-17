<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $verification_link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($verification_link)
    {
        $this->verification_link = $verification_link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Reset Password - NOUN")->view('layouts.reset-password');
    }
}
