@extends('layouts.register2')

@section('title', 'Register2')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md text-center">
    <!-- Logo + Text -->
    <div class="flex items-center justify-center mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="Sayur Kita Logo" class="w-12 h-12 mr-2">
        <span class="text-xl font-bold text-gray-800">Sayur Kita</span>
    </div>

    <h2 class="text-xl font-bold mb-1">Buat Akun Sayur kita Anda</h2>
    <p class="mb-6 text-gray-700">Masukan nomer Handphone Anda</p>
    
    <form action="#" method="POST">
        @csrf
        <input type="text" name="phone" placeholder="Nomer handphone" class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
        
        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700">Berikutnya</button>
    </form>
</div>
@endsection
