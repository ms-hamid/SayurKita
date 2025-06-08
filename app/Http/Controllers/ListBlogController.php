<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBlogController extends Controller
{
    public function list_blog()
    {
        return view('pages.list_blog');
    }
}
