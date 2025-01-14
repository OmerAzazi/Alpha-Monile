<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PlaceOrderMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $orderinfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderinfo)
    {
        $this->orderinfo = $orderinfo;
    }

    /**
     * Build the message
     * 
     * @return $this
     */
    public function build(){
        $subject = "Order Placed Successfully, Thank you";
        return $this->subject($subject)
                    ->view("home.mail-invoice");
    }

}
