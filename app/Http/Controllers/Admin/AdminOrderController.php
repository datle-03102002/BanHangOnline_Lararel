<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{  
    public function index(){
        $ds = DB::table('tbl_cart')->join('users', 'tbl_cart.id_khachhang','=', 'users.id_khachhang')->get();
        return view('Admin.order', compact('ds'));
    }

    public function edit($code){
        $dh = DB::table('tbl_cart')->join('users', 'tbl_cart.id_khachhang','=', 'users.id_khachhang')
        ->where('code_cart', '=', $code)->first();
        return view('Admin.editorder', compact('dh'));
    }
    public function postedit(Request $request){
        $code = $request->code;
        $dh = DB::table('tbl_cart')->join('users', 'tbl_cart.id_khachhang','=', 'users.id_khachhang')
        ->where('code_cart', '=', $code)
        ->update([
            'hoten'=>$request->hoten,
            'sodienthoai'=>$request->sdt,
            'diachi'=>$request->diachi,
            'ngaynhan'=>$request->ngaynhan
        ]);
        return redirect()->route('order.index');
    }

    public function delete(Request $request){
        $code = $request->code;
        $hang = DB::table('tbl_cart_infor')
        ->where('code_cart', '=', $code)->delete();
        $dh = DB::table('tbl_cart')->join('users', 'tbl_cart.id_khachhang','=', 'users.id_khachhang')
        ->where('code_cart', '=', $code)->delete();
        return redirect()->route('order.index');
    }

    public function detail($code){
        $dh = DB::table('tbl_cart')->join('users', 'tbl_cart.id_khachhang','=', 'users.id_khachhang')
        ->where('code_cart', '=', $code)->first();
        $ds = DB::table('tbl_cart_info')->join('tbl_sanpham', 'tbl_cart_info.id_sp', '=', 'tbl_sanpham.id_sp')
        ->where('code_cart', '=', $code)->get();
        $tong = 0;
        return view('Admin.detailorder', compact('dh','ds', 'tong'));
    }
}