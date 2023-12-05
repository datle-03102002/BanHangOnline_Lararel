<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Foods extends Model
{
    use HasFactory;
    public function getAllFood(){
        $foods = DB::select('select * from foods');
        return $foods;
    }
    // public function getFoodByName($name){
       
    //         $food = DB::select('select * from foods where name like ?', ['%'.$name.'%']);
    //         return $food;
        
    // }
protected $fillable=[
    'food_id',
    'menu_id',
    'name',
    'images',
    'descriptions',
    'vote',
    'price',
    'quantity'
];
}
