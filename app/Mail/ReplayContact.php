<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplayContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $contactMessage;
    protected $replayMessage;
    public function __construct($contactMessage,$replayMessage)
    {
        //
        $this->contactMessage = $contactMessage;
        $this->replayMessage = $replayMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->to($this->contactMessage->email)->subject('CAD Replay Message')->view('back-end.mail.replay-message',
            ['contactMessage'=>$this->contactMessage,'replayMessage'=>$this->replayMessage]);
    }
}
