<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){

    
    if (!Session::has('user')) {
        return redirect()->route('client.login');
    }
    else{
        $donhang = DB::table('tbl_cart')
        ->join('users','users.id_khachhang','=','tbl_cart.id_khachhang')
        ->where('tbl_cart.id_khachhang','=',Session::get('user'))
        ->orderBy('tbl_cart.ngaydat')
        ->get();
        return view("Clients.xemdonhang",compact('donhang'));
    }
    
    $sql_cart =
        "SELECT * FROM tbl_cart
                    INNER JOIN tbl_dangky ON tbl_cart.id_khachhang = tbl_dangky.id_khachhang
                    WHERE tbl_cart.id_khachhang = " .
        $_SESSION['login'] .
        ' ORDER BY tbl_cart.ngaydat DESC';
    $query_cart = mysqli_query($connect, $sql_cart);
    

    }
    public function dathang(){
        $id_user = Session::get('user');
        $cart = Session::get('cart',[]);
        $tong =0;
        foreach ($cart as $key => $item) {
            $tong += $item['soluong']*$item['gia'];
        }
        $user = DB::table('users')
        ->where("id_khachhang","=",$id_user)
        ->first();
        // dd($user);
        return view("Clients.dathang",compact('user','cart','tong'));
    }
    public function postdathang(Request $request){
        $id_kh = Session::get('user');
        $tenn = $request->hoten;
        $sdt = $request->sdt;
        $dc = $request->diachi;
        $trangthai = 1;
        $thanhtoan = $request->httt;
        $currentDay = date('Y-m-d');
        $code_cart = rand(0,9999);
        DB::table('tbl_cart')->insert([
            'id_khachhang'=>$id_kh,
            'code_cart'=>$code_cart,
            'tennguoinhan'=>$tenn,
            'sdt'=>$sdt,
            'dc'=>$dc,
            'ngaydat'=>$currentDay,
            'thanhtoan'=>$thanhtoan,
            'trangthai'=>$trangthai
        ]);
        foreach (Session::get('cart') as $key => $item) {
            DB::table('tbl_cart_info')->insert([
                'code_cart'=>$code_cart,
                'id_sp'=>$key,
                'sl'=>$item['soluong']
            ]);
        };
        Session::forget('cart');
        return redirect()->route('chitietdh',['id'=>$code_cart])->with('thongbao','Đã đặt hàng');
    }
    public function chitiet(Request $request){
        $code_cart = $request->id;
        $dataCart = DB::table('tbl_cart')
        ->join('users','tbl_cart.id_khachhang','=','users.id_khachhang')
        ->where('tbl_cart.code_cart','=',$code_cart)
        ->first();
        // dd($dataCart);
        $dataSP = DB::table('tbl_cart_info')
        ->join('tbl_sanpham','tbl_cart_info.id_sp','=','tbl_sanpham.id_sp')
        ->where('tbl_cart_info.code_cart','=',$code_cart)
        ->get();
        $tong = 0;
        foreach ($dataSP as $key => $item) {
            $tong +=$item->gia* $item->sl;
        }
        return view('Clients.chitietdh',compact('dataCart','dataSP','code_cart','tong'));
    }
    public function huy(Request $request){
        $code_cart = $request->id;
        DB::table('tbl_cart_info')
        ->where('code_cart','=',$code_cart)
        ->delete();
        DB::table('tbl_cart')
        ->where('code_cart','=',$code_cart)
        ->delete();
        return redirect()->route('xemdonhang')->with('thongbao','Đã xóa đơn hàng');
    }
    public function sua(Request $request){
        $code_cart = $request->id;
        $id_kh = Session::get('user');
        $donhang = DB::table('tbl_cart')
        ->join('users','tbl_cart.id_khachhang','=','users.id_khachhang')
        ->where('tbl_cart.id_khachhang','=',$id_kh)
        ->where('tbl_cart.code_cart','=',$code_cart)
        ->first();
        return view('Clients.suadonhang',compact('donhang','code_cart'));
    }
    public function postsua(Request $request){
        $code_cart = $request->id;
        $tenn = $request->hoten;
        $sdt = $request->sdt;
        $diachi = $request->diachi;
        $tt = $request->httt;
        DB::table('tbl_cart')
        ->where('code_cart','=',$code_cart)
        ->update([
            'tennguoinhan'=>$tenn,
            'sdt'=>$sdt,
            'dc'=>$diachi,
            'thanhtoan'=>$tt
        ]);
        return redirect()->route('chitietdh',['id'=>$code_cart])->with('thongbao','Đã sửa đơn hàng');
    }
    public function danhan(Request $request){
        $code_cart = $request->id;
        // cap nhật trạng thái đơn hàng,cập nhật ngày nhận hàng
        $currentDay = date('Y-m-d');
        DB::table('tbl_cart')
        ->where('code_cart','=',$code_cart)
        ->update([
            'trangthai'=>3,
            'ngaynhan'=>$currentDay
        ]);
       
        // // lay thong tin ở cart-infor để cập nhật lại số lượng ở bảng sản phẩm
        $cart_infor = DB::table('tbl_cart_info')
        ->join('tbl_sanpham','tbl_sanpham.id_sp','=','tbl_cart_info.id_sp')
        ->where('code_cart','=',$code_cart)
        ->get();
        // câp nhật số lượng
        foreach ($cart_infor as $key => $item) {
            // lấy số lượng, đã bán của 1 sản phẩm
            $sp =  DB::table('tbl_sanpham')
            ->select([
                'soluong','daban'
            ])
            ->where('id_sp','=',$cart_infor[0]->id_sp)
            ->first();
            //số lượng còn của sản phẩm
            $sl=$sp->soluong;
            // đã bán
            $daban = $sp->daban;
            DB::table('tbl_sanpham')
            ->where('id_sp','=',$item->id_sp)
            ->update([
                'soluong'=>(int)$sl -(int)$item->sl,
                'daban'=>(int)$daban + (int)$item->daban
            ]);
        }

        return redirect()->route('chitietdh',['id'=>$code_cart])->with('thongbao','Đã nhận đơn hàng');
    }
}
