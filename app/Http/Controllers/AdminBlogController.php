<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminBlog;
use App\Models\AdminCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            'title' => 'Blog Title',
            'content' => 'Content',
            'category_id' => 'Category',
            'image_path' => 'Image'
        ];
        $data = AdminBlog::select(array_keys($columns))->get();

        $category = AdminCategory::where('category_type', 'Blog')
                ->pluck('category_name', 'category_id')
                ->toArray();

        $addFields = [
            [
                'type' => 'text', 
                'name' => 'title', 
                'label' => 'Blog Title',
                'placeholder' => 'Enter blog name',
                'required' => true
            ],
            [
                'type' => 'textarea', 
                'name' => 'content', 
                'label' => 'Content',
                'placeholder' => 'Enter blog content',
                'required' => true
            ],
            [
                'type' => 'file', 
                'name' => 'image', 
                'label' => 'Select Image',
                'required' => false
            ],
            [
                'type' => 'select', 
                'name' => 'category_id', 
                'label' => 'Category',
                'options' => $category,
                'placeholder' => 'Select category',
                'required' => false
            ],
        ];

        $editFields = [
            [
                'type' => 'text', 
                'name' => 'title', 
                'label' => 'Blog Title',
                'placeholder' => 'Enter product name',
                'required' => true
            ],
            [
                'type' => 'textarea', 
                'name' => 'content', 
                'label' => 'Content',
                'placeholder' => 'Enter blog content',
                'required' => true
            ],
            [
                'type' => 'file', 
                'name' => 'image', 
                'label' => 'Select New Image',
                'required' => false
            ],
            [
                'type' => 'select', 
                'name' => 'category_id', 
                'label' => 'Category',
                'options' => $category,
                'placeholder' => 'Select category',
                'required' => false
            ],
        ];

        return view('pages.admin_blog', compact('data', 'columns', 'addFields', 'editFields'));
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
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = $request->only(['title', 'content', 'image_path', 'category_id']);
            
            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('blog', $filename, 'public');
                $data['image_path'] = $path;
            }

        AdminBlog::create($data);

            return redirect()->route('admin_blog.index')
                ->with('success', 'Blog berhasil ditambahkan!');
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
