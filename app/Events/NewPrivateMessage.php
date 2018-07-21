<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\PrivateMessage;

class NewPrivateMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    public function __construct(PrivateMessage $message)
    {
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('messages.' . $this->message->to_user_id);
    }

    public function broadcastWith()
    {
        $this->message->load('fromUser');

        return [
            'message' => [
                'from_user_id' => $this->message->from_user_id,
                'to_user_id' => $this->message->to_user_id,
                'message' => $this->message->message,
                'created_at' => $this->message->created_at->timestamp,
                'updated_at' => $this->message->updated_at->timestamp,
                'from_user' => $this->message->fromUser,
            ]
        ];
    }
}
