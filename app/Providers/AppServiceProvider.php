<?php

namespace App\Providers;

use App\Repositories\ClubInterface;
use App\Repositories\ClubRepository;
use App\Repositories\RepositoryInterface;
use App\Repositories\UserRepository;
use App\Services\ClubServices;
use App\Services\UserService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(RepositoryInterface::class, UserRepository::class);
        app()->bind(UserService::class, function ($app) {
            return new UserService($app->make(RepositoryInterface::class));
        });
        app()->bind(ClubInterface::class, ClubRepository::class);
        app()->bind(ClubServices::class, function ($app) {
            return new ClubServices($app->make(ClubInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
