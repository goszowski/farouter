<?php

namespace Farouter\Listeners\Resource;

use Farouter\Events\Resource\Created;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Farouter\Services\Stub\Resource;
use Str;

class CreateModelFile
{
    protected Resource $resourceStub;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->resourceStub = new Resource;
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

        $this->resourceStub->process(app_path('Models/' . Str::title($resource->name) . '.php'), [
            'DummyNamespace' => 'App\Models',
            'DummyResource' => Str::title($resource->name),
        ]);
    }
}
