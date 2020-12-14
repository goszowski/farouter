<?php

namespace Farouter\Listeners\Resource;

use Farouter\Events\Resource\Created;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Str;

class CreateResourceTable
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

        Schema::create(Str::plural($resource->name), function (Blueprint $table) {
            $table->id();
            $table->foreignId('node_id')->index()->constrained();
            $table->timestamps();
        });
    }
}
