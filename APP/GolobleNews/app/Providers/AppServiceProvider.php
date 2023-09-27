<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Editor;
use Illuminate\Support\Facades\View;
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
        $allEditor = Editor::all();
        View::share('allEditor', $allEditor);
        $allCategoriesLinks = Category::all();
        View::share('allCategoriesLinks', $allCategoriesLinks);
        Paginator::useBootstrap(); 
    }
}
