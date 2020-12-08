<?php

namespace Farouter\Http\Controllers;

use Illuminate\View\View;

class ResourcesController extends Controller
{
    public function index() : View
    {
        return view('farouter::resources.index');
    }

    public function create() : View
    {
        return view('farouter::resources.create');
    }
}
