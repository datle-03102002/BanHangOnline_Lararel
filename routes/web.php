<?php

use App\Http\Controllers\Admin\BillController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Clients\CartController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Categories;
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
Route::post('login', [HomeController::class,"postlogin"])->name('postlogin');
Route::get('register', [HomeController::class,"register"])->name('register');
Route::get('dangxuat',[HomeController::class,"logout"] )->name('dangxuat');
Route::get('thong-tin',[HomeController::class,"information"] )->name('thongTinUser');
Route::get('product/{id}', [HomeController::class,"ShowProduct"])->name('showpro');

// Route giỏ hàng
Route::get('giohang',[CartController::class,'index'])->name('client.giohang');
Route::get('themgiohang/{id}/{sl}', [CartController::class,"themgiohang"])->name('themgiohang');
Route::post('postthemgiohang/{id}/{sl}', [CartController::class,"postthemgiohang"])->name('postthemgiohang');
Route::get('updateCart/{action}/{id}', [CartController::class,"update"])->name('updateCart');
Route::get('deleteItem/{id}', [CartController::class,"deleteItemInCart"])->name('deleteItem');

Route::get('theohang/{hang_id?}', [HomeController::class,"index"])->name('theohang');
Route::get('/search',[HomeController::class,"search"])->name('search');


//Admin
Route::get('/admin/home',[HomeController::class,'index']) -> name('admin.index');

//categories
Route::prefix('admin')->group(function () {
    Route::get('/category', [CategoryController::class, 'index']) -> name('category.index');
    Route::get('category/add', [CategoryController::class,"add"])->name('category.add');
    Route::post('category/add', [CategoryController::class,"postadd"])->name('category.postadd');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete']) -> name('category.delete');
    Route::post('category/addprice', [CategoryController::class,"addprice"])->name('category.addprice');
    Route::post('category/addprice', [CategoryController::class,"postaddprice"])->name('category.postaddprice');
    // Các route khác trong phần quản lý admin có thể được thêm vào đây
});
// Route::prefix("/admin")->group(function(){
//     Route::get('category', [CategoryController::class,'index'])->name('category.index');
//     // Route::get('category/add', [CategoryController::class,"add"])->name('category.add');
//     // Route::post('category/add', [CategoryController::class,"postadd"])->name('category.postadd');
//     // Route::get('category/edit/{id?}', [CategoryController::class,"edit"])->name('category.edit');
//     // Route::post('category/{id?}', [CategoryController::class,"postedit"])->name('category.postedit');
// });

//products
Route::prefix('admin')->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    // Các route khác trong phần quản lý admin có thể được thêm vào đây
});

//Users
Route::prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    // Các route khác trong phần quản lý admin có thể được thêm vào đây
});

//Bills
Route::prefix('admin')->group(function () {
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    // Các route khác trong phần quản lý admin có thể được thêm vào đây
});