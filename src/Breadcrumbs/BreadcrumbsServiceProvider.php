<?php

namespace Glissmedia\Breadcrumbs;

use Illuminate\Support\ServiceProvider;

class BreadcrumbsServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton('breadcrumbs', function () {
            return new Breadcrumbs();
        });
    }

    public function boot()
    {

        //Config
        $this->publishes([__DIR__ . '/config/' => config_path() . "/"], 'config');

        //CSS
        $this->publishes([__DIR__ . '/public/' => public_path() . "/"], 'assets');

        //Views
        $this->loadViewsFrom(__DIR__ . '/resources/views/vendor', 'breadcrumbs');
        $this->publishes([
            __DIR__.'/resources/views/vendor' => resource_path('views/vendor/breadcrumbs'),
        ]);
    }

}