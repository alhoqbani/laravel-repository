<?php

namespace App\Providers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\EloquentTopicRepository;
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
