<?php

namespace App\Providers;

use Illuminate\Config\Repository;
use Illuminate\Support\ServiceProvider;
use Illuminatech\Config\PersistentRepository;
use Illuminatech\Config\StorageDb;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->extend('config', function (Repository $originConfig) {
            $storage = new StorageDb($this->app->make('db.connection'));

            return (new PersistentRepository($originConfig, $storage));
        });

        // ...
    }
}
