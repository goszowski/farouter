<?php

namespace Farouter\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Routing\Router;

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

        Blade::componentNamespace('Farouter\\View\\Components', 'farouter');

        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('filter-if-pjax', \Spatie\Pjax\Middleware\FilterIfPjax::class);
    }
}
