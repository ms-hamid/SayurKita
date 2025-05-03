<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function adminBlog(){
        $columns = ['Title', 'Content', 'Category', 'Image', 'Action'];

        $rows = [
            [
                'Title' => 'Brokoli',
                'Content' => 'Sayuran hijau tinggi antioksidan.',
                'Category' => 'Bunga',
                'Image' => 'brokoli.jpg',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Title' => 'Daun Singkong',
                'Content' => 'Biasa direbus atau dimasak santan.',
                'Category' => 'Daun',
                'Image' => 'daun_singkong.jpg',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Title' => 'Jagung Manis',
                'Content' => 'Sumber karbohidrat yang manis dan lembut.',
                'Category' => 'Biji',
                'Image' => 'jagung.jpg',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
        ];

        return view('pages.admin_blog', compact('columns', 'rows'));
    }
}
