<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Services\DateService;
use App\Helpers\QueryGenerate;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dateservice', function($app) {
            return new DateService;
        });
        $this->app->singleton('querygenerate', function($app) {
            return new QueryGenerate;
        });
    }
}
