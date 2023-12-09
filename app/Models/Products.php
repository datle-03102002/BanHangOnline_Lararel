<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;
    public function getAllProduct(){
        return DB::table('tbl_sanpham')->paginate(12);
    }
    // hàm lấy tất cả các sản phẩm theo hãng
    public function getProductByHangID($id){
        return DB::table('tbl_sanpham')->where("id_hangsp","=",$id)->paginate(12);
    }
}
