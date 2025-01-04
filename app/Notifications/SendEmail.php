<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendEmail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $name;
    public $subject;
    public $jadwalBimbingan;
    public function __construct($name, $subject, $jadwalBimbingan)
    {
        $this->name = $name;
        $this->subject = $subject;
        $this->jadwalBimbingan = $jadwalBimbingan;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->markdown('gmail.pertemuan', [
                'name' => $this->name,
                'jb' => $this->jadwalBimbingan
            ])
            ->subject($this->subject);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
