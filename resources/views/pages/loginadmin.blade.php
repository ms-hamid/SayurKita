@extends('layouts.loginadmin')

@section('title', 'Login Admin Page')

@section('content')
    <h2 class="text-2xl font-bold mb-6 text-center">Login Admin</h2>

    @if (session('error'))
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <div class="mb-4">
            <label for="username" class="block mb-1 font-semibold">Username</label>
            <input type="text" name="username" id="username" class="w-full border rounded px-3 py-2" required autofocus>
        </div>

        <div class="mb-4">
            <label for="password" class="block mb-1 font-semibold">Password</label>
            <input type="password" name="password" id="password" class="w-full border rounded px-3 py-2" required>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Login
        </button>
    </form>
@endsection
