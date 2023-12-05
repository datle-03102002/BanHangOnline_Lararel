<?php

namespace App\Http\Controllers\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foods;

class HomeController extends Controller
{
    //
    private $foods;
    function __construct() {
         $this->foods=  new Foods();
    }
    public function index(){
        $foodList = $this->foods->getAllFood();
        return view("Clients.home",compact('foodList'));
    }
    public function search(Request $request){
        $search = $request->txtKeyword;
        // $foodSearch = $this->foods->getFoodByName($search);
        // dd($foodSearch);
        $foodSearch= Foods::where('name','like','%'.$search.'%')->get();
        dd($foodSearch);
        return view("Clients.home",['foodSearch'=>$foodSearch]);
    }
}
