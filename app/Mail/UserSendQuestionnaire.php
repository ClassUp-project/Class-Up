<?php

namespace App\Mail;

use App\Questionnaire;
use mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;



class userSendQuestionnaire extends Mailable
{
    use Queueable, SerializesModels;

    public $questionnaire;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Questionnaire $questionnaire)
    {
           $this->questionnaire = $questionnaire;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.userSendQuestionnaire');
    }
}
