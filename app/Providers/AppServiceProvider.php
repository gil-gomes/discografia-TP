<?php

namespace App\Providers;

use App\View\Components\Modals\ConfirmAction;
use App\View\Components\Modals\FormTrak;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;

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
        //
        Paginator::useBootstrap();

        //Components
        Blade::component('confirm-action', ConfirmAction::class);
        Blade::component('form-trak', FormTrak::class);
    }
}
