<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function adminCategory(){
        $columns = ['Category Name', 'Category Type', 'Action'];

        $rows = [
            // Kategori untuk Product
            [
                'Category Name' => 'Vegetables',
                'Category Type' => 'Product',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Fruits',
                'Category Type' => 'Product',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Dairy Products',
                'Category Type' => 'Product',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Snacks',
                'Category Type' => 'Product',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Beverages',
                'Category Type' => 'Product',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
        
            // Kategori untuk Blog
            [
                'Category Name' => 'Health Tips',
                'Category Type' => 'Blog',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Recipes',
                'Category Type' => 'Blog',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Nutrition Facts',
                'Category Type' => 'Blog',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Farmer Stories',
                'Category Type' => 'Blog',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Sustainability',
                'Category Type' => 'Blog',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
        
            // Kategori untuk Gallery
            [
                'Category Name' => 'Farm Photos',
                'Category Type' => 'Gallery',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Harvest Time',
                'Category Type' => 'Gallery',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Behind The Scenes',
                'Category Type' => 'Gallery',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Customer Moments',
                'Category Type' => 'Gallery',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Category Name' => 'Events',
                'Category Type' => 'Gallery',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
        ];        

        return view('pages.admin_category', compact('columns', 'rows'));
    }
}
