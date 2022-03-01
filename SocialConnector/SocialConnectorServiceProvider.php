<?php

namespace San3jaya\SocialConnector;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class SocialConnectorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'services');
        $this->registerRoutes();
        $this->publishContents();

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('socialconnector', function () {
            return new SocialConnector();
        });
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . './../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => 'social/{socialProvider}'
        ];
    }

    protected function publishContents()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('services.php'),
            ], 'config');
        }
    }
}
