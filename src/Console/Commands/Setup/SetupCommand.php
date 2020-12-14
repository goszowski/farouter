<?php

namespace Farouter\Console\Commands\Setup;

use Illuminate\Console\Command;
use Farouter\Models\{
    Resources\Resource,
    Nodes\Node,
};

use App\Models\Root;

class SetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'farouter:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Farouter Setup');

        $resource = Resource::create([
            'name' => 'root',
        ]);

        Root::create([
            'is_active' => true,
            'parent_id' => 1,
        ]);
    }
}
