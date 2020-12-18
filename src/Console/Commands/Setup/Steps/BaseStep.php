<?php

namespace Farouter\Console\Commands\Setup\Steps;

abstract class BaseStep {

    protected string $message;

    abstract public function handle();
}