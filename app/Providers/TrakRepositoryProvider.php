<?php

namespace App\Providers;

use App\Repositories\TrakRepositoryInterface;
use App\Repositories\TraksRepository;
use Illuminate\Support\ServiceProvider;

class TrakRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TrakRepositoryInterface::class, TraksRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
