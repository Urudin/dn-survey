<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    /**
     * Create a new message instance.
     */
    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from(config('mail.from.address')) // Alapértelmezett küldő
        ->to(env('SALES_EMAIL')) // Címzett
        ->subject('Új kapcsolatfelvételi üzenet')
            ->view('emails.contact-form') // Blade nézet
            ->with(['contactData' => $this->contactData]);
    }
}
