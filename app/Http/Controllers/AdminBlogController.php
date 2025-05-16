<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function adminBlog(){
        $columns = ['Title', 'Content', 'Category', 'Image'];

        $rows = [
            [
                'Title' => 'Brokoli',
                'Content' => 'Sayuran hijau tinggi antioksidan.',
                'Category' => 'Bunga',
                'Image' => 'brokoli.jpg',
            ],
            [
                'Title' => 'Daun Singkong',
                'Content' => 'Biasa direbus atau dimasak santan.',
                'Category' => 'Daun',
                'Image' => 'daun_singkong.jpg',
            ],
            [
                'Title' => 'Jagung Manis',
                'Content' => 'Sumber karbohidrat yang manis dan lembut.',
                'Category' => 'Biji',
                'Image' => 'jagung.jpg',
            ],
        ];

        return view('pages.admin_blog', compact('columns', 'rows'));
    }
}
