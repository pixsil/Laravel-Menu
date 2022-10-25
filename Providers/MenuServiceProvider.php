<?php

// version 4

namespace App\Providers;

use App\Classes\Menu\MenuFactory;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('menu', function () {
            return new MenuFactory();
        });
    }
}
