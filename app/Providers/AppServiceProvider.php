<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Models\Category;

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
        view()->composer('layout', function ($view) {
            /** @var $view View */
            $view->with('categories', Category::all());
        });

        view()->composer(['product.index', 'product.show'], function ($view) {
            /** @var $view View */
            $view->with('colors', ['royalblue', 'limegreen', 'salmon', 'orange', 'purple', 'darkslategray']);
        });
    }
}
