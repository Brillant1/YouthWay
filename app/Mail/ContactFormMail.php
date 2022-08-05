<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Expr\Cast\Array_;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $detailMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $detailMessage)
    {
        $this->detailMessage = $detailMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */


        public function build()
    {
        return $this->subject('Message d\'un utilisateur depuis le site YouthWay')->view('contactMail');
    }

}
