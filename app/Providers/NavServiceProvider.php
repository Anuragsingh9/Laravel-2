<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;

class NavServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $pages=User::all();
            return $view->with('pages',$pages);
        });
    }
}
