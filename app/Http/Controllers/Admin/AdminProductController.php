<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{  
    public function index(){
        $ds = DB::table('tbl_sanpham')->orderBy('id_sp', $direction = 'desc')->paginate(15);
        $hang = DB::table('tbl_hangsp')->get();
        return view('Admin.product', compact('ds','hang'));
    }

    public function create(){
        return redirect()->route('product.index');
    }
    public function postcreate(Request $request){

        $ma = $request->masp;
        $ten = $request->tensp;
        // $anh = $request->hinhanh;
        $idhangsp = $request->idhangsp;
        $gia = $request->giasp;
        $camera = $request->camera;
        $kt = $request->ktmh;
        $chip = $request->chipset;
        $ram = $request->ram;
        $rom = $request->rom;
        $pin = $request->pin;
        $sim = $request->sim;
        $hdh = $request->hedieuhanh;
        $mota = $request->motasp;
        $sl = $request->soluongsp;
        $slban = $request->dabansp;
        $trangthai = $request->trangthaisp;
        $timeram = $request->timerammat;
        // Xử lý upload hình ảnh
        if ($request->hasFile('hinhanh')) {
            $image = $request->file('hinhanh');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('assets/uploads'), $imageName);
            $imagePath = $imageName;
        }
        DB::table("tbl_sanpham")->insert([
            'ma_sp'=>$ma,
            'ten_sp'=>$ten,
            'id_hangsp'=>$idhangsp,
            'gia'=>$gia,
            'hinhanh'=>$imagePath,
            'camera'=>$camera,
            'chipset'=>$chip,
            'kt_mh'=>$kt,
            'ram'=>$ram,
            'rom'=>$rom,
            'pin'=>$pin,
            'sim'=>$sim,
            'heDH'=>$hdh,
            'mota'=>$mota,
            'soluong'=>$sl,
            'daban'=>$slban,
            'trangthai'=>$trangthai,
            'time_rammat'=>$timeram
        ]);
        return redirect()->route('product.index');
    }

    public function delete(Request $request){
        $id = $request->id;
        $sp = DB::table('tbl_sanpham')->where('id_sp', '=', $id)->delete();
        return redirect()->route('product.index');
    }

    public function edit($id){
        $sp = DB::table('tbl_sanpham')->where("id_sp", "=", $id)->first();
        return view('Admin.editproduct', compact('sp'));
    }
    public function postedit(Request $request){
        $id = $request->id;
        // Xử lý upload hình ảnh
        if ($request->hasFile('hinhanh')) {
            $image = $request->file('hinhanh');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('assets/uploads'), $imageName);
            $imagePath = $imageName;
        }
        $ma = $request->masp;
        $ten = $request->tensp;
        $idhangsp = $request->idhangsp;
        $gia = $request->giasp;
        $camera = $request->camera;
        $kt = $request->ktmh;
        $chip = $request->chipset;
        $ram = $request->ram;
        $rom = $request->rom;
        $pin = $request->pin;
        $sim = $request->sim;
        $hdh = $request->hedieuhanh;
        $mota = $request->motasp;
        $sl = $request->soluongsp;
        $slban = $request->dabansp;
        $trangthai = $request->trangthaisp;
        $timeram = $request->timerammat;
        $sp = DB::table('tbl_sanpham')->where('id_sp', '=', $id)->update([
            'ma_sp'=>$ma,
            'ten_sp'=>$ten,
            'id_hangsp'=>$idhangsp,
            'gia'=>$gia,
            'hinhanh'=>$imagePath,
            'camera'=>$camera,
            'chipset'=>$chip,
            'kt_mh'=>$kt,
            'ram'=>$ram,
            'rom'=>$rom,
            'pin'=>$pin,
            'sim'=>$sim,
            'heDH'=>$hdh,
            'mota'=>$mota,
            'soluong'=>$sl,
            'daban'=>$slban,
            'trangthai'=>$trangthai,
            'time_rammat'=>$timeram
        ]);
        return redirect()->route('product.index');
    }
}