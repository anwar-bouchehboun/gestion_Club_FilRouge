<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class badgeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $body;
    public $user;
    // public $reservationData;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $body,$user)
    {
        $this->subject = $subject;
        $this->body = $body;
         $this->user = $user;




    }

    public function build()
    {
       

        return $this->subject($this->subject)
            ->view('client.email.badge')
            ->with([
                'body' => $this->body,
                 'user' => $this->user,

            ]);
    }
}