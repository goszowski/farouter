<?php

namespace Farouter\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $type;

    public string $tag;

    public function __construct(string $type = 'button')
    {
        $this->type = $type;
        $this->tag = $type == 'link' ? 'a' : 'button';
    }

    public function render()
    {
        return view('farouter::components.button');
    }
}
