<?php

namespace Developerlover\LaravelAddons;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'laravel-addons');
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        include __DIR__.'/routes/admin_auth.php';
    }
}
