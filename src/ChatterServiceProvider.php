<?php

namespace TsarHoldings\Chatter;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ChatterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishing();
        $this->registerResources();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (!defined('CHATTER_PATH')) {
            define('CHATTER_PATH', realpath(__DIR__ . '/../'));
        }
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    public function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../config/chatter.php' => config_path('chatter.php'),
        ], 'chatter-config');

        $this->publishes([
            CHATTER_PATH . '/public' => public_path('chatter'),
        ], 'chatter-assets');
    }

    public function registerResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'chatter');

        $this->registerRoutes();
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * Get the services provided.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
