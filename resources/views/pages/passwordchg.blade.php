@extends('layouts.appsettings')

@section('title', 'Ubah Password')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Ubah Informasi Password</h1>
  <p class="text-gray-600 mb-6">Informasi dan aktivitas properti Anda secara real-time</p>

  <div class="flex items-center mb-6">
    <div class="relative">
      <img id="profileImage" src="https://via.placeholder.com/100" alt="Profile" class="w-24 h-24 rounded-full mr-4 object-cover">
      <input type="file" id="imageInput" class="absolute bottom-0 right-0 opacity-0 w-6 h-6 cursor-pointer" onchange="previewImage(event)">
      <label for="imageInput" class="absolute bottom-0 right-0 bg-gray-500 text-white rounded-full p-1 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.5-4.5M19.5 5.5L15 10m-4.5 4.5L5.5 15m0 0L10 19.5M5.5 15L10 10" />
        </svg>
      </label>
    </div>
    <div>
      <p class="font-semibold text-lg">Muhammad, Faiz</p>
      <p class="text-sm text-gray-500">Faiz271204</p>
      <p class="text-sm text-gray-500">082170640976</p>
    </div>
  </div>

  <div class="mt-8 bg-white p-6 rounded-lg shadow-lg">
    <h3 class="text-xl font-semibold mb-4">Password</h3>
    <p class="text-sm text-gray-500 mb-6">Ubah kata sandi Anda saat ini</p>

    <form class="space-y-6">
      <div>
        <label for="old_password" class="block text-gray-700">Kata Sandi Lama</label>
        <input type="password" id="old_password" name="old_password" placeholder="Password lama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      </div>

      <div>
        <label for="new_password" class="block text-gray-700">Kata Sandi Baru</label>
        <input type="password" id="new_password" name="new_password" placeholder="Password baru" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      </div>

      <div>
        <label for="confirm_password" class="block text-gray-700">Konfirmasi Password Baru</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password baru" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      </div>

      <div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
          Perbarui
        </button>
      </div>
    </form>
  </div>

  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function () {
        document.getElementById('profileImage').src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
@endsection
