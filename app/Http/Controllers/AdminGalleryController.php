<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGalleryController
{
    public function adminGallery(){
        return view('pages.admin_gallery');
    }
}
