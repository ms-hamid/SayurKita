@extends('layouts.register')

@section('title', 'Register')

@section('content')
<div class="flex items-center justify-center gap-3 mb-4">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12">
    <h1 class="text-xl font-bold text-gray-800">Sayur Kita</h1>
</div>

<div class="text-center mb-6">
    <h2 class="text-xl font-bold mb-1">Buat Akun Sayurkita Anda</h2>
    <p class="text-sm text-gray-600">Masukan data akun Anda</p>
</div>

<form action="#" method="POST" class="space-y-4 text-left">
    @csrf
    <div class="flex gap-2">
        <input type="text" name="first_name" placeholder="Nama depan" class="w-1/2 p-2 border border-gray-300 rounded" required>
        <input type="text" name="last_name" placeholder="Nama belakang" class="w-1/2 p-2 border border-gray-300 rounded" required>
    </div>
    <input type="text" name="username" placeholder="Username" class="w-full p-2 border border-gray-300 rounded" required>
    <input type="password" name="password" placeholder="Password" class="w-full p-2 border border-gray-300 rounded" required>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="w-full p-2 border border-gray-300 rounded" required>
    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200">Berikutnya</button>
</form>

<p class="mt-4 text-sm text-gray-600 text-center">
    Sudah punya akun ? <a href="#" class="text-blue-600 hover:underline">Masuk</a>
</p>
@endsection
