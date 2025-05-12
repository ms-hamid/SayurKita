@extends('layouts.appsettings')

@section('title', 'Informasi Pribadi Akun')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Informasi Pribadi Akun</h1>
  <p class="text-gray-600 mb-6">Informasi dan aktivitas properti Anda secara real-time</p>

  <div class="flex items-center mb-6">
    <!-- Avatar Profile Picture -->
    <div class="relative">
      <img id="profileImage" src="https://via.placeholder.com/100" alt="Profile" class="w-24 h-24 rounded-full mr-4">
      <!-- Input File untuk Gambar -->
      <input type="file" id="imageInput" class="absolute bottom-0 right-0 opacity-0 w-6 h-6 cursor-pointer" onchange="previewImage(event)">
      <label for="imageInput" class="absolute bottom-0 right-0 text-white bg-gray-500 rounded-full p-1 cursor-pointer">
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

  <!-- Form -->
  <form>
    <div class="mb-6">
      <label for="fullName" class="block text-gray-700 font-semibold mb-2">Full Name</label>
      <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4">
        <input type="text" id="firstName" class="w-full lg:w-1/2 p-2 border border-gray-300 rounded" placeholder="First name">
        <input type="text" id="lastName" class="w-full lg:w-1/2 p-2 border border-gray-300 rounded" placeholder="Last name">
      </div>
    </div>

    <div class="mb-6">
      <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
      <input type="text" id="username" class="w-full p-2 border border-gray-300 rounded" placeholder="Username">
    </div>

    <div class="mb-6">
      <label for="phoneNumber" class="block text-gray-700 font-semibold mb-2">Nomor Handphone</label>
      <input type="text" id="phoneNumber" class="w-full p-2 border border-gray-300 rounded" placeholder="+62 0821-7064-0976">
    </div>

    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
      Perbarui
    </button>
  </form>

  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function() {
        const output = document.getElementById('profileImage');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
@endsection
