<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReserveEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $body;
    // public $user;
    public $reservationData;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $body, $reservationData)
    {
        $this->subject = $subject;
        $this->body = $body;
        // $this->user = $user;
        $this->reservationData = $reservationData;



    }

    public function build()
    {

        return $this->subject($this->subject)
            ->view('client.email.ticket')
            ->with([
                'body' => $this->body,
                // 'user' => $this->user,
                'reservationData' => $this->reservationData,

            ]);
    }
}