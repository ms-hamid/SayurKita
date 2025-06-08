<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'phone_number' => 'required|string|max:255|unique:users,phone_number',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
             'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'username' => $validated['username'],
            'phone_number' => $validated['phone_number'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect('/register')->with('success', 'Akun berhasil dibuat!');
    }
}


