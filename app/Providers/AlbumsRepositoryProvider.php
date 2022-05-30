<?php

namespace App\Providers;

use App\Interfaces\AlbumsRepositoryInterface;
use App\Repositories\AlbumsRepository;
use Illuminate\Support\ServiceProvider;

class AlbumsRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AlbumsRepositoryInterface::class, AlbumsRepository::class);
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
