<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBannerController
{
    public function adminBanner(){
        return view('pages.admin_banner');
    }
}
