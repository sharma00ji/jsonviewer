<?php

namespace Sharmaji\Jsonviewer\Providers;

use App;
use Config;
use Illuminate\Support\ServiceProvider;
use Lang;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        
    }

    /**
     * Register routes, translations, views and publishers.
     *
     * @return void
     */
    public function boot() {
        if (!$this->app->routesAreCached()) {
            require realpath(__DIR__ . '/../Http/web.php');
        }
        require_once __DIR__ . '/../Http/helpers.php';
        $this->loadTranslationsFrom(realpath(__DIR__ . '/../../resources/lang'), 'Jsonviewer');

        $this->loadViewsFrom(realpath(__DIR__ . '/../../resources/views'), 'Jsonviewer');

        $this->publishes([realpath(__DIR__ . '/../../resources/views') => base_path('resources/views/vendor/Sharmaji/Jsonviewer')], 'views');

        $this->publishes([realpath(__DIR__ . '/../../resources/assets') => public_path('assets')], 'public');

        $this->publishes([realpath(__DIR__ . '/../../resources/config') => config_path('')], 'config');

        $this->publishes([realpath(__DIR__ . '/../../database/migrations') => database_path('migrations')], 'migrations');

        $this->publishes([realpath(__DIR__ . '/../../database/seeds') => database_path('seeds')], 'seeds');
    }

}
