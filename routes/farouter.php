<?php

use Farouter\Http\Controllers\{
    NodesController,
    ResourcesController,
    FieldsController,
};

Route::group(['prefix'=>config('farouter.admin.prefix'), 'middleware'=>['web', 'filter-if-pjax'], 'as'=>'farouter.'], function() {

    Route::group(['prefix'=>'resources', 'as'=>'resources.'], function() {

        Route::get('/', [ResourcesController::class, 'index'])->name('index');
        Route::get('/create', [ResourcesController::class, 'create'])->name('create');
        Route::post('/', [ResourcesController::class, 'store'])->name('store');
        Route::get('/{resource}', [ResourcesController::class, 'edit'])->name('edit');
        Route::patch('/{resource}', [ResourcesController::class, 'update'])->name('update');
        Route::delete('/{resource}', [ResourcesController::class, 'delete'])->name('delete');

        Route::group(['prefix'=>'{resource}'], function() {
            
            // Fields
            Route::group(['prefix'=>'fields', 'as'=>'fields.'], function() {
                Route::get('/', [FieldsController::class, 'index'])->name('index');
                Route::get('/create', [FieldsController::class, 'create'])->name('create');
                Route::post('/', [FieldsController::class, 'store'])->name('store');
                Route::patch('/{field}', [FieldsController::class, 'update'])->name('update');
                Route::delete('/{field}', [FieldsController::class, 'delete'])->name('delete');
            });

        });

    });

    Route::group(['prefix'=>'nodes', 'as'=>'nodes.'], function() {

        Route::get('{node}', [NodesController::class, 'show']);

    });
    
});
