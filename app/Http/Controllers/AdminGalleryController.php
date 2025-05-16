<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function adminGallery(){
        $columns = ['Title', 'Description', 'Category', 'Image'];

        $rows = [
            [
                'Title' => 'Bayam Hijau',
                'Description' => 'Tanaman daun hijau segar dengan tekstur lembut.',
                'Category' => 'Daun',
                'Image' => 'bayam.jpg',
            ],
            [
                'Title' => 'Wortel Segar',
                'Description' => 'Akar oranye kaya beta-karoten.',
                'Category' => 'Akar',
                'Image' => 'wortel.jpg',
            ],
            [
                'Title' => 'Sawi Putih',
                'Description' => 'Daun lebar berwarna putih kekuningan.',
                'Category' => 'Daun',
                'Image' => 'sawi_putih.jpg',
            ],
            [
                'Title' => 'Kangkung Air',
                'Description' => 'Sayur tumisan favorit keluarga.',
                'Category' => 'Daun',
                'Image' => 'kangkung.jpg',
            ],
            [
                'Title' => 'Tomat Merah',
                'Description' => 'Buah segar yang sering dianggap sayur.',
                'Category' => 'Buah',
                'Image' => 'tomat.jpg',
            ]
        ];

        return view('pages.admin_gallery', compact('columns', 'rows'));
    }
}
