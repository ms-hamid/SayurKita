<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function tampilkan($id, $nama) { 
        return view('list_barang', ['id' => $id, 'nama' => $nama]); 
    }
}
