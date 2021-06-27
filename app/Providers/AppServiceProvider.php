<?php

namespace App\Providers;

use App\Models\Document;
use App\Models\Post;
use App\Observers\DocumentObserver;
use App\Observers\PostObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        Post::observe(PostObserver::class);
        Document::observe(DocumentObserver::class);
    }
}
