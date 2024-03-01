<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminScheduleCallMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name, $email, $date, $phone, $timezone, $description, $slot, $phoneCode, $phoneNumberCode;
    /**
     * Create a new user_message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $description, $phone, $utcDateTime, $phoneCode, $phoneNumberCode)
    {
        $timezone = config('custom.schedule_call.timezone');
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->description = $description;
        $this->date = $utcDateTime->setTimezone($timezone)->format('l, F d, Y');
        $date = $utcDateTime->setTimezone($timezone);
        $this->timezone = '(GMT' . $date->clone()->utcOffset($date->utcOffset())->tzName . ') ' . $date->tzName;
        $this->slot = $date->format('h:i A') . ' - ' . $date->copy()->addMinutes(config('custom.schedule_call.duration'))->format('h:i A');
        $this->phoneCode = $phoneCode;
        $this->phoneNumberCode = $phoneNumberCode;
    }

    /**
     * Get the user_message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        $emails = config('custom.admin.calendar');
        return new Envelope(
            subject: 'Scheduled Call Appointment',
            to: $emails,
        );
    }

    /**
     * Get the user_message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.admin.schedule-call',
            with: [
                'name' => $this->name,
                'duration' => config('custom.schedule_call.duration'),
                'date' => $this->date,
                'slot' => $this->slot,
                'timezone' => $this->timezone,
                'email' => $this->email,
                'phone' => $this->phone,
                'description' => $this->description,
                'phoneCode' => $this->phoneCode,
                'phoneNumberCode' => $this->phoneNumberCode,
                'hideBranding' => true,
            ]
        );
    }

    /**
     * Get the attachments for the user_message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
