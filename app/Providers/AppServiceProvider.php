<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.sidebar', function($views){
            $views->with('popular_posts',Post::orderBy('views','desc')->limit(3)->get());

            $views->with('cats', Category::withCount('posts')->orderBy('posts_count', 'desc')->get());
        });
    }
}
