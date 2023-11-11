<?php

namespace Zems\LibRes;

use Illuminate\Support\ServiceProvider;

class LibResProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->LoadViewsFrom(__DIR__.'/views', 'lib_res');
        $this->app->singleton(LibResController::class, function(){
            return new LibResController();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Route.php');        
    }
}
