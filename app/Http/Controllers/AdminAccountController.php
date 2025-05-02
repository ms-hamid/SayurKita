<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    public function adminAccount(){
        return view('pages.admin_account');
    }
}
