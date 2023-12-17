<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    
    public function index(){
        $ds = DB::table('tbl_hangsp')->get();
        $dsg = DB::table('tbl_mucgia')->get();
        return view("Admin.category", compact('ds', 'dsg'));
    }

    public function delete($id){
        $hang = DB::table('tbl_hangsp')->where('id_hangsp', '=', $id)->delete();
        $ds = DB::table('tbl_hangsp')->get();
        $dsg = DB::table('tbl_mucgia')->get();
        return view("Admin.category", compact('ds', 'dsg'));
    }
    
    public function add(){
        return redirect()->route('category.index');
    }
    public function postadd(Request $request){
        $ten = $request->input('tenhangsp');
        $stt = $request->input('thutusp');
        DB::table('tbl_hangsp')->insert([
            'tenhangsp' => $ten,
            'stt' => $stt,
        ]);
        return redirect()->route('category.index');
    }

    public function addprice(){
        return redirect()->route('Admin.index');
    }
    public function postaddprice(Request $request){
        $gia = $request->input('mucgia');
        DB::table('tbl_mucgia')->insert([
            'mucgia' => $gia,
        ]);
    }
}
