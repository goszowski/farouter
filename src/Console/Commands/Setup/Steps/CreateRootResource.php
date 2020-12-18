<?php

namespace Farouter\Console\Commands\Setup\Steps;

use Farouter\Models\Resources\Resource;

class CreateRootResource extends BaseStep {

    protected string $message = 'Creating Root Resource';

    public function handle()
    {
        Resource::create([
            'name' => 'root',
        ]);
    }
}