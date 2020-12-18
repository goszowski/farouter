<?php

namespace Farouter\Console\Commands\Make;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Exception\InvalidArgumentException;

class ResourceMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'f:make:resource {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Farouter Resource';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Resource';

    /**
     * The name of class being generated.
     *
     * @var string
     */
    private $resourceClass;

    public function fire()
    {
        $this->setResourceClass();

        $path = $this->getPath($this->resourceClass);

        if ($this->alreadyExists($this->getNameInput())) {
            $this->error($this->type.' already exists!');

            return false;
        }

        $this->makeDirectory($path);

        $this->files->put($path, $this->buildClass($this->resourceClass));

        $this->info($this->type.' created successfully.');
        $this->line("<info>Created Repository :</info> $this->resourceClass");
    }

    /**
     * Set repository class name
     *
     * @return  void
     */
    private function setResourceClass()
    {
        $this->resourceClass = $this->parseName(ucwords(strtolower($this->argument('name'))));

        return $this;
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        if(!$this->argument('name')){
            throw new InvalidArgumentException("Missing required argument model name");
        }

        $stub = parent::replaceClass($stub, $name);

        return str_replace('DummyResource', $this->resourceClass, $stub);
    }

    /**
     * 
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../../../../stubs/Resource.stub';
    }
}
