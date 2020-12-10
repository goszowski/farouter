<?php

namespace Farouter\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public string $pretitle;

    public string $title;

    public function __construct(string $pretitle, string $title)
    {
        $this->pretitle = $pretitle;
        $this->title = $title;
    }

    public function render()
    {
        return view('farouter::components.page-header');
    }
}
