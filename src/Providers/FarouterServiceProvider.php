<?php

namespace Farouter\Providers;

use Illuminate\Support\ServiceProvider;

class FarouterServiceProvider extends ServiceProvider
{
    /**
     * The controller namespace for the Farouter.
     */
    protected string $namespace = 'Farouter\Http\Controllers';

    /**
     * The base path for the Farouter.
     */
    protected string $farouterBasePath = __DIR__ . '/../..';

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
        $this->mergeConfigFrom(
            $this->farouterBasePath . '/config/farouter.php', 'farouter'
        );

        $this->loadViewsFrom($this->farouterBasePath . '/resources/views', 'farouter');

        $this->loadRoutesFrom($this->farouterBasePath . '/routes/farouter.php');

        $this->publishes([
            $this->farouterBasePath . '/public' => public_path('vendor/farouter'),
        ], 'public');

        // $this->routes(function () {
        //     Route::prefix(config('farouter.admin.prefix'))
        //         ->middleware('web')
        //         ->namespace($this->namespace)
        //         ->group($this->farouterBasePath . '/routes/api.php');
        // });
    }
}
