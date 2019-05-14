<?php

namespace App\Providers;

use App\Interfaces\ModelInterface;
use App\Interfaces\PostInterface;
use App\Repositories\ModelRepository;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $this->app->bind(ModelInterface::class, ModelRepository::class);
        $this->app->bind(PostInterface::class, PostRepository::class);
    }
}
