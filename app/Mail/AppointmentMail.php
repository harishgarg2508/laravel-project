<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The appointment data.
     *
     * @var array
     */
    public $appointmentData;

    /**
     * Create a new message instance.
     *
     * @param  array  $appointmentData
     * @return void
     */
    public function __construct(array $appointmentData)
    {
        $this->appointmentData = $appointmentData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Dental Appointment Request')
                    ->markdown('emails.appointment');
    }
}