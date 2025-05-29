<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Halaman Utama Product
    public function product()
    {
        return view('pages.products');
    }

    //Halaman List Product 
    public function list()
    {
        return view('pages.list_product');
    }
}
