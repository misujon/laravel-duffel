<?php

namespace Misujon\LaravelDuffel;

use Illuminate\Support\ServiceProvider;

class LaravelDuffelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-duffel');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-duffel');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-duffel.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-duffel'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-duffel'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-duffel'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-duffel');

        // Register the main class to use with the facade
        // $this->app->singleton('laravel-duffel', function () {
        //     return new LaravelDuffel;
        // });

        $this->app->singleton('duffel', function ($app) {
            return new \Misujon\LaravelDuffel\Services\FlightService();
        });

        $this->app->singleton('duffel.resource', function ($app) {
            return new \Misujon\LaravelDuffel\Services\ResourceService();
        });

        $this->app->singleton('duffel.order', function ($app) {
            return new \Misujon\LaravelDuffel\Services\OrderService();
        });
    }
}
