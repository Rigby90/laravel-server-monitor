<?php

namespace Spatie\ServerMonitor\Notifications;

use Illuminate\Notifications\Notifiable as NotifiableTrait;

class Notifiable
{
    use NotifiableTrait;

    /**
     * @return string|null
     */
    public function routeNotificationForMail()
    {
        return config('laravel-uptime-monitor.notifications.mail.to');
    }

    /**
     * @return string|null
     */
    public function routeNotificationForSlack()
    {
        return config('server-monitor.notifications.slack.webhook_url');
    }

    public function getKey(): string
    {
        return static::class;
    }
}
