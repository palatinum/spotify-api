<?php

namespace Src\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Domain\Repositories\TrackRepositoryInterface;
use Src\Infrastructure\Persistence\Eloquent\TrackRepository;

class TrackServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(TrackRepositoryInterface::class, TrackRepository::class);
    }
}
