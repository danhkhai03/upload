<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ImageRepositoryInterface;
use App\Repositories\ImageRepository;
use App\Services\ImageService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ImageRepositoryInterface::class, ImageRepository::class);
        $this->app->bind(ImageService::class, function ($app) {
            return new ImageService($app->make(ImageRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
