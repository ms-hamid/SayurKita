<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController
{
    public function adminDashboard(){
        return view('pages.admin_dashboard');
    }
}
