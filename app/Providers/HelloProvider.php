<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelloProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //echo "hello provider boot".PHP_EOL;
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        //echo "hello provider register".PHP_EOL;
    }
}
