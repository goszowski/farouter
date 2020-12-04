<?php

use Farouter\Http\Controllers\{
    NodesController,
};

Route::group(['prefix'=>'nodes', 'as'=>'nodes.'], function() {

    Route::get('{node}', [NodesController::class, 'show']);

});
