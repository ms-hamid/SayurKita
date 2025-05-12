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
use App\Http\Controllers\ForgetPwController;
use App\Http\Controllers\ForgetPwController2;
use App\Http\Controllers\ForgetPwController3;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginController2;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterController2;
use App\Http\Controllers\RegisterController3;

Route::get('/admin', [AdminDashboardController::class, 'adminDashboard']);
Route::get('/admin_banner', [AdminBannerController::class, 'adminBanner']);
Route::get('/admin_product', [AdminProductController::class, 'adminProduct']);
Route::get('/admin_blog', [AdminBlogController::class, 'adminBlog']);
Route::get('/admin_gallery', [AdminGalleryController::class, 'adminGallery']);
Route::get('/admin_category', [AdminCategoryController::class, 'adminCategory']);
Route::get('/admin_account', [AdminAccountController::class, 'adminAccount']);

Route::get('/register', [RegisterController::class, 'register']);
Route::get('/register2', [RegisterController2::class, 'register2']);
Route::get('/register3', [RegisterController3::class, 'register3']);

Route::get('/login', [LoginController::class, 'login']);
Route::get('/login2', [LoginController2::class, 'login2']);

Route::get('/lupa_password', [ForgetPwController::class, 'step1']);
Route::get('/lupa_password2', [ForgetPwController2::class, 'step2']);
Route::get('/lupa_password3', [ForgetPwController3::class, 'step3']);

Route::get('/aboutus', [AboutusController::class, 'aboutus']);

Route::get('/account', function () {
    return view('pages.settingacc');
});

Route::get('/settingacc', function () {
    return view('pages.settingacc');
});

Route::get('/passwordchg', function () {
    return view('pages.passwordchg');
});

Route::get('/Login', [LoginController::class, 'Login_pengunjung']);

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/list_product', function () {
    return view('pages.list_product');
});

Route::get('/blog', function () {
    return view('pages.blog');
});
