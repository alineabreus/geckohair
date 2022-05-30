<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ForgotSendMailFired
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $token = $event->token;
        $user = User::query()->where('id', $event->user)->first();

        $data = ['user' => $user, 'token' => $token];

        Mail::send('mails.forgot', ['data1'=>$data], function($message) use ($data) {
            $message->from(getenv('MAIL_FROM_ADDRESS'), getenv('MAIL_FROM_NAME'));
            $message->to($data['user']['email']);
            $message->subject('Chegou sua nova senha!');
        });
    }
}
