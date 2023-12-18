<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\CartController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\HomeController1;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Clients\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Categories;
=======
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Clients\OrderController;
use App\Http\Controllers\Clients\UserController;
>>>>>>> 45c93956915980ec1b25cd9579e4d4e926144f72
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
Route::get('/search',[HomeController::class,"search"])->name('search');
Route::get('theohang/{hang_id?}', [HomeController::class,"theohang"])->name('theohang');
Route::get('theogia/{from?}/{to?}', [HomeController::class,"theogia"])->name('theogia');



Route::get('login', [UserController::class,"login"])->name('client.login');
Route::post('login', [UserController::class,"postlogin"])->name('postlogin');
Route::get('register', [UserController::class,"register"])->name('register');
Route::post('register', [UserController::class,"postregister"])->name('postregister');
Route::get('dangxuat',[UserController::class,"logout"] )->name('dangxuat');
Route::get('thong-tin',[UserController::class,"information"] )->name('thongTinUser');
Route::get('sua-thong-tin',[UserController::class,"update"] )->name('updateTT');
Route::post('sua-thong-tin',[UserController::class,"postUpdate"] )->name('postUpdate');
Route::get('product/{id}', [HomeController::class,"ShowProduct"])->name('showpro');

// Route giỏ hàng
Route::get('/giohang',[CartController::class,'index'])->name('client.giohang');
Route::get('/themgiohang/{id}/{sl}', [CartController::class,"themgiohang"])->name('themgiohang');
Route::get('/update/{action}/{id}', [CartController::class,"update"])->name('update');
Route::get('/deleteItem/{id}', [CartController::class,"deleteItemInCart"])->name('deleteItem');
Route::middleware(['clientlogin'])->group(function () {
    Route::get('xemdonhang', [OrderController::class,"index"])->name('xemdonhang');
    Route::get('dathang', [OrderController::class,"dathang"])->name('dathang');
    Route::post('dathang', [OrderController::class,"postdathang"])->name('postdathang');
    Route::get('chitietdh/{id}', [OrderController::class,"chitiet"])->name('chitietdh');
    Route::get('suadonhang/{id}', [OrderController::class,"sua"])->name('suadonhang');
    Route::post('suadonhang/{id}', [OrderController::class,"postsua"])->name('postsua');
    Route::get('huydonhang/{id}', [OrderController::class,"huy"])->name('huydonhang');
    Route::get('danhandonhang/{id}', [OrderController::class,"danhan"])->name('danhandonhang');
});



// router admin
Route::prefix("/admin")->group(function(){
    Route::get('category', [CategoryController::class,"index"])->name('category.index');
    Route::get('category/add', [CategoryController::class,"add"])->name('category.add');
    Route::post('category/add', [CategoryController::class,"postadd"])->name('category.postadd');
    Route::get('category/edit/{id?}', [CategoryController::class,"edit"])->name('category.edit');
    Route::post('category/{id?}', [CategoryController::class,"postedit"])->name('category.postedit');
});
