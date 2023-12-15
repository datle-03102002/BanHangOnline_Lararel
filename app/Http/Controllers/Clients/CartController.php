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
        
        return view("Clients.cart",compact('hangsp','mucgia'));
    }
    public function themgiohang($id,$sl=1){
        $product =DB::table('tbl_sanpham')
        ->where("id_sp","=",$id)
        ->first();
        $cart = Session::get('cart', []);

        if (!array_key_exists($id, $cart)) {
            $cart[$id]= [
                'ten'=>$product->ten_sp,
                'gia'=>$product->gia,
                'hinhanh'=>$product->hinhanh,
                'soluong'=>$sl,
                'rom'=>$product->rom,
                'ram'=>$product->ram,
            ];
        } else {
            $cart[$id]['soluong'] +=$sl;

        }
        // dd($cart);
        Session::put('cart', $cart);
         return redirect()->back();
    }
    public function update(Request $request){
        dd("update");
        $cart = Session::get('cart',[]);
        $id = $request->id;
        $action = $request->action;
        if($action=='giamsl'){
            if($cart[$id]['soluong']>1){
                $cart[$id]['soluong']--;
            }
            else{
                unset($cart[$id]);
            }
        }
        else{
            $cart[$id]['soluong']++;
        }
         Session::put('cart', $cart);
        return response()->json(['code' => 200, 'mes' => 'update công']);
    }
    public function deleteItemInCart(Request $request){
        $cart = Session::get('cart',[]);
        unset($cart[$request->id]);
        Session::put('cart', $cart);
        return response()->json(['code' => 200, 'mes' => 'xóa thành công']);
    }
    
}
