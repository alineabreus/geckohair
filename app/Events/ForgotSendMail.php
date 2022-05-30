<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ForgotSendMail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $token;
    public $source;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $token, $source)
    {
        $this->user = $user;
        $this->token = $token;
        $this->source = $source;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return [];
    }
}
