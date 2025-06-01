<?php

use App\Http\Controllers\AboutusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgetPwController;
use App\Http\Controllers\ForgetPwController2;
use App\Http\Controllers\ForgetPwController3;
use App\Http\Controllers\landingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginController2;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterController2;
use App\Http\Controllers\RegisterController3;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChgPwController;
use App\Http\Controllers\AccountSettingsController;

Route::get('/', [landingpageController::class, 'landingpage'])->name('landingpage');
Route::get('/admin', [AdminDashboardController::class, 'index']);
Route::resource('admin_banner', AdminBannerController::class);
Route::resource('admin_product', AdminProductController::class);
Route::resource('admin_blog', AdminBlogController::class);
Route::resource('admin_gallery', AdminGalleryController::class);
Route::resource('admin_category', AdminCategoryController::class);
Route::resource('admin_account', AdminAccountController::class);

Route::get('/logindummy', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/logindummy', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/logindummydb', function () {
    return view('pages.admin_dashboard');
})->middleware('auth');

Route::get('/hash-password', function () {
    return Hash::make('@dmin');
});


Route::get('/register', [RegisterController::class, 'register']);
Route::get('/register2', [RegisterController2::class, 'register2']);
Route::get('/register3', [RegisterController3::class, 'register3']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/login2', [LoginController2::class, 'login2']);
Route::get('/lupa_password', [ForgetPwController::class, 'step1']);
Route::get('/lupa_password2', [ForgetPwController2::class, 'step2']);
Route::get('/lupa_password3', [ForgetPwController3::class, 'step3']);
Route::get('/aboutus', [AboutusController::class, 'aboutus'])->name('aboutus');
Route::get('/settings', [AccountSettingsController::class, 'settingacc'])->name('settings');
Route::get('/passwordchg', [ChgPwController::class, 'passwordchg'])->name('passwordchg');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
//Route::get('/list_product', function () {
//    return view('pages.list_product');
//});

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

Route::get('/products', [ProductController::class, 'list'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'product']);
Route::post('/products/{id}/comment', [ProductController::class, 'submitComment']);
Route::get('/list_product', [ListProductController::class, 'index'])->name('list_product');

Route::get('/list_blog', function () {
    return view('pages.list_blog');
});
