<?php

namespace BagusIndrayana\LaravelMap;

use Illuminate\Support\ServiceProvider;

class LaravelMapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/config/laravel-map.php' => config_path('laravel-map.php'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-map');
    }
}
