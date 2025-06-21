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

<<<<<<< Updated upstream
        // Filter berdasarkan kategori (jika ada)
        if ($request->has('categories') && is_array($request->category)) {
=======
        // Filter berdasarkan kategori
        if ($request->has('category') && is_array($request->category)) {
>>>>>>> Stashed changes
            $query->whereIn('category_id', $request->category);
        }

        // Sortir
        if ($request->sort === 'terbaru') {
            $query->orderBy('created_at', 'desc');
        } elseif ($request->sort === 'az') {
            $query->orderBy('name', 'asc');
        }

        // ✅ Pagination ditambahkan di sini (tanpa konfigurasi)
        $vegetables = $query->paginate(12)->withQueryString();  

        $categories = Category::where('category_type', 'product')->get();

        return view('pages.list_product', compact('vegetables', 'categories'));
    }
}
