<?php

namespace Farouter\Listeners\Resource;

use Farouter\Events\Resource\Deleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Str;

class DeleteResourceTable
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
     * @param  Deleted  $event
     * @return void
     */
    public function handle(Deleted $event)
    {
        $resource = $event->getResource();
        Schema::dropIfExists(Str::plural($resource->name));
    }
}
