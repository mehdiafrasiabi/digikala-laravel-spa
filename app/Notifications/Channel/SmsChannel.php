<?php

namespace App\Notifications\Channel;

use Ghasedak\GhasedakApi;
use Illuminate\Notifications\Notification;

class SmsChannel
{

    public function send($notifiable,Notification $notification)
    {
        $message = $notification->toSms($notifiable);
        $api = new GhasedakApi('3860d62b5a56043328b1cf65543db8348096ec2376ce2a385ac48fd87231c2afuHhfxMY8JGJpVm8w');
        $response = $api->Verify(
            $message['mobile'],  // receptor// 1 for text message and 2 for voice message
            $message['template'],  // name of the template which you've created in you account
            $message['parameters'],       // parameters (supporting up to 10 parameters)
        );
        if ($response->result->code == 200) {
            return true;
        }else{
            return false;
        }
    }

}
