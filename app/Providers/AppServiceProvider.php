<?php

namespace App\Providers;

use App\Interface\AuthInterface;
use App\Interface\CategorieInterface;
use App\Interface\ClubInterface;
use App\Repositories\CategorieRepository;
use App\Repositories\ClubRepository;
use App\Services\UserService;
use App\Services\ClubServices;
use App\Repositories\UserRepository;
use App\Services\CateogireServices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

// use App\Repositories\RepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // user
        app()->bind(AuthInterface::class, UserRepository::class);
        app()->bind(UserService::class, function ($app) {
            return new UserService($app->make(AuthInterface::class));
        });
        //club
        app()->bind(ClubInterface::class, ClubRepository::class);
        app()->bind(ClubServices::class, function ($app) {
            return new ClubServices($app->make(ClubInterface::class));
        });
        // categorie
        app()->bind(CategorieInterface::class,CategorieRepository::class);
        app()->bind(CateogireServices::class, function ($app) {
            return new CateogireServices($app->make(CategorieInterface::class));
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}