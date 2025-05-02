<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function adminBanner(){
    $columns = ['Product name', 'Color', 'Category', 'Price', 'Action'];

    $rows = [
        [
            'Product name' => 'Apple MacBook Pro 17"',
            'Color' => 'Silver',
            'Category' => 'Laptop',
            'Price' => '$2999',
            'Action' => '<a href="#">Edit</a>'
        ],
        [
            'Product name' => 'Magic Mouse 2',
            'Color' => 'Black',
            'Category' => 'Accessories',
            'Price' => '$99',
            'Action' => '<a href="#">Edit</a>'
        ],
    ];

        return view('pages.admin_banner', compact('columns', 'rows'));
    }
}
