<?php

namespace App\Providers;

use App\Services\SaveClass;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class UseDBProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\Contracts\UseDB', function(){

            return new SaveClass();

        });
    }
}
