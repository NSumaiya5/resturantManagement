<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Pagination\Paginator;
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

    Paginator::useBootstrap();
    $count=0;
    $foodItemCount = Cart::all();
    foreach ($foodItemCount as $request)
    {
       $count = $request->quantity ;
    }
    // dd( $request->quantity );
    view()->share('foodItem_count',$count);
     }
    }


