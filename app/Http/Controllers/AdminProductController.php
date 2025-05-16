<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function adminProduct(){
        $columns = ['Product Name', 'Description', 'Category', 'Image'];

        $rows = [
            [
                'Product Name' => 'Brokoli',
                'Description' => 'Sayuran hijau tinggi antioksidan.',
                'Category' => 'Bunga',
                'Image' => 'brokoli.jpg',
            ],
            [
                'Product Name' => 'Wortel',
                'Description' => 'Akar berwarna oranye kaya vitamin A.',
                'Category' => 'Umbi',
                'Image' => 'wortel.jpg',
            ],
            [
                'Product Name' => 'Bayam',
                'Description' => 'Daun hijau yang bergizi tinggi.',
                'Category' => 'Daun',
                'Image' => 'bayam.jpg',
            ],
            [
                'Product Name' => 'Kol',
                'Description' => 'Sayuran bulat berlapis-lapis.',
                'Category' => 'Daun',
                'Image' => 'kol.jpg',
            ],
            [
                'Product Name' => 'Tomat',
                'Description' => 'Buah merah segar kaya vitamin C.',
                'Category' => 'Buah',
                'Image' => 'tomat.jpg',
            ],
            [
                'Product Name' => 'Terong',
                'Description' => 'Sayuran ungu berbentuk lonjong.',
                'Category' => 'Buah',
                'Image' => 'terong.jpg',
            ],
            [
                'Product Name' => 'Lobak',
                'Description' => 'Umbi putih yang menyegarkan.',
                'Category' => 'Umbi',
                'Image' => 'lobak.jpg',
            ],
            [
                'Product Name' => 'Selada',
                'Description' => 'Daun hijau renyah untuk salad.',
                'Category' => 'Daun',
                'Image' => 'selada.jpg',
            ],
            [
                'Product Name' => 'Paprika',
                'Description' => 'Sayuran warna-warni dengan rasa manis.',
                'Category' => 'Buah',
                'Image' => 'paprika.jpg',
            ],
            [
                'Product Name' => 'Kembang Kol',
                'Description' => 'Sayuran bunga putih kaya serat.',
                'Category' => 'Bunga',
                'Image' => 'kembangkol.jpg',
            ],
        ];
        
        return view('pages.admin_product', compact('columns', 'rows'));
    }
}
