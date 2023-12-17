<?php

namespace App\Http\Controllers\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\HangSP;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    //
    protected $table;
    function __construct() {
         
    }
    public function index($hang_id=null){
        $mucgia = DB::table('tbl_mucgia')->get();
        $hangsp = DB::table('tbl_hangsp')->get();
        if($hang_id == null ){
            $products = DB::table('tbl_sanpham')->paginate(20);
            return view("Clients.home",compact('products','hangsp','mucgia'));
        }
        else{
            $products =DB::table('tbl_sanpham')->where("id_hangsp","=",$id)->paginate(20);
            $sl = DB::table('tbl_sanpham')
            ->select(DB::raw('count(ma_sp) as soluong'))
            ->where('id_hangsp', '=', $hang_id)
            ->groupBy('id_hangsp')
            ->first();
            $tt = DB::table('tbl_hangsp')
            ->select("tenhangsp")
            ->where('id_hangsp','=',$hang_id)
            ->first();
            // dd($sl);
            return view("Clients.home",compact('products','hangsp','mucgia','sl','tt'));
        }
        
        // return view("Admin.Category.Index");
    }
    public function login(){
        return view("Clients.Login");
    }
    public function postlogin(Request $request){
        $user= DB::table('users')
        ->where("email","=",$request->email)
        ->where("matkhau","=",$request->password)
        ->first();
        if(!empty($user)){
            Session::put('user', $user->id_khachhang);
            // dd(Session::get('user'));
            return redirect()->intended('/');
        }
        return view("Clients.Register");  
    }
    public function register(){
        return view("Clients.Register");
    }
    public function postRegister(){
        return view("Clients.Register");
    }
    public function logout(){
        Session::pull('user');
        return redirect()->intended('/');
    }
    public function information(){
        $user  = DB::table('user')
        ->where("id_khachhang","=",Session::get('user'))
        -first();
        return view("Clients.Thongtin",compact('user'));

    }
    public function search(Request $request){
        $mucgia = DB::table('tbl_mucgia')->get();
        $hangsp = DB::table('tbl_hangsp')->get();
        $search = $request->tukhoa;
        $productList = DB::table('tbl_sanpham')
        ->where("ten_sp","like",'%'.$search.'%')
        ->paginate(20);
        $count = $productList->count();
        // dd($productList);
        return view("Clients.search",compact('search','count','productList','hangsp','mucgia'));
    }
    public function ShowProduct(Request $request){
        $id = $request->id;
        $product = DB::table('tbl_sanpham')
        ->join('tbl_hangsp', 'tbl_sanpham.id_hangsp', '=', 'tbl_hangsp.id_hangsp')
        ->where("id_sp","=",$id)
        ->first();
        $mucgia = DB::table('tbl_mucgia')->get();
        $hangsp = DB::table('tbl_hangsp')->get();
        return view("Clients.DetailProduct",compact('product','hangsp','mucgia'));

    }
}
