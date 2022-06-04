<?php

namespace App\Providers;

use App\Interfaces\AlbumRepositoryInterface;
use App\Repositories\AlbumRepository;
use Illuminate\Support\ServiceProvider;

class AlbumRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AlbumRepositoryInterface::class, AlbumRepository::class);
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
