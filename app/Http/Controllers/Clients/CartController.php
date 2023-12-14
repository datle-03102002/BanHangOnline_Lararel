<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{
    //
    public function index(){
        return view("Clients.cart");
    }
    public function themgiohang($id,$sl){
        $product =DB::table('tbl_sanpham')
        ->where("id_sp","=",$id)
        ->first();
        // // dd(Session::get("cart",[]));
        // $cart = Session::get("giohang",[]);
        // if(isset($cart[$id])){
        //     $cart[$id]['soluong'] ++;
        // }
        // else{
        //     $cart[$id]= [
        //         'ten'=>$product->ten_sp,
        //         'gia'=>$product->gia,
        //         'hinhanh'=>$product->hinhanh,
        //         'soluong'=>1
        //     ];
        // }
        $cart = Session::get('cart', []);

        if (!array_key_exists($id, $cart)) {
            $cart[$id]= [
                'ten'=>$product->ten_sp,
                'gia'=>$product->gia,
                'hinhanh'=>$product->hinhanh,
                'soluong'=>1
            ];
        } else {
            $cart[$id]['soluong'] ++;

        }
        // dd($cart);
        Session::put('cart', $cart);
        
         return redirect()->back();
    }

        
        // Session::put('giohang',$cart);
    
}
