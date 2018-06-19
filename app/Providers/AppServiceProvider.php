<?php

namespace App\Providers;

use App\Models\News;
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
        //
        //$news1 = \App\Models\News::latest('created_at')->get();
        $news1 = \App\Models\News::orderBy('created_at', 'desc')->limit(3)->get();
        view()->share('news1', $news1);
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
