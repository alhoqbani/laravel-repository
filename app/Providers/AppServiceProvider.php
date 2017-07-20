<?php

namespace App\Providers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Contracts\UserRepository;
use App\Repositories\Eloquent\EloquentTopicRepository;
use App\Repositories\Eloquent\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(TopicRepository::class, EloquentTopicRepository::class);
        $this->app->bind(UserRepository::class, EloquentUserRepository::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
