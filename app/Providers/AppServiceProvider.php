<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use App\Services\EloquentProductSearch;
use Illuminate\Support\ServiceProvider;
use App\Contracts\ProductSearchInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductSearchInterface::class, EloquentProductSearch::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

    }
}
