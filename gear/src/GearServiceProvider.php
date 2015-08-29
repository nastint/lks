<?php

namespace Nastint\Gear;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class GearServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/nastint_gear.php' => config_path('nastint_gear.php')], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // CONFIG
        $this->mergeConfigFrom(__DIR__ . '/../config/nastint_gear.php', 'nastint_gear');

        // Register Collective\Html\HtmlServiceProvider
        $this->app->register('Collective\Html\HtmlServiceProvider');

        // ALIAS
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();

            $loader->alias('HTML', 'Collective\Html\HtmlFacade');
            $loader->alias('Form', 'Collective\Html\FormFacade');
        });
    }
}
