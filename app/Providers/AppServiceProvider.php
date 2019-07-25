<?php

namespace App\Providers;

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

        view()->share('settings' , \App\Front\Setting::get());
        view()->share('menus' , \App\Front\Menu::get());
        view()->share("items" , \App\Front\Item::get());
        view()->share('subitems' , \App\Front\Subitem::get());
        view()->share("subjects",\App\Front\Subject::get());
    }
}
