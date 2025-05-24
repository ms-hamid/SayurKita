<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminBanner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            'image_path' => 'Image'
        ];
        $data = AdminBanner::select(array_keys($columns))->get();

        $addFields = [
            [
            'type' => 'file', 
            'name' => 'image', 
            'label' => 'Select Image',
            'required' => true
            ]
        ];
        
        $editFields = [
            [
            'type' => 'file', 
            'name' => 'image', 
            'label' => 'Select Image',
            'required' => true
            ]
        ];

        return view('pages.admin_banner', compact('data', 'columns', 'addFields', 'editFields'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = $request->only([]);
            
            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('banner', $filename, 'public');
                $data['image_path'] = $path;
            }

        AdminBanner::create($data);

            return redirect()->route('admin_banner.index')
                ->with('success', 'Banner berhasil ditambahkan!');
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
        $product = AdminBanner::findOrFail($id);

        // Validasi input
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = $request->only([]);
            
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

            return redirect()->route('admin_banner.index')
                ->with('success', 'Banner berhasil diupdate!');
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
        try {
            $product = AdminBanner::findOrFail($id);
            
            // Hapus file gambar jika ada
            if ($product->image_path && Storage::disk('public')->exists($product->image_path)) {
                Storage::disk('public')->delete($product->image_path);
            }
            
            $product->delete();

            return redirect()->route('admin_banner.index')
                ->with('success', 'Banner berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Get product data for AJAX (untuk modal edit)
     */
    public function getBanner($id)
    {
        try {
            $product = AdminBanner::findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => $banner
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Banner not found'
            ], 404);
        }
    }
}
