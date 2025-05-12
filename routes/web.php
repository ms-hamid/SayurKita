<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\LoginController;

Route::get('/admin', [AdminDashboardController::class, 'adminDashboard']);
Route::get('/admin_banner', [AdminBannerController::class, 'adminBanner']);
Route::get('/admin_product', [AdminProductController::class, 'adminProduct']);
Route::get('/admin_blog', [AdminBlogController::class, 'adminBlog']);
Route::get('/admin_gallery', [AdminGalleryController::class, 'adminGallery']);
Route::get('/admin_category', [AdminCategoryController::class, 'adminCategory']);
Route::get('/admin_account', [AdminAccountController::class, 'adminAccount']);

Route::get('/account',function () {
    return view('pages.settingacc');
});

Route::get('/password',function () {
    return view('pages.passwordchg');
});

Route::get('/Login', [LoginController::class, 'Login_pengunjung']);
