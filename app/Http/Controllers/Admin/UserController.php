<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{  
    public function index(){
        $ds = DB::table('user')->get();
        return view('Admin.user', compact('ds'));
    }
}