<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function gallery()
    {
        // Ambil semua data galeri
        $vegetables = Gallery::orderBy('created_at', 'desc')->get();

        // Ambil kategori unik
        $categories = $vegetables->pluck('category.category_name')->unique();

        return view('pages.gallery', compact('vegetables', 'categories'));
    }
}
