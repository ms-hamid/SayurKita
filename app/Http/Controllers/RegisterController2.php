<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController2 extends Controller
{
    public function register2(){
        return view('pages.register2');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20|unique:users,phone_number',
        ]);

        $userId = session('register_user_id');

        if (!$userId) {
            return redirect('/register')->with('error', 'Silakan isi data tahap 1 terlebih dahulu.');
        }

        $user = User::findOrFail($userId);
        $user->update([
            'phone_number' => $request->phone,
        ]);

        return redirect('/register3')->with('success', 'Nomor handphone berhasil disimpan!');
    }
}


