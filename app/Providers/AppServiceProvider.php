<?php

namespace App\Providers;

use App\Services\UserService;
use App\Services\ClubServices;
use App\Services\EventServices;
use App\Interface\AuthInterface;
use App\Interface\ClubInterface;
use App\Services\MemberServices;
use App\Interface\EventInterface;
use App\Interface\MemberInterface;
use App\Services\CateogireServices;
use App\Repositories\ClubRepository;
use App\Repositories\UserRepository;
use App\Services\ComentaireServices;
use Illuminate\Pagination\Paginator;
use App\Interface\CategorieInterface;
use App\Repositories\EventRepositroy;
use App\Interface\ComentaireInterface;
use App\Repositories\MemberRepository;
use App\Services\SousCategorieServices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use App\Services\ComentaireSousServices;
use App\Interface\SousCategorieInterface;
use App\Repositories\CategorieRepository;
use App\Interface\ComentaireSousInterface;
use App\Repositories\ComentaireRepository;
use App\Repositories\SousCategorieRepository;
use App\Repositories\ComentaireSousRepository;

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
        //souscategorie
        app()->bind(SousCategorieInterface::class,SousCategorieRepository::class);
        app()->bind(SousCategorieServices::class,function($app){
            return new SousCategorieServices($app->make(SousCategorieInterface::class));
        });
        //Event
        app()->bind(EventInterface::class,EventRepositroy::class);
        app()->bind(EventServices::class,function($app){
            return new EventServices($app->make(EventInterface::class));
        });
        // members
        app()->bind(MemberInterface::class,MemberRepository::class);
        app()->bind(MemberServices::class,function($app){
            return new MemberServices($app->make(MemberInterface::class));
        });
        // commeantire
        app()->bind(ComentaireInterface::class,ComentaireRepository::class);
        app()->bind(ComentaireServices::class,function($app){
            return new ComentaireServices($app->make(ComentaireInterface::class));
        });
            // commeantireSous
            app()->bind(ComentaireSousInterface::class,ComentaireSousRepository::class);
            app()->bind(ComentaireSousServices::class,function($app){
                return new ComentaireSousServices($app->make(ComentaireSousInterface::class));
            });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('vendor.pagination.tailwind');
        Paginator::defaultSimpleView('vendor.pagination.simple-tailwind');
    }
}