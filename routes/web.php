<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Admin\CategoryController;
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
Route::get('/',[HomeController::class,"index"])->name('trangchu');
Route::get('login', [HomeController::class,"login"])->name('client.login');
Route::post('login', [HomeController::class,"postlogin"])->name('client.postlogin');
Route::get('register', [HomeController::class,"register"])->name('register');
Route::get('product/{id}', [HomeController::class,"ShowProduct"])->name('showpro');
Route::middleware('clientlogin')->group(function () {
    Route::get('themgiohang/{id}', [HomeController::class,"themgiohang"])->name('themgiohang');
});
Route::get('theohang/{hang_id?}', [HomeController::class,"index"])->name('theohang');
Route::get('/search',[HomeController::class,"search"]);


// router admin
Route::prefix("/admin")->group(function(){
    Route::get('category', [CategoryController::class,"index"])->name('category.index');
    Route::get('category/add', [CategoryController::class,"add"])->name('category.add');
    Route::post('category/add', [CategoryController::class,"postadd"])->name('category.postadd');
    Route::get('category/edit/{id?}', [CategoryController::class,"edit"])->name('category.edit');
    Route::post('category/{id?}', [CategoryController::class,"postedit"])->name('category.postedit');
});