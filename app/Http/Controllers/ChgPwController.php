<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChgPwController extends Controller
{
    //
    public function passwordchg()
    {
        return view('pages.passwordchg');
    }
}
