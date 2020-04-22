<?php

namespace Sumanraj\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__ . '/config/contactconfig.php', 'contact'
        );
        $this->publishes([
            __DIR__.'/config/contactconfig.php' => config_path('contactconfig.php'),
        ]);
    }

    public function register()
    {

    }
}