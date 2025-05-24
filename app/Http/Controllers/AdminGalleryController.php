<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminGallery;
use App\Models\AdminCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            'title' => 'Gallery Title',
            'description' => 'Description',
            'category_id' => 'Category',
            'image_path' => 'Image',
        ];
        $data = AdminGallery::select(array_keys($columns))->get();

        $category = AdminCategory::where('category_type', 'Gallery')
                ->pluck('category_name', 'category_id')
                ->toArray();
        
        $addFields = [
            [
                'type' => 'text', 
                'name' => 'title', 
                'label' => 'Product Name',
                'placeholder' => 'Enter product name',
                'required' => true
            ],
            [
                'type' => 'textarea', 
                'name' => 'description', 
                'label' => 'Description',
                'placeholder' => 'Enter product description',
                'required' => true
            ],
            [
                'type' => 'file', 
                'name' => 'image', 
                'label' => 'Select Image',
                'required' => true
            ],
            [
                'type' => 'select', 
                'name' => 'category_id', 
                'label' => 'Category',
                'options' => $category,
                'placeholder' => 'Select category',
                'required' => true
            ],
        ];

        $editFields = [
            [
                'type' => 'text', 
                'name' => 'title', 
                'label' => 'Gallery Name',
                'placeholder' => 'Enter gallery name',
                'required' => true
            ],
            [
                'type' => 'textarea', 
                'name' => 'description', 
                'label' => 'Description',
                'placeholder' => 'Enter gallery description',
                'required' => true
            ],
            [
                'type' => 'file', 
                'name' => 'image', 
                'label' => 'Select New Image',
                'required' => true
            ],
            [
                'type' => 'select', 
                'name' => 'category_id', 
                'label' => 'Category',
                'options' => $category,
                'placeholder' => 'Select category',
                'required' => true
            ],
        ];

        return view('pages.admin_gallery', compact('data', 'columns', 'addFields', 'editFields'));
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:category,category_id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = $request->only(['title', 'description', 'image_path', 'category_id']);
            
            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('gallery', $filename, 'public');
                $data['image_path'] = $path;
            }

        AdminGallery::create($data);

            return redirect()->route('admin_gallery.index')
                ->with('success', 'Gallery berhasil ditambahkan!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
