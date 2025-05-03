<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function adminGallery(){
        $columns = ['Title', 'Description', 'Category', 'Image', 'Action'];

        $rows = [
            [
                'Title' => 'Bayam Hijau',
                'Description' => 'Tanaman daun hijau segar dengan tekstur lembut.',
                'Category' => 'Daun',
                'Image' => 'bayam.jpg',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Title' => 'Wortel Segar',
                'Description' => 'Akar oranye kaya beta-karoten.',
                'Category' => 'Akar',
                'Image' => 'wortel.jpg',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Title' => 'Sawi Putih',
                'Description' => 'Daun lebar berwarna putih kekuningan.',
                'Category' => 'Daun',
                'Image' => 'sawi_putih.jpg',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Title' => 'Kangkung Air',
                'Description' => 'Sayur tumisan favorit keluarga.',
                'Category' => 'Daun',
                'Image' => 'kangkung.jpg',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Title' => 'Tomat Merah',
                'Description' => 'Buah segar yang sering dianggap sayur.',
                'Category' => 'Buah',
                'Image' => 'tomat.jpg',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ]
        ];

        return view('pages.admin_gallery', compact('columns', 'rows'));
    }
}
