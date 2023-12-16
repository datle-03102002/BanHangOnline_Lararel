<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Session;
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
        if(Session::has('user')){
            $cart_quantity = DB::table('tbl_cart')
            ->where('id_khachhang','=',Session::get('user'))
            ->count();
            view()->share(compact('cart_quantity'));
            // dd($cart_quantity);
        }
        $mucgia = DB::table('tbl_mucgia')->get();
        $hangsp = DB::table('tbl_hangsp')->get();
        Paginator::useBootstrap();
        
        view()->share(compact('mucgia','hangsp'));
    }
}
