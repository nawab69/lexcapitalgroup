<?php

namespace App\Providers;

use BlockIo;
use Illuminate\Support\ServiceProvider;

class blockIOServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BlockIo::class, function ($app) {
            $apiKey = $app['config']['services.block_io.api_key'];
            $pin = $app['config']['services.block_io.pin'];
            $version = $app['config']['services.block_io.version'];

            return new BlockIo($apiKey, $pin, $version);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
