<?php

namespace Farouter\Http\Controllers;

use Illuminate\View\View;
use Farouter\Models\Nodes\Node;

class NodesController extends Controller
{
    public function show(Node $node) : View
    {
        return view('farouter:nodes.show')->with([
            'node' => $node,
        ]);
    }

    public function create(Node $parentNode, Model $model) : View
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function move()
    {
        
    }
}
