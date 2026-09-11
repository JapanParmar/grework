<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Services\ProductRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share categories with the main layout so mega-menu, mobile nav,
        // and footer "Product Range" are always dynamic from the DB.
        View::composer('layouts.app', function ($view) {
            $view->with('navCategories', ProductRepository::getCategories());
        });
    }
}
