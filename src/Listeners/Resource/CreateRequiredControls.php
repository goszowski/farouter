<?php

namespace Farouter\Listeners\Resource;

use Farouter\Events\Resource\Created;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Farouter\Models\Resources\Control;

class CreateRequiredControls
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
     * @param  Created  $event
     * @return void
     */
    public function handle(Created $event)
    {
        $resource = $event->getResource();

        Control::create([
            'resource_id' => $resource->id,
            'name' => 'is_active',
        ]);
    }
}
