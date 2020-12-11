<?php

namespace Farouter\Listeners\Control;

use Farouter\Events\Control\Created;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Str;

class CreateDatabaseColumn
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
        Schema::table(Str::plural($event->control->resource->name), function (Blueprint $table) use($event) {
            $table->string($event->control->name);
        });
    }
}
