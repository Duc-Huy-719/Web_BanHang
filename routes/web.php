<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\UploadController;
use App\Http\Controllers\MainController;
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
Route::get('/layouts', function () {
    return view('layouts.home');
});
Route::get('/layouts/product/AoSoMiNu', function () {
    return view('layouts.product.AoSoMiNu');
});
Route::get('/layouts/product/AoThunNu', function () {
    return view('layouts.product.AoThunNu');
});
Route::get('/layouts/product/AoKhoacNu', function () {
    return view('layouts.product.AoKhoacNu');
});
Route::get('/layouts/product/QuanJeanNu', function () {
    return view('layouts.product.QuanJeanNu');
});
Route::get('/layouts/product/QuanShortNu', function () {
    return view('layouts.product.QuanShortNu');
});
Route::get('/layouts/product/QuanDaiNu', function () {
    return view('layouts.product.QuanDaiNu');
});
Route::get('/layouts/product/AoSoMiNam', function () {
    return view('layouts.product.AoSoMiNam');
});
Route::get('/layouts/product/AoThunNam', function () {
    return view('layouts.product.AoThunNam');
});
Route::get('/layouts/product/AoKhoacNam', function () {
    return view('layouts.product.AoKhoacNam');
});
Route::get('/layouts/product/QuanJeanNam', function () {
    return view('layouts.product.QuanJeanNam');
});
Route::get('/layouts/product/QuanShortNam', function () {
    return view('layouts.product.QuanShortNam');
});
Route::get('/layouts/product/QuanDaiNam', function () {
    return view('layouts.product.QuanDaiNam');
});
Route::get('/layouts/product/DamNu', function () {
    return view('layouts.product.DamNu');
});
Route::get('/layouts/product_details/AoSoMiNu/product1', function () {
    return view('layouts.product_details.AoSoMiNu.product1');
});
Route::get('/layouts/product_details/AoSoMiNu/product2', function () {
    return view('layouts.product_details.AoSoMiNu.product2');
});
Route::get('/layouts/product_details/AoSoMiNu/product3', function () {
    return view('layouts.product_details.AoSoMiNu.product3');
});
Route::get('/layouts/product_details/AoSoMiNu/product4', function () {
    return view('layouts.product_details.AoSoMiNu.product4');
});
Route::get('/layouts/product_details/AoSoMiNu/product5', function () {
    return view('layouts.product_details.AoSoMiNu.product5');
});
Route::get('/layouts/product_details/AoSoMiNu/product6', function () {
    return view('layouts.product_details.AoSoMiNu.product6');
});
Route::get('/layouts/product_details/AoSoMiNu/product7', function () {
    return view('layouts.product_details.AoSoMiNu.product7');
});
Route::get('/layouts/product_details/AoSoMiNu/product8', function () {
    return view('layouts.product_details.AoSoMiNu.product8');
});

Route::get('/layouts/product_details/AoThunNu/product1', function () {
    return view('layouts.product_details.AoThunNu.product1');
});
Route::get('/layouts/product_details/AoThunNu/product2', function () {
    return view('layouts.product_details.AoThunNu.product2');
});
Route::get('/layouts/product_details/AoThunNu/product3', function () {
    return view('layouts.product_details.AoThunNu.product3');
});
Route::get('/layouts/product_details/AoThunNu/product4', function () {
    return view('layouts.product_details.AoThunNu.product4');
});
Route::get('/layouts/product_details/AoThunNu/product5', function () {
    return view('layouts.product_details.AoThunNu.product5');
});
Route::get('/layouts/product_details/AoThunNu/product6', function () {
    return view('layouts.product_details.AoThunNu.product6');
});
Route::get('/layouts/product_details/AoThunNu/product7', function () {
    return view('layouts.product_details.AoThunNu.product7');
});
Route::get('/layouts/product_details/AoThunNu/product8', function () {
    return view('layouts.product_details.AoThunNu.product8');
});

Route::get('/layouts/product_details/AoKhoacNu/product1', function () {
    return view('layouts.product_details.AoKhoacNu.product1');
});
Route::get('/layouts/product_details/AoKhoacNu/product2', function () {
    return view('layouts.product_details.AoKhoacNu.product2');
});
Route::get('/layouts/product_details/AoKhoacNu/product3', function () {
    return view('layouts.product_details.AoKhoacNu.product3');
});
Route::get('/layouts/product_details/AoKhoacNu/product4', function () {
    return view('layouts.product_details.AoKhoacNu.product4');
});
Route::get('/layouts/product_details/AoKhoacNu/product5', function () {
    return view('layouts.product_details.AoKhoacNu.product5');
});
Route::get('/layouts/product_details/AoKhoacNu/product6', function () {
    return view('layouts.product_details.AoKhoacNu.product6');
});
Route::get('/layouts/product_details/AoKhoacNu/product7', function () {
    return view('layouts.product_details.AoKhoacNu.product7');
});
Route::get('/layouts/product_details/AoKhoacNu/product8', function () {
    return view('layouts.product_details.AoKhoacNu.product8');
});

Route::get('/layouts/product_details/QuanJeanNu/product1', function () {
    return view('layouts.product_details.QuanJeanNu.product1');
});
Route::get('/layouts/product_details/QuanJeanNu/product2', function () {
    return view('layouts.product_details.QuanJeanNu.product2');
});
Route::get('/layouts/product_details/QuanJeanNu/product3', function () {
    return view('layouts.product_details.QuanJeanNu.product3');
});
Route::get('/layouts/product_details/QuanJeanNu/product4', function () {
    return view('layouts.product_details.QuanJeanNu.product4');
});
Route::get('/layouts/product_details/QuanJeanNu/product5', function () {
    return view('layouts.product_details.QuanJeanNu.product5');
});
Route::get('/layouts/product_details/QuanJeanNu/product6', function () {
    return view('layouts.product_details.QuanJeanNu.product6');
});
Route::get('/layouts/product_details/QuanJeanNu/product7', function () {
    return view('layouts.product_details.QuanJeanNu.product7');
});
Route::get('/layouts/product_details/QuanJeanNu/product8', function () {
    return view('layouts.product_details.QuanJeanNu.product8');
});

Route::get('/layouts/product_details/QuanShortNu/product1', function () {
    return view('layouts.product_details.QuanShortNu.product1');
});
Route::get('/layouts/product_details/QuanShortNu/product2', function () {
    return view('layouts.product_details.QuanShortNu.product2');
});
Route::get('/layouts/product_details/QuanShortNu/product3', function () {
    return view('layouts.product_details.QuanShortNu.product3');
});
Route::get('/layouts/product_details/QuanShortNu/product4', function () {
    return view('layouts.product_details.QuanShortNu.product4');
});
Route::get('/layouts/product_details/QuanShortNu/product5', function () {
    return view('layouts.product_details.QuanShortNu.product5');
});
Route::get('/layouts/product_details/QuanShortNu/product6', function () {
    return view('layouts.product_details.QuanShortNu.product6');
});
Route::get('/layouts/product_details/QuanShortNu/product7', function () {
    return view('layouts.product_details.QuanShortNu.product7');
});
Route::get('/layouts/product_details/QuanShortNu/product8', function () {
    return view('layouts.product_details.QuanShortNu.product8');
});

Route::get('/layouts/product_details/QuanDaiNu/product1', function () {
    return view('layouts.product_details.QuanDaiNu.product1');
});
Route::get('/layouts/product_details/QuanDaiNu/product2', function () {
    return view('layouts.product_details.QuanDaiNu.product2');
});
Route::get('/layouts/product_details/QuanDaiNu/product3', function () {
    return view('layouts.product_details.QuanDaiNu.product3');
});
Route::get('/layouts/product_details/QuanDaiNu/product4', function () {
    return view('layouts.product_details.QuanDaiNu.product4');
});
Route::get('/layouts/product_details/QuanDaiNu/product5', function () {
    return view('layouts.product_details.QuanDaiNu.product5');
});
Route::get('/layouts/product_details/QuanDaiNu/product6', function () {
    return view('layouts.product_details.QuanDaiNu.product6');
});
Route::get('/layouts/product_details/QuanDaiNu/product7', function () {
    return view('layouts.product_details.QuanDaiNu.product7');
});
Route::get('/layouts/product_details/QuanDaiNu/product8', function () {
    return view('layouts.product_details.QuanDaiNu.product8');
});

Route::get('/layouts/product_details/AoSoMiNam/product1', function () {
    return view('layouts.product_details.AoSoMiNam.product1');
});
Route::get('/layouts/product_details/AoSoMiNam/product2', function () {
    return view('layouts.product_details.AoSoMiNam.product2');
});
Route::get('/layouts/product_details/AoSoMiNam/product3', function () {
    return view('layouts.product_details.AoSoMiNam.product3');
});
Route::get('/layouts/product_details/AoSoMiNam/product4', function () {
    return view('layouts.product_details.AoSoMiNam.product4');
});
Route::get('/layouts/product_details/AoSoMiNam/product5', function () {
    return view('layouts.product_details.AoSoMiNam.product5');
});
Route::get('/layouts/product_details/AoSoMiNam/product6', function () {
    return view('layouts.product_details.AoSoMiNam.product6');
});
Route::get('/layouts/product_details/AoSoMiNam/product7', function () {
    return view('layouts.product_details.AoSoMiNam.product7');
});
Route::get('/layouts/product_details/AoSoMiNam/product8', function () {
    return view('layouts.product_details.AoSoMiNam.product8');
});

Route::get('/layouts/product_details/AoThunNam/product1', function () {
    return view('layouts.product_details.AoThunNam.product1');
});
Route::get('/layouts/product_details/AoThunNam/product2', function () {
    return view('layouts.product_details.AoThunNam.product2');
});
Route::get('/layouts/product_details/AoThunNam/product3', function () {
    return view('layouts.product_details.AoThunNam.product3');
});
Route::get('/layouts/product_details/AoThunNam/product4', function () {
    return view('layouts.product_details.AoThunNam.product4');
});
Route::get('/layouts/product_details/AoThunNam/product5', function () {
    return view('layouts.product_details.AoThunNam.product5');
});
Route::get('/layouts/product_details/AoThunNam/product6', function () {
    return view('layouts.product_details.AoThunNam.product6');
});
Route::get('/layouts/product_details/AoThunNam/product7', function () {
    return view('layouts.product_details.AoThunNam.product7');
});
Route::get('/layouts/product_details/AoThunNam/product8', function () {
    return view('layouts.product_details.AoThunNam.product8');
});

Route::get('/layouts/product_details/AoKhoacNam/product1', function () {
    return view('layouts.product_details.AoKhoacNam.product1');
});
Route::get('/layouts/product_details/AoKhoacNam/product2', function () {
    return view('layouts.product_details.AoKhoacNam.product2');
});
Route::get('/layouts/product_details/AoKhoacNam/product3', function () {
    return view('layouts.product_details.AoKhoacNam.product3');
});
Route::get('/layouts/product_details/AoKhoacNam/product4', function () {
    return view('layouts.product_details.AoKhoacNam.product4');
});
Route::get('/layouts/product_details/AoKhoacNam/product5', function () {
    return view('layouts.product_details.AoKhoacNam.product5');
});
Route::get('/layouts/product_details/AoKhoacNam/product6', function () {
    return view('layouts.product_details.AoKhoacNam.product6');
});
Route::get('/layouts/product_details/AoKhoacNam/product7', function () {
    return view('layouts.product_details.AoKhoacNam.product7');
});
Route::get('/layouts/product_details/AoKhoacNam/product8', function () {
    return view('layouts.product_details.AoKhoacNam.product8');
});

Route::get('/layouts/product_details/QuanJeanNam/product1', function () {
    return view('layouts.product_details.QuanJeanNam.product1');
});
Route::get('/layouts/product_details/QuanJeanNam/product2', function () {
    return view('layouts.product_details.QuanJeanNam.product2');
});
Route::get('/layouts/product_details/QuanJeanNam/product3', function () {
    return view('layouts.product_details.QuanJeanNam.product3');
});
Route::get('/layouts/product_details/QuanJeanNam/product4', function () {
    return view('layouts.product_details.QuanJeanNam.product4');
});
Route::get('/layouts/product_details/QuanJeanNam/product5', function () {
    return view('layouts.product_details.QuanJeanNam.product5');
});
Route::get('/layouts/product_details/QuanJeanNam/product6', function () {
    return view('layouts.product_details.QuanJeanNam.product6');
});
Route::get('/layouts/product_details/QuanJeanNam/product7', function () {
    return view('layouts.product_details.QuanJeanNam.product7');
});
Route::get('/layouts/product_details/QuanJeanNam/product8', function () {
    return view('layouts.product_details.QuanJeanNam.product8');
});

Route::get('/layouts/product_details/QuanShortNam/product1', function () {
    return view('layouts.product_details.QuanShortNam.product1');
});
Route::get('/layouts/product_details/QuanShortNam/product2', function () {
    return view('layouts.product_details.QuanShortNam.product2');
});
Route::get('/layouts/product_details/QuanShortNam/product3', function () {
    return view('layouts.product_details.QuanShortNam.product3');
});
Route::get('/layouts/product_details/QuanShortNam/product4', function () {
    return view('layouts.product_details.QuanShortNam.product4');
});
Route::get('/layouts/product_details/QuanShortNam/product5', function () {
    return view('layouts.product_details.QuanShortNam.product5');
});
Route::get('/layouts/product_details/QuanShortNam/product6', function () {
    return view('layouts.product_details.QuanShortNam.product6');
});
Route::get('/layouts/product_details/QuanShortNam/product7', function () {
    return view('layouts.product_details.QuanShortNam.product7');
});
Route::get('/layouts/product_details/QuanShortNam/product8', function () {
    return view('layouts.product_details.QuanShortNam.product8');
});

Route::get('/layouts/product_details/QuanDaiNam/product1', function () {
    return view('layouts.product_details.QuanDaiNam.product1');
});
Route::get('/layouts/product_details/QuanDaiNam/product2', function () {
    return view('layouts.product_details.QuanDaiNam.product2');
});
Route::get('/layouts/product_details/QuanDaiNam/product3', function () {
    return view('layouts.product_details.QuanDaiNam.product3');
});
Route::get('/layouts/product_details/QuanDaiNam/product4', function () {
    return view('layouts.product_details.QuanDaiNam.product4');
});
Route::get('/layouts/product_details/QuanDaiNam/product5', function () {
    return view('layouts.product_details.QuanDaiNam.product5');
});
Route::get('/layouts/product_details/QuanDaiNam/product6', function () {
    return view('layouts.product_details.QuanDaiNam.product6');
});
Route::get('/layouts/product_details/QuanDaiNam/product7', function () {
    return view('layouts.product_details.QuanDaiNam.product7');
});
Route::get('/layouts/product_details/QuanDaiNam/product8', function () {
    return view('layouts.product_details.QuanDaiNam.product8');
});

Route::get('/layouts/product_details/DamNu/product1', function () {
    return view('layouts.product_details.DamNu.product1');
});
Route::get('/layouts/product_details/DamNu/product2', function () {
    return view('layouts.product_details.DamNu.product2');
});
Route::get('/layouts/product_details/DamNu/product3', function () {
    return view('layouts.product_details.DamNu.product3');
});
Route::get('/layouts/product_details/DamNu/product4', function () {
    return view('layouts.product_details.DamNu.product4');
});
Route::get('/layouts/product_details/DamNu/product5', function () {
    return view('layouts.product_details.DamNu.product5');
});
Route::get('/layouts/product_details/DamNu/product6', function () {
    return view('layouts.product_details.DamNu.product6');
});
Route::get('/layouts/product_details/DamNu/product7', function () {
    return view('layouts.product_details.DamNu.product7');
});
Route::get('/layouts/product_details/DamNu/product8', function () {
    return view('layouts.product_details.DamNu.product8');
});
Route::get('/layouts/cart', function () {
    return view('layouts.cart');
});
Route::get('/layouts/order', function () {
    return view('layouts.order');
});
Route::get('/layouts/TinTuc', function () {
    return view('layouts.TinTuc');
});
// Route::get('/layouts/login_register', function () {
//     return view('layouts.login_register');
// });

Route::post('/layouts/auth', [AuthController::class, 'authenticate']);
//=======================
// login/register

// Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Route::get('/', [MainController::class, 'index']);
// Route::get('/product/{category}/{product}', [MainController::class, 'showProduct']);
// Route::get('/category/{category}', [MainController::class, 'showCategory']);
// Route::get('/tintuc', [MainController::class, 'showTintuc']);
// Route::get('/login', [MainController::class, 'showLogin']);
// Route::get('/cart', [MainController::class, 'showCart']);
// Route::get('/product/ao_khoac_nam', [ProductController::class, 'showAoKhoacNam']);
// Route::get('/product/ao_khoac_nu', [ProductController::class, 'showAoKhoacNu']);

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