<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Services\RequestLoggerInterface;
use App\Services\MyRequestLogger;
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
        $this->app->bind(RequestLoggerInterface::class, MyRequestLogger::class); 
        $this->app->bind(RequestLoggerInterface::class, ProductionRequestLogger::class); 
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
