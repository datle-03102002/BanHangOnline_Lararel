<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{  
    public function index(){
        $ds = DB::table('tbl_sanpham')->orderBy('id_sp', $direction = 'asc')->paginate(15);
        return view('Admin.product', compact('ds'));
    }
}