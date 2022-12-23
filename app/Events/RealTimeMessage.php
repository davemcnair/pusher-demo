<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RealTimeMessage implements ShouldBroadcastNow
{
    use
        Dispatchable,
        InteractsWithSockets,
        SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(public string $message)
    {

    }

    public function broadcastOn(): Channel
    {
        return new Channel('my-events');
    }
}

