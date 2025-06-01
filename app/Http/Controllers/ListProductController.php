<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ListProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Filter berdasarkan kategori (jika ada)
        if ($request->has('category') && is_array($request->category)) {
            $query->whereIn('category_id', $request->category);
        }

        // Sortir berdasarkan pilihan (terbaru / A-Z)
        if ($request->sort === 'terbaru') {
            $query->orderBy('created_at', 'desc');
        } elseif ($request->sort === 'az') {
            $query->orderBy('name', 'asc');
        }

        $vegetables = $query->get();

        // Ambil kategori khusus untuk produk
        $categories = Category::where('category_type', 'product')->get();

        return view('pages.list_product', compact('vegetables', 'categories'));
    }
}
