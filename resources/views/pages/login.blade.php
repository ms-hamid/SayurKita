@extends('layouts.login')

@section('title', 'Login 1')

@section('content')
<div class="text-center">
    <!-- Logo + Sayur Kita -->
    <div class="flex items-center justify-center mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 mr-2">
        <h1 class="text-xl font-bold text-gray-800">Sayur Kita</h1>
    </div>

    <!-- Judul -->
    <h2 class="text-lg font-bold mb-2">MASUK</h2>
    <p class="text-sm text-gray-700 mb-4">Gunakan Akun Sayur Kita Anda</p>

    <!-- Form -->
    <form action="#" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Phone, Username"
               class="w-full px-4 py-2 border border-gray-300 rounded-md mb-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

        <a href="#" class="text-sm text-blue-600 hover:underline block mb-4">Lupa Nama Pengguna Anda?</a>

        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700">Berikutnya</button>

        <p class="text-sm text-gray-800 mt-4">Baru menggunakan SayurKita? <a href="#" class="text-blue-600 hover:underline">Buat Akun</a></p>
    </form>
</div>
@endsection
