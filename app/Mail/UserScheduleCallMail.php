<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserScheduleCallMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name, $email, $date, $timezone, $phone, $slot, $phoneCode, $phoneNumberCode;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $timezone, $phone, $utcDateTime, $phoneCode, $phoneNumberCode)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->date = $utcDateTime->setTimezone($timezone)->format('l, F d, Y');
        $date = $utcDateTime->setTimezone($timezone);
        $this->timezone = '(GMT' . $date->clone()->utcOffset($date->utcOffset())->tzName . ') ' . $date->tzName;
        $this->slot = $date->format('h:i A') . ' - ' . $date->copy()->addMinutes(config('custom.schedule_call.duration'))->format('h:i A');
        $this->phoneCode = $phoneCode;
        $this->phoneNumberCode = $phoneNumberCode;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Your Meeting Request Received - Let\'s Connect and Discuss Your Needs!',
            to: $this->email,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.user.schedule-call',
            with: [
                'name' => $this->name,
                'duration' => config('custom.schedule_call.duration'),
                'date' => $this->date,
                'slot' => $this->slot,
                'timezone' => $this->timezone,
                'email' => $this->email,
                'phone_number' => $this->phone,
                'phoneCode' => $this->phoneCode,
                'phoneNumberCode' => $this->phoneNumberCode,
                'hideBranding' => false,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
