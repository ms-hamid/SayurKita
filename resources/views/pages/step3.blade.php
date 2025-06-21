@extends('layouts.lupa_password')

@section('title', 'Lupa Password 3')

@section('content')
<div class="flex items-center justify-center mb-4">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12 mr-2">
    <h1 class="text-xl font-bold text-gray-800">Sayur Kita</h1>
</div>

<div class="text-center">
    <p class="text-md mt-2 font-medium text-gray-800">082170640976</p>
    <h2 class="text-lg font-bold mt-1">Confirm Your New Password</h2>
    <p class="text-sm text-gray-700 mb-4">Enter Your New Password</p>

    <form action="#" method="POST">
        @csrf
        <input type="password" name="password" placeholder="New Password"
               class="w-full px-4 py-2 border border-gray-300 rounded-md mb-2 focus:outline-none focus:ring-2 focus:ring-blue-500">

        <input type="password" name="password_confirmation" placeholder="Confirm New Password"
               class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500">

        <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700">
            Continue
        </button>
    </form>
</div>
@endsection
