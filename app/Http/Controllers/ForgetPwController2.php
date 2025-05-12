<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPwController2 extends Controller
{
    public function step2(){
        return view('pages.step2');
    }
}
