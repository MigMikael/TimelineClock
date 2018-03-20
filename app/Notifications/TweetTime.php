<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Notifications\Notification;
use NotificationChannels\Twitter\Exceptions\CouldNotSendNotification;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;

class TweetTime extends Notification
{
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TwitterChannel::class];
    }

    public function toTwitter($notifiable)
    {
        $timeStr = Carbon::now()->format('H:i');
        $split_time = explode(':', $timeStr);
        $hour = $split_time[0];
        $bigText = $this->genBigText($hour);

        try {
            return new TwitterStatusUpdate($bigText);
        } catch (CouldNotSendNotification $e) {

        }
    }

    public function genBigText($str)
    {
        if ($str == '01'){
            return '▄▀ ▀▄ ▄█─ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ ─█─ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ ▄█▄ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '02'){
            return '▄▀ ▀▄ █▀█ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ ─▄▀ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ █▄▄ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '03'){
            return '▄▀ ▀▄ █▀▀█ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ ──▀▄ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ █▄▄█ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '04'){
            return '▄▀ ▀▄ ─█▀█─ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ █▄▄█▄ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ ───█─ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '05'){
            return '▄▀ ▀▄ █▀▀ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ ▀▀▄ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ ▄▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '06'){
            return '▄▀ ▀▄ ▄▀▀▄ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ █▄▄─ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ ▀▄▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '07'){
            return '▄▀ ▀▄ ▀▀▀█ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ ──█─ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ ─▐▌─ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '08'){
            return '▄▀ ▀▄ ▄▀▀▄ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ ▄▀▀▄ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ ▀▄▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '09'){
            return '▄▀ ▀▄ ▄▀▀▄ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ ▀▄▄█ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ ─▄▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '10'){
            return '▄█─ ▄▀ ▀▄ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ █─ ─█ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ ▀▄ ▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '11'){
            return '▄█─ ▄█─ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ ─█─ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ ▄█▄ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '12'){
            return '▄█─ █▀█ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ ─▄▀ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ █▄▄ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '13'){
            return '▄█─ █▀▀█ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ ──▀▄ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ █▄▄█ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '14'){
            return '▄█─ ─█▀█─ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ █▄▄█▄ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ ───█─ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '15'){
            return '▄█─ █▀▀ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ ▀▀▄ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ ▄▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '16'){
            return '▄█─ ▄▀▀▄ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ █▄▄─ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ ▀▄▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '17'){
            return '▄█─ ▀▀▀█ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ ──█─ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ ─▐▌─ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '18'){
            return '▄█─ ▄▀▀▄ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ ▄▀▀▄ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ ▀▄▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '19'){
            return '▄█─ ▄▀▀▄ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─█─ ▀▄▄█ 　 ─ 　 █─ ─█ █─ ─█ 
▄█▄ ─▄▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '20'){
            return '█▀█ ▄▀ ▀▄ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─▄▀ █─ ─█ 　 ─ 　 █─ ─█ █─ ─█ 
█▄▄ ▀▄ ▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '21'){
            return '█▀█ ▄█─ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─▄▀ ─█─ 　 ─ 　 █─ ─█ █─ ─█ 
█▄▄ ▄█▄ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '22'){
            return '█▀█ █▀█ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─▄▀ ─▄▀ 　 ─ 　 █─ ─█ █─ ─█ 
█▄▄ █▄▄ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        elseif ($str == '23'){
            return '█▀█ █▀▀█ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
─▄▀ ──▀▄ 　 ─ 　 █─ ─█ █─ ─█ 
█▄▄ █▄▄█ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
        else{
            return '▄▀ ▀▄ ▄▀ ▀▄ 　 ▄ 　 ▄▀ ▀▄ ▄▀ ▀▄ 
█─ ─█ █─ ─█ 　 ─ 　 █─ ─█ █─ ─█ 
▀▄ ▄▀ ▀▄ ▄▀ 　 ▀ 　 ▀▄ ▄▀ ▀▄ ▄▀ 
';
        }
    }
}
