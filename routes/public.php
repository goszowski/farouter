<?php

use Farouter\Http\Controllers\PublicController;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function() {
    Route::any('/{any?}', [PublicController::class, 'handle']);
});


