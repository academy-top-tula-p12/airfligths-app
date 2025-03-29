<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Contracts\AirportsContract;
use App\Helpers\AirportsMySql;

class AirportServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->app-bind(AirportsMySql::class, function($app){
        //     return new AirportsMySql();
        // )};

        $this->app->singleton(AirportsContract::class, function($app){
            return new AirportsMySql();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
