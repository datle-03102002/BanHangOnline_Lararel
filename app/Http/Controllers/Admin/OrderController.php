<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{  
    public function index(){
        $ds = DB::table('tbl_cart')->join('users', 'tbl_cart.id_khachhang','=', 'users.id_khachhang')->get();
        return view('Admin.order', compact('ds'));
    }
}