<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PasswordRecovery extends Mailable
{
    use Queueable, SerializesModels;

    public $dynamics = [];

    /**
     * Create a new message instance.
     *
     * @return void
     * @param array $dynamics
     */
    public function __construct(array $dynamics)
    {
        $this->dynamics = $dynamics;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('engine@kyese.com')
            ->view('mails.simple')->with($this->dynamics);
    }
}
