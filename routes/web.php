<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryControllers;
use App\Http\Controllers\Clients\HomeController;
use Illuminate\Routing\Router;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[HomeController::class,"index"]);
Route::get('/search',[HomeController::class,"search"]);
Route::prefix('category')->group(function(){

    Route::get('/',[CategoryControllers::class,"index"]);
    Route::get('/edit/{id}',[CategoryControllers::class,"getCategoryById"]);
});
