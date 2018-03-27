<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\ViewComposer\SiteComposer;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::composer('*','\App\Providers\ViewComposer\SiteComposer');
        View::composer('*','\App\Providers\ViewComposer\NewsComposer');
        View::composer('*','\App\Providers\ViewComposer\BreadComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
