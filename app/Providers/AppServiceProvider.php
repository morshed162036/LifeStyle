<?php

namespace App\Providers;

use App\Models\CompanyDetails;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        view()->composer(['client.layouts.menu','client.layouts.footer','client.layouts.header','client.product_details','server.layout.menu-bar','server.layout.header'], function ($view) {
            $company = CompanyDetails::get()->first();
            $view->with(compact('company'));
        });

    }
}
