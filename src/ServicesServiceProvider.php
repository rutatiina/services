<?php

namespace Rutatiina\Services;

use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/image.php' => config_path('image.php'),
            __DIR__.'/config/imagecache.php' => config_path('imagecache.php'),
        ], 'rutatiina/services');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Rutatiina\Globals\Http\Controllers\GlobalsController');
    }
}
