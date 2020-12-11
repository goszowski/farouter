<?php

namespace Farouter\Events\Control;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Farouter\Models\Resources\Control;

class Created
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Control $control;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Control $control)
    {
        $this->control = $control;
    }
}
