@extends('layouts.appsettings')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Ubah Informasi Password</h1>
    <p class="text-gray-600 mb-6">Informasi dan aktivitas properti Anda secara real-time</p>

    <div class="flex items-center mb-6">
    <img src="https://via.placeholder.com/100" alt="Profile" class="w-24 h-24 rounded-full mr-4">
    <div>
        <p class="font-semibold text-lg">Muhammad, Faiz</p>
        <p class="text-sm text-gray-500">Faiz271204</p>
        <p class="text-sm text-gray-500">082170640976</p>
    </div>
    </div>

    <!-- Form -->
    <div class="mt-8 bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold mb-4">Password</h3>
        <p class="text-sm text-gray-500 mb-6">Ubah kata sandi Anda saat ini</p>

        <form class="space-y-6">
            <!-- Old Password -->
            <div class="mb-4">
                <label for="old_password" class="block text-gray-700">Kata Sandi Lama</label>
                <input type="password" id="old_password" name="old_password" placeholder="Password lama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <!-- New Password -->
            <div class="mb-4">
                <label for="new_password" class="block text-gray-700">Kata Sandi Baru</label>
                <input type="password" id="new_password" name="new_password" placeholder="Password baru" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <!-- Confirm New Password -->
            <div class="mb-4">
                <label for="confirm_password" class="block text-gray-700">Konfirmasi Password Baru</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password baru" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <!-- Update Button -->
            <div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">Perbarui</button>
            </div>
        </form>
    </div>
@endsection
