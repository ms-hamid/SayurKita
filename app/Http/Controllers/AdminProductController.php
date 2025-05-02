<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function adminProduct(){
        return view('pages.admin_product');
    }
}
