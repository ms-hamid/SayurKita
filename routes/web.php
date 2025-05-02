<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account',function () {
    return view('pages.settingacc');
});

Route::get('/password',function () {
    return view('pages.passwordchg');
});
