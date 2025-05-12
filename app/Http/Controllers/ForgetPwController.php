<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPwController extends Controller
{
    public function step1(){
        return view('pages.step1');
    }
}
