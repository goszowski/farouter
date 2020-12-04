<?php

namespace Farouter\Providers;

use Illuminate\Support\ServiceProvider;

class FarouterServiceProvider extends ServiceProvider
{
    /**
     * The controller namespace for the application.
     */
    protected string $namespace = 'Farouter\Http\Controllers';

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->routes(function () {
        //     Route::prefix(config('farouter.admin.prefix'))
        //         ->middleware('api')
        //         ->namespace($this->namespace)
        //         ->group(base_path('routes/api.php'));

        //     Route::middleware('web')
        //         ->namespace($this->namespace)
        //         ->group(base_path('routes/web.php'));
        // });
    }
}
