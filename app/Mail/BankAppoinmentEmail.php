<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BankAppoinmentEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $serviceAdvisor = null;
    public function __construct($serviceAdvisor)
    {
        $this->serviceAdvisor = $serviceAdvisor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $serviceAdvisor = $this->serviceAdvisor;
        return $this->subject('Minggu Saham Digital 2021: Pelantikan!')->view('emails.bank_appoinment_email',compact('serviceAdvisor'));
    }
}
