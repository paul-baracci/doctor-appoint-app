<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Services\RequestLoggerInterface;
use App\Services\ResponseLoggerInterface;
use App\Services\LocalRequestLogger;
use App\Services\DebugResponseLogger;
use App\Services\ProductionRequestLogger;
use Illuminate\Events\Dispatcher;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
	$this->app->bind(RequestLoggerInterface::class, function () {
	    return new LocalRequestLogger($this->app->make(LoggerInterface::class));
	});

	//        $this->app->bind(RequestLoggerInterface::class, ProductionRequestLogger::class);

	$this->app->bind(ResponseLoggerInterface::class, function () {
	    return new DebugResponseLogger($this->app->make(LoggerInterface::class), $this->app->make(Dispatcher::class));
	}); 
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
