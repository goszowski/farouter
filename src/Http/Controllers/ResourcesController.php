<?php

namespace Farouter\Http\Controllers;

use Farouter\Http\Requests\Resources\{
    StoreRequest,
};
use Farouter\Models\Resources\Resource;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ResourcesController extends Controller
{
    public function index() : View
    {
        $resources = Resource::orderBy('id', 'desc')->paginate();

        return view('farouter::resources.index', compact('resources'));
    }

    public function create() : View
    {
        return view('farouter::resources.create');
    }

    public function store(StoreRequest $request) : RedirectResponse
    {
        $resource = Resource::create([
            'name' => $request->name,
        ]);

        return redirect()->route('farouter.resources.index');
    }

    public function delete(Resource $resource)
    {
        $resource->delete();

        return redirect()->route('farouter.resources.index');
    }
}
