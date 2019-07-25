<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplicationReplay extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $application;
    protected $replayMessage;
    public function __construct($application,$replayMessage)
    {
        //
        $this->application=$application;
        $this->replayMessage = $replayMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->to($this->application->email)->subject('CAD Application Message')->view('back-end.mail.application-replay',
            ['application'=>$this->application,'replayMessage'=>$this->replayMessage]);

    }
}
