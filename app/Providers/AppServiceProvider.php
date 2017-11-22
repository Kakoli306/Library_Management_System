<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Book;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View()->composer('frontEnd.layouts.headerBottom',function (){
            $allPublishedBooks = Book::where('read_status',0)->get();
            View::share('allPublishedBooks',$allPublishedBooks);
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
