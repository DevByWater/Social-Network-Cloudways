<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Auth;

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

        $age = Carbon::createFromDate(1989, 8, 30)->age;
        View::share('age', $age);
        View::share('myname', 'Ellis');



        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
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
