<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class RoleChangeRequestNotification extends Notification
{
    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Role Change Request')
            ->line('User ' . auth()->user()->name . ' has requested to be an artist.')
            ->action('View Dashboard', url('/dashboard'));
    }
}

