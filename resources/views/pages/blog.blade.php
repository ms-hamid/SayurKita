@extends('layouts.blog')

@section('title', 'Blog')

@section('content')
<div class="bg-gray-100 py-10 px-4 min-h-screen">
    <div class="max-w-6xl mx-auto space-y-6">
        
        {{-- Gambar Header dengan Teks di Tengah --}}
        <div class="relative bg-white shadow-xl rounded-xl overflow-hidden">
            <img src="{{ asset('images/sayur kol.jpg') }}" alt="Sayur Kol" class="w-full h-64 object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="text-3xl md:text-4xl font-bold text-black drop-shadow-lg">Blog Sayur Kita</h1>
            </div>
        </div>


        {{-- Konten Artikel dan Sidebar --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Konten Utama --}}
            <div class="lg:col-span-2 bg-white shadow-xl rounded-xl p-6">
                <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                    <span class="font-medium">Sayur Kol</span>
                    <span>20:00 01/05/2025</span>
                </div>
                <p class="text-gray-700 leading-relaxed">
                    Kol, atau kubis, adalah salah satu sayuran yang paling mudah ditemui di pasar tradisional hingga supermarket.
                    Di balik bentuknya yang sederhana, kol menyimpan berbagai manfaat penting bagi tubuh.
                    Kaya akan vitamin C, serat, dan antioksidan, kol sangat baik untuk mendukung sistem imun, 
                    melancarkan pencernaan, dan menjaga kesehatan kulit.
                </p>

                {{-- Komentar --}}
                <div class="mt-10 space-y-4">
                    {{-- Komentar Utama --}}
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <div class="flex gap-4 items-start">
                            <div class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center text-white font-bold">M</div>
                            <div class="flex-1">
                                <div class="flex justify-between text-sm">
                                    <p class="font-semibold">Muhammad Faiz</p>
                                    <p class="text-gray-500">15:00 05/05/2025</p>
                                </div>
                                <p class="mt-1 text-gray-700">Kol enak banget dibuat salad! Tambah mayones dikit, segar dan sehat.</p>

                                {{-- Balasan Komentar --}}
                                <div class="border-t border-gray-300 mt-3 pt-3 pl-6">
                                    <div class="flex gap-3 items-start">
                                        <div class="w-8 h-8 rounded-full bg-gray-600 flex items-center justify-center text-white font-bold">
                                            {{-- Ikon Reply --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M3 6h7m-7 8h7m4 4l4-4m0 0l-4-4m4 4H10" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm">
                                                <p class="font-semibold text-blue-600">@andakitchen</p>
                                                <p class="text-gray-500">15:30 05/05/2025</p>
                                            </div>
                                            <p class="mt-1 text-gray-700">Wah benar Kak, saya juga suka buat salad pakai kol dan wortel. Praktis banget!</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Sidebar Artikel Terkait --}}
            <div class="space-y-4">
                <h2 class="text-xl font-semibold text-gray-700">Artikel Terkait</h2>

                <div class="flex gap-4 bg-white shadow-md rounded-lg p-3">
                    <img src="{{ asset('images/wortel.jpg') }}" alt="Wortel" class="w-20 h-20 object-cover rounded-md">
                    <div>
                        <h3 class="font-bold text-sm">Sayur Wortel</h3>
                        <p class="text-xs text-gray-600">Wortel dikenal kaya beta-karoten dan vitamin A...</p>
                    </div>
                </div>

                <div class="flex gap-4 bg-white shadow-md rounded-lg p-3">
                    <img src="{{ asset('images/brokoli.jpg') }}" alt="Brokoli" class="w-20 h-20 object-cover rounded-md">
                    <div>
                        <h3 class="font-bold text-sm">Sayur Brokoli</h3>
                        <p class="text-xs text-gray-600">Brokoli sangat kaya akan vitamin C dan serat...</p>
                    </div>
                </div>

                <div class="flex gap-4 bg-white shadow-md rounded-lg p-3">
                    <img src="{{ asset('images/tomat.jpg') }}" alt="Tomat" class="w-20 h-20 object-cover rounded-md">
                    <div>
                        <h3 class="font-bold text-sm">Manfaat Tomat</h3>
                        <p class="text-xs text-gray-600">Tomat segar kaya akan likopen dan bagus untuk kulit...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
