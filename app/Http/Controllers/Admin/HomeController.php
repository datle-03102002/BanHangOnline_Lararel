<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index()
    {
        $slsp = DB::table('tbl_sanpham')->count();
        
        $slsptong = DB::table('tbl_sanpham')
            ->where('trangthai', 1)
            ->sum('soluong');
        $slhsp = DB::table('tbl_hangsp')->count();
        
        //sản phẩm đã bán
        $spdb = DB::table('tbl_sanpham')->sum('daban');

        //đơn hàng xử lý
        $sl_dh_xl = DB::table('tbl_cart')->where('trangthai', 1)->count();

        //dang giao
        $sl_dh_dg = DB::table('tbl_cart')->where('trangthai', 2)->count();

        //thành công
        $sl_dh_tc = DB::table('tbl_cart')->where('trangthai', 3)->count();

        //đơn hàng hôm nay
        $dh_hn = DB::table('tbl_cart')->whereDate('ngaydat', '=', date('Y-m-d'))->count();

        $tk = DB::table('user')->count();

        return view("admin.index", compact('slsp', 'slhsp', 'slsptong', 'spdb', 'sl_dh_xl', 'sl_dh_dg', 'dh_hn', 'sl_dh_tc', 'tk'));
    }

}
