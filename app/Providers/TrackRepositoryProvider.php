<?php

namespace App\Providers;

use App\Interfaces\TrackRepositoryInterface;
use App\Repositories\TracksRepository;
use Illuminate\Support\ServiceProvider;

class TrackRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TrackRepositoryInterface::class, TracksRepository::class);
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
