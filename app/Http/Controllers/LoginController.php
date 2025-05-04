<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login_pengunjung () {
        return view('pages.Login_pengunjung');
    }
}
