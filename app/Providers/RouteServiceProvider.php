<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\RateLimiter;


class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/';

    public function boot(): void
{
    $this->configureRateLimiting();

    $this->routes(function () {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    });
}

    protected function configureRateLimiting(): void
    {
        //
    }
}