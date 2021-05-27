<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Services\RequestLoggerInterface;
use App\Services\LocalRequestLogger;
use App\Services\ProductionRequestLogger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RequestLoggerInterface::class, LocalRequestLogger::class); 
//        $this->app->bind(RequestLoggerInterface::class, ProductionRequestLogger::class); 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
