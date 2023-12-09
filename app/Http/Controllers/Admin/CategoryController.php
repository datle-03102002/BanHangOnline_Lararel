<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;



class CategoryController extends Controller
{
    //
    private $category;
    function __construct() {
         $this->category=  new Categories();
    }
    public function index(){
        $categoryList = $this->category->getAllCategory();
        return view("Admin.Category.Index",compact("categoryList"));
    }
    public function edit(Request $request){
        $id = $request->id;
        $menu = DB::table('menu')->where("menu_id",$id)->first();
        return view("Admin.Category.Edit",compact('menu'));
    }
    public function postedit(){

    }
}
