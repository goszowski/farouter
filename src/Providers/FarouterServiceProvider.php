<?php

namespace Farouter\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Event;

use Farouter\Events\{
    Resource\Created as ResourceCreated,
    Resource\Deleted as ResourceDeleted,
    Control\Created as ControlCreated,
};

use Farouter\Listeners\{
    Resource\CreateResourceTable,
    Resource\DeleteResourceTable,
    Resource\CreateRequiredControls,
    Control\CreateDatabaseColumn,
};

use Farouter\Console\Commands\Setup\SetupCommand;

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
        $this->loadRoutesFrom($this->farouterBasePath . '/routes/public.php');

        $this->loadMigrationsFrom($this->farouterBasePath . '/database/migrations');

        $this->publishes([
            $this->farouterBasePath . '/public' => public_path('vendor/farouter'),
        ], 'public');

        Blade::componentNamespace('Farouter\\View\\Components', 'farouter');

        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('filter-if-pjax', \Spatie\Pjax\Middleware\FilterIfPjax::class);
        $router->aliasMiddleware('localize', \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class);
        $router->aliasMiddleware('localizationRedirect', \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class);
        $router->aliasMiddleware('localeSessionRedirect', \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class);
        $router->aliasMiddleware('localeCookieRedirect', \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class);
        $router->aliasMiddleware('localeViewPath', \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class);

        Event::listen(ResourceCreated::class, [CreateResourceTable::class, 'handle']);
        Event::listen(ResourceCreated::class, [CreateRequiredControls::class, 'handle']);
        Event::listen(ResourceDeleted::class, [DeleteResourceTable::class, 'handle']);

        Event::listen(ControlCreated::class, [CreateDatabaseColumn::class, 'handle']);

        // Register the command if we are using the application via the CLI
        if($this->app->runningInConsole()){
            $this->commands([
                SetupCommand::class,
            ]);
        }
    }
}
