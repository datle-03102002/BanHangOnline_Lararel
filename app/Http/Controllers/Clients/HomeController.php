<?php

namespace App\Http\Controllers\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $foods = DB::select('select * from foods');
        return view("Clients.home",compact('foods'));
    }
    public function search(Request $request){
        $search = $request->input('txtKeyword');
        $data = DB::select('select * from foods where name=:name', [
            "name" => $search
        ])::paginate(5);
        dd($data);
        return view("Clients.home",['data'=>$data]);
    }
}
