<?php

namespace App\Http\Controllers\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    
    function __construct() { 
             
    }
    public function cart_quantity(){
        return DB::table('tbl_cart')
            ->where('id_khachhang','=',Session::get('user'))
            ->count();
    }
    public function index($hang_id=null,$from=null,$to=null){
        $cart_quantity = $this->cart_quantity();
            $products = DB::table('tbl_sanpham')->paginate(20);
            $tt = 'Tất cả sản phẩm';
            // dd($products);
            return view("Clients.home",compact('products','cart_quantity','tt'));
    }
    public function theohang($hang_id=null){
        $cart_quantity = $this->cart_quantity();
        $products =DB::table('tbl_sanpham')->where("id_hangsp","=",$hang_id)->paginate(20);
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
        return view("Clients.home",compact('products','sl','tt','cart_quantity'));
    }
    public function theogia($from=null,$to=null){
        $cart_quantity = $this->cart_quantity();  
            if($to==-1){
                $products =DB::table('tbl_sanpham')
                ->where("gia",">=",$from*1000000)->paginate(20);
                $sl = DB::table('tbl_sanpham')
                ->select(DB::raw('count(ma_sp) as soluong'))
                ->where('gia', '>=', $from*1000000)
                ->groupBy('id_hangsp')
                ->first();
                $tt = "Sản phẩm có giá trên ".$from;
                return view("Clients.home",compact('products','sl','tt','cart_quantity'));
            }
            else{
                $products =DB::table('tbl_sanpham')
                ->where("gia",">=",$from*1000000)
                ->where('gia','<=',$to*1000000)->paginate(20);
                $sl = DB::table('tbl_sanpham')
                ->select(DB::raw('count(ma_sp) as soluong'))
                ->where("gia",">=",$from*1000000)
                ->where('gia','<=',$to*1000000)
                ->groupBy('id_hangsp')
                ->first();
                $tt = "Sản phẩm có giá từ ".$from." đến ".$to." triệu";
                // dd($tt);
                // dd($sl);
                return view("Clients.home",compact('products','sl','tt','cart_quantity'));
            }
        }
        
        // return view("Admin.Category.Index");
    
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
        $cart_quantity = $this->cart_quantity();  
        $search = $request->tukhoa;
        $productList = DB::table('tbl_sanpham')
        ->where("ten_sp","like",'%'.$search.'%')
        ->paginate(20);
        $count = $productList->count();
        // dd($productList);
        return view("Clients.search",compact('search','count','productList','cart_quantity'));
    }
    public function ShowProduct(Request $request){
        $cart_quantity = $this->cart_quantity();  
        $id = $request->id;
        $product = DB::table('tbl_sanpham')
        ->join('tbl_hangsp', 'tbl_sanpham.id_hangsp', '=', 'tbl_hangsp.id_hangsp')
        ->where("id_sp","=",$id)
        ->first();
        $mucgia = DB::table('tbl_mucgia')->get();
        $hangsp = DB::table('tbl_hangsp')->get();
        return view("Clients.DetailProduct",compact('product','cart_quantity'));
    }
}
