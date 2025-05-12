@extends('layouts.login')

@section('title', 'Login 2')

@section('content')
<div class="text-center">
    <!-- Logo + Sayur Kita -->
    <div class="flex items-center justify-center mb-3">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 mr-2">
        <h1 class="text-xl font-bold text-gray-800">Sayur Kita</h1>
    </div>

    <!-- Email -->
    <p class="text-md text-gray-700 font-semibold mb-2">email.test@example.com</p>

    <!-- Judul -->
    <p class="text-sm text-gray-800 mb-4">Masukan Kata Sandi Anda</p>

    <!-- Form -->
    <form action="#" method="POST">
        @csrf
        <input type="password" name="password" placeholder="Kata Sandi"
               class="w-full px-4 py-2 border border-gray-300 rounded-md mb-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

        <a href="#" class="text-sm text-blue-600 hover:underline block mb-4">Lupa Kata Sandi?</a>

        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700">Berikutnya</button>
    </form>
</div>
@endsection
