<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function adminBanner(){
    $columns = ['Banner Image', 'Action'];

    $rows = [
        [
            'Banner Image' => 'banner1.jpg',
            'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>'
        ],
        [
            'Banner Image' => 'banner2.jpg',
            'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>'
        ],
    ];

        return view('pages.admin_banner', compact('columns', 'rows'));
    }
}
