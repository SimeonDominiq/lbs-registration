<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Register\RegisterRepository;
use App\Repository\Register\EloquentRegister;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(RegisterRepository::class, EloquentRegister::class);
    }
}
