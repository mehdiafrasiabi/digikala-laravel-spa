<?php

namespace App\Providers;

use App\Repository\CategoryRepository;
use App\Repository\CategoryRepositoryInterface;
use App\Repository\CityRepository;
use App\Repository\CityRepositoryInterface;
use App\Repository\client\ClientAuthRepository;
use App\Repository\client\ClientAuthRepositoryInterface;
use App\Repository\CountryRepository;
use App\Repository\CountryRepositoryInterface;
use App\Repository\ProductRepository;
use App\Repository\ProductRepositoryInterface;
use App\Repository\StateRepository;
use App\Repository\StateRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Product
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
        //Map
        $this->app->singleton(StateRepositoryInterface::class, StateRepository::class);
        $this->app->singleton(CityRepositoryInterface::class, CityRepository::class);
        $this->app->singleton(CountryRepositoryInterface::class, CountryRepository::class);
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(ClientAuthRepositoryInterface::class, ClientAuthRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
