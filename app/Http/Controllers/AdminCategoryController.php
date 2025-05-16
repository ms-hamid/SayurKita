<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function adminCategory(){
        $columns = ['Category Name', 'Category Type'];

        $rows = [
            // Kategori untuk Product
            [
                'Category Name' => 'Vegetables',
                'Category Type' => 'Product',
            ],
            [
                'Category Name' => 'Fruits',
                'Category Type' => 'Product',
            ],
            [
                'Category Name' => 'Dairy Products',
                'Category Type' => 'Product',
            ],
            [
                'Category Name' => 'Snacks',
                'Category Type' => 'Product',
            ],
            [
                'Category Name' => 'Beverages',
                'Category Type' => 'Product',
            ],
        
            // Kategori untuk Blog
            [
                'Category Name' => 'Health Tips',
                'Category Type' => 'Blog',
            ],
            [
                'Category Name' => 'Recipes',
                'Category Type' => 'Blog',
            ],
            [
                'Category Name' => 'Nutrition Facts',
                'Category Type' => 'Blog',
            ],
            [
                'Category Name' => 'Farmer Stories',
                'Category Type' => 'Blog',
            ],
            [
                'Category Name' => 'Sustainability',
                'Category Type' => 'Blog',
            ],
        
            // Kategori untuk Gallery
            [
                'Category Name' => 'Farm Photos',
                'Category Type' => 'Gallery',
            ],
            [
                'Category Name' => 'Harvest Time',
                'Category Type' => 'Gallery',
            ],
            [
                'Category Name' => 'Behind The Scenes',
                'Category Type' => 'Gallery',
            ],
            [
                'Category Name' => 'Customer Moments',
                'Category Type' => 'Gallery',
            ],
            [
                'Category Name' => 'Events',
                'Category Type' => 'Gallery',
            ],
        ];        

        return view('pages.admin_category', compact('columns', 'rows'));
    }
}
