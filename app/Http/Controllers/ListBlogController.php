<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ListBlogController extends Controller
{
    public function list_blog()
    {
        $blogs = Blog::with('category')->latest()->get();

    // Ambil kategori unik dari relasi
    $categories = $blogs->pluck('category.category_name')->filter()->unique();

    return view('pages.list_blog', compact('blogs', 'categories')); 
    }
}
