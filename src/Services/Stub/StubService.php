<?php

namespace Farouter\Services\Stub;

abstract class StubService {

    protected $baseStubsPath = __DIR__ . '/../../../stubs/';

    public function process(string $destinationPath, array $replaceData)
    {
        $stub = file_get_contents($this->baseStubsPath . $this->source);

        foreach($replaceData as $key=>$value)
        {
            $stub = str_replace($key, $value, $stub);
        }

        file_put_contents($destinationPath, $stub);
    }
}