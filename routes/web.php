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
use App\Http\Controllers\landingpageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CompanyAboutController;
use App\Http\Controllers\CompanyStatisticController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\ListBlogController;
use App\Http\Controllers\OurPrincipleController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ProjectClientController;
use App\Http\Controllers\ShowcaseController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ProfileController;

//Landing Page
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/team', [FrontController::class, 'team'])->name('front.team');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');


//Admin Routes
Route::get('/admin', [AdminDashboardController::class, 'index']);
Route::resource('admin_banner', AdminBannerController::class);
Route::resource('admin_product', AdminProductController::class);
Route::resource('admin_blog', AdminBlogController::class);
Route::resource('admin_gallery', AdminGalleryController::class);
Route::resource('admin_category', AdminCategoryController::class);
Route::resource('admin_account', AdminAccountController::class);

// Note: Breeze typically adds its own auth routes.
// If not already present, a line like `require __DIR__.'/auth.php';` might be needed
// or Breeze might have added routes directly. Assuming they are present from breeze:install.
Route::get('/aboutus', [AboutusController::class, 'aboutus'])->name('aboutus');
Route::get('/settings', [AccountSettingsController::class, 'settingacc'])->name('settings');

// Password change functionality is usually part of Breeze's profile management or password reset.
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::post('/blog/{id}/comment', [BlogController::class, 'storeComment'])->name('blog.comment');
Route::get('/list_blog', [ListBlogController::class, 'list_blog'])->name('list_blog');
Route::get('/products', [ProductController::class, 'list'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'product']);
Route::post('/products/{id}/comment', [ProductController::class, 'submitComment']);
Route::get('/list_product', [ListProductController::class, 'index'])->name('list_product');


//Landing Page New Admin Routes 
Route::resource('statistics', CompanyStatisticController::class);
Route::resource('abouts', CompanyAboutController::class);
Route::resource('showcases', ShowcaseController::class);
Route::resource('principles', OurPrincipleController::class);
Route::resource('testimonials', TestimonialController::class);
Route::resource('clients', ProjectClientController::class);
Route::resource('teams', OurTeamController::class);
Route::resource('appointments', AppointmentController::class);
Route::resource('hero_sections', HeroSectionController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
