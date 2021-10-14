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
            __DIR__.'/config/permission.php' => config_path('permission.php'),

            __DIR__.'/config/image.php' => config_path('image.php'),
            __DIR__.'/config/imagecache.php' => config_path('imagecache.php'),

            __DIR__.'/config/activitylog.php' => config_path('activitylog.php'),
            __DIR__.'/config/artisan-gui.php' => config_path('artisan-gui.php'),
            __DIR__.'/config/barcode.php' => config_path('barcode.php'),

        ], 'rutatiina-configs');
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
