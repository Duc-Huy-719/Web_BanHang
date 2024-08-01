<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Layouts
// routes/web.php

Route::get('/', [HomeController::class, 'index'])->name('home');
// Add other routes as needed
Route::get('/product/{category}', [ProductController::class, 'category'])->name('product.category');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// |-----------------------------------------------|
//Admin
Route::get('/admin', function () {
    return view('admin.home');
});
//product
Route::post('/admin/product/add', [ProductController::class,'insert_product']);
Route::get('/admin/product/create',[ProductController::class,'add_product']);
Route::get('/admin/product/list',[ProductController::class,'list_product']);
Route::get('/admin/order_list', function () {
    return view('admin.order_list');
});
Route::get('/admin/order_detail', function () {
    return view('admin.order_detail');
});
Route::post('/upload', [UploadController::class,'uploadImage']);
Route::post('/uploads', [UploadController::class,'uploadImages']);
Route::get('/', function () {
    return view('welcome');
});