<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function adminBanner(){
    $columns = ['Banner Image'];

    $rows = [
        [
            'Banner Image' => 'banner1.jpg',
        ],
        [
            'Banner Image' => 'banner2.jpg',
        ],
    ];

        return view('pages.admin_banner', compact('columns', 'rows'));
    }
}
