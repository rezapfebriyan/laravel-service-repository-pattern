<?php

namespace App\Providers;

use App\Repositories\ContactRepositoryImpl;
use App\Repositories\IContactRepository;
use App\Repositories\IPostRepository;
use App\Repositories\PostRepositoryImpl;
use App\Services\ContactServiceImpl;
use App\Services\IContactService;
use App\Services\IPostService;
use App\Services\PostServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IContactRepository::class, ContactRepositoryImpl::class);
        $this->app->bind(IPostRepository::class, PostRepositoryImpl::class);

        $this->app->bind(IContactService::class, ContactServiceImpl::class);
        $this->app->bind(IPostService::class, PostServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
