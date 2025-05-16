<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    public function adminAccount(){
        $columns = ['Username', 'Phone Number'];

        $rows = [
            [
                'Username' => 'john_doe',
                'Phone Number' => '081234567890',
            ],
            [
                'Username' => 'jane_smith',
                'Phone Number' => '082345678901',
            ],
            [
                'Username' => 'michael92',
                'Phone Number' => '083456789012',
            ],
            [
                'Username' => 'susan_lee',
                'Phone Number' => '084567890123',
            ],
            [
                'Username' => 'andy_walker',
                'Phone Number' => '085678901234',
            ],
            [
                'Username' => 'lisa_white',
                'Phone Number' => '086789012345',
            ],
            [
                'Username' => 'kevin_zhang',
                'Phone Number' => '087890123456',
            ],
            [
                'Username' => 'nina_rai',
                'Phone Number' => '088901234567',
            ],
            [
                'Username' => 'david_chen',
                'Phone Number' => '089012345678',
            ],
            [
                'Username' => 'sarah_kim',
                'Phone Number' => '081112223334',
            ],
            [
                'Username' => 'brian_tan',
                'Phone Number' => '082223334445',
            ],
            [
                'Username' => 'eliza_wong',
                'Phone Number' => '083334445556',
            ],
        ];
        return view('pages.admin_account', compact('columns', 'rows'));
    }
}
