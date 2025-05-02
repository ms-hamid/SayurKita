<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function adminBlog(){
        return view('pages.admin_blog');
    }
}
