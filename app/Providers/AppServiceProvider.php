<?php

namespace App\Providers;

use App\Repositories\ArtistRepository;
use App\Repositories\ArtistRepositoryInterface;
use App\Repositories\ArtworkRepository;
use App\Repositories\ArtworkRepositoryInterface;
use App\Repositories\EloquentUserRepository;
use App\Repositories\RoleRepository;
use App\Repositories\RoleRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {   $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
        $this->app->bind( ArtistRepositoryInterface::class,ArtistRepository::class);
        $this->app->bind(ArtworkRepositoryInterface::class, ArtworkRepository::class);
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
