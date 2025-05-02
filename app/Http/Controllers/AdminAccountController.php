<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAccountController
{
    public function adminAccount(){
        return view('pages.admin_account');
    }
}
