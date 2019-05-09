<?php

namespace App\Providers;

use App\Models\News;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //$news1 = \App\Models\News::latest('created_at')->get();
        if (Schema::hasTable('news')) {
            $news1 = \App\Models\News::orderBy('created_at', 'desc')->limit(3)->get();
        view()->share('news1', $news1);
    }
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
