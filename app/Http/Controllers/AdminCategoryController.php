<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            'category_name' => 'Category Name',
            'category_type' => 'Category Type',
        ];
        $data = AdminCategory::select(array_keys($columns))->get();

        $addFields = [
            [
                'type' => 'text', 
                'name' => 'category_name', 
                'label' => 'Category Name',
                'placeholder' => 'Enter category name',
                'required' => true
            ],
            [
                'type' => 'select', 
                'name' => 'category_type', 
                'label' => 'Category',
                'options' => [
                    1 => 'Product',
                    2 => 'Blog',
                    3 => 'Gallery',
                ], 
                'placeholder' => 'Select Category Type',
                'required' => true
            ],
        ];

        $editFields = [
            [
                'type' => 'text', 
                'name' => 'category', 
                'label' => 'Category Name',
                'placeholder' => 'Enter category name',
                'required' => true
            ],
            [
                'type' => 'select', 
                'name' => 'category_type', 
                'label' => 'Category',
                'options' => [
                    1 => 'Product',
                    2 => 'Blog',
                    3 => 'Gallery',
                ], 
                'placeholder' => 'Select Category Type',
                'required' => true
            ],
        ];

        return view('pages.admin_category', compact('data', 'columns', 'addFields', 'editFields'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'categor_name' => 'required|string|max:255',
            'category_type' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = $request->only(['category_name', 'category_type']);

        AdminCategory::create($data);

            return redirect()->route('admin_category.index')
                ->with('success', 'Category berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = AdminProduct::findOrFail($id);

        // Validasi input
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
            'category_type' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = $request->only(['category_name',  'category_type']);
            
            // Handle file upload
            if ($request->hasFile('image')) {
                // Hapus file lama jika ada
                if ($product->image_path && Storage::disk('public')->exists($product->image_path)) {
                    Storage::disk('public')->delete($product->image_path);
                }
                
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('products', $filename, 'public');
                $data['image_path'] = $path;
            }

            $product->update($data);

            return redirect()->route('admin_product.index')
                ->with('success', 'Category berhasil diupdate!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
