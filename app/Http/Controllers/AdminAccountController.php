<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    public function adminAccount(){
        $columns = ['Username', 'Phone Number', 'Action'];

        $rows = [
            [
                'Username' => 'john_doe',
                'Phone Number' => '081234567890',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'jane_smith',
                'Phone Number' => '082345678901',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'michael92',
                'Phone Number' => '083456789012',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'susan_lee',
                'Phone Number' => '084567890123',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'andy_walker',
                'Phone Number' => '085678901234',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'lisa_white',
                'Phone Number' => '086789012345',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'kevin_zhang',
                'Phone Number' => '087890123456',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'nina_rai',
                'Phone Number' => '088901234567',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'david_chen',
                'Phone Number' => '089012345678',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'sarah_kim',
                'Phone Number' => '081112223334',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'brian_tan',
                'Phone Number' => '082223334445',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
            [
                'Username' => 'eliza_wong',
                'Phone Number' => '083334445556',
                'Action' => '<a href="#">Edit</a><br><a href="#">Delete</a>',
            ],
        ];
        return view('pages.admin_account', compact('columns', 'rows'));
    }
}
