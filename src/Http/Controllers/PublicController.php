<?php

namespace Farouter\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller {

    public function handle(Request $request)
    {
        return \App::call('App\Http\Controllers\TestController@show');
    }
}
