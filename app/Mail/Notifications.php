<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notifications extends Mailable
{
    use Queueable, SerializesModels;
    public $infos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($infos_comp)
    {
        $this->infos = $infos_comp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Notifications - Nounloaded")->view('layouts.notifications');
    }
}
