<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\RegisterRequest;


class UserController extends Controller
{
    public function cart_quantity(){
        return DB::table('tbl_cart')
            ->where('id_khachhang','=',Session::get('user'))
            ->count();
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
        return view("Clients.Login")->with(['error'=> 'Email hoặc mật khẩu sai']);  
    }
    public function register(){
        return view("Clients.Register");
    }
    public function postregister(RegisterRequest $request){
        $request->validated();
        // dd($request);
        DB::table('users')
        ->insert(
            [
                'hoten'=>$request->fullname,
                'sodienthoai'=>$request->phone,
                'email'=>$request->email,
                'matkhau'=>$request->password,
                'diachi'=>$request->address
            ]
            );
        return redirect('/register')->with('success','Đăng ký tài khoản thành công');
        // return view("Clients.Register")->withErrors($validator)->with('custom_error', 'Đã xảy ra lỗi khác');
    }
    public function logout(){
        Session::pull('user');
        return redirect()->intended('/');
    }
    public function information(){
        $cart_quantity = $this->cart_quantity();  
        $user  = DB::table('users')
        ->where("id_khachhang","=",Session::get('user'))
        ->first();
        // dd($user);
        return view("Clients.User",compact('user','cart_quantity'));
    }
    public function update(){
        $cart_quantity = $this->cart_quantity();  
        $user  = DB::table('users')
        ->where("id_khachhang","=",Session::get('user'))
        ->first();
        // dd($user);
        return view("Clients.suaThongTin",compact('user','cart_quantity'));
    }
    public function postUpdate(Request $request){
        $id = Session::get('user');
        $ten = $request->hoten;
        $email = $request->email;
        $sdt = $request->sdt;
        $diachi = $request->diachi;
        $check=DB::table('users')
        ->where('id_khachhang','=',$id)
        ->update([
            'hoten'=>$ten,
            'email'=>$email,
            'sodienthoai'=>$sdt,
            'diachi'=>$diachi
        ]);
        // dd($check);
        $user  = DB::table('users')
        ->where("id_khachhang","=",Session::get('user'))
        ->first();
        $cart_quantity = $this->cart_quantity();  
        return redirect()->route("thongTinUser");
    }

}
