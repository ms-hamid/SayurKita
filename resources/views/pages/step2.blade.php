@extends('layouts.lupa_password')

@section('title', 'Lupa Password 2')

@section('content')
<div class="flex items-center justify-center mb-4">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12 mr-2">
    <h1 class="text-xl font-bold text-gray-800">Sayur Kita</h1>
</div>

<div class="text-center">
    <p class="text-md mt-2 font-medium text-gray-800">082170640976</p>
    <h2 class="text-lg font-bold mt-1">Verifikasi Nomor Anda</h2>
    <p class="text-sm text-gray-700 mb-4">Masukan kode yang kami kirim ke nomor Anda</p>

    <form action="#" method="POST" class="space-y-4">
        @csrf
        <div class="flex justify-center space-x-2 mb-4">
            @for ($i = 0; $i < 4; $i++)
                <input type="text" name="code[]" maxlength="1"
                       class="w-12 h-12 text-center border border-gray-300 rounded-md text-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            @endfor
        </div>

        <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700">
            Berikutnya
        </button>
    </form>
</div>
@endsection
