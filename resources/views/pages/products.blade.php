@extends('layouts.products')

@section('title', 'Products')

@section('content')
<div class="bg-gray-100 py-10 px-4 min-h-screen">
    <div class="max-w-6xl mx-auto space-y-6">

        {{-- DETAIL PRODUK --}}
        <div class="bg-white rounded-xl shadow-md flex flex-col md:flex-row overflow-hidden">
            <img src="{{ asset('images/bayam.jpg') }}" alt="Bayam" class="md:w-1/3 w-full object-cover h-64 md:h-auto">
            <div class="p-6 flex-1 space-y-3">
                <h2 class="text-xl font-bold">Bayam</h2>
                <div class="flex justify-between text-sm text-gray-600">
                    <span class="bg-gray-200 px-2 py-1 rounded-md">Sayuran Hijau</span>
                    <span class="bg-gray-200 px-2 py-1 rounded-md">05/05/2025</span>
                </div>
                <p class="text-gray-700 text-sm">
                    Bayam adalah sayuran hijau yang kaya akan nutrisi seperti zat besi, vitamin A, C, dan K. Daunnya yang lembut dan rasanya yang segar membuat bayam sering digunakan dalam berbagai hidangan seperti sayur bening, tumisan, atau sup. Bayam juga dikenal bermanfaat untuk menjaga kesehatan mata, tulang, dan daya tahan tubuh.
                </p>
            </div>
        </div>

        {{-- BAGIAN BAWAH: Company + Komentar + Artikel Terkait --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- COMPANY + KOMENTAR DALAM SATU KOTAK --}}
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-md p-6 space-y-6">

                    {{-- COMPANY PROFILE --}}
                    <div>
                        <h3 class="text-lg font-bold mb-2">Company Profile</h3>
                        <p class="text-sm text-gray-800">
                            Sayur Kita is an Indonesian vegetable export company committed to delivering fresh, high-quality produce to international markets. Partnering with local farmers, we provide a wide range of sustainably grown vegetables such as spinach, chili, and long beans. With strict quality control, reliable logistics, and a passion for healthy living, Sayur Kita ensures every shipment meets global standards while empowering rural communities and promoting eco-friendly agriculture.
                        </p>
                    </div>

                    {{-- KOMENTAR --}}
                    <div class="space-y-4">
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <div class="flex gap-4 items-start">
                                <div class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center text-white font-bold">M</div>
                                <div class="flex-1">
                                    <div class="flex justify-between text-sm">
                                        <p class="font-semibold">Muhammad Faiz</p>
                                        <p class="text-gray-500">15:00 05/05/2025</p>
                                    </div>
                                    <p class="mt-1 text-gray-700">Kol enak banget dibuat salad! Tambah mayones dikit, segar dan sehat.</p>

                                    {{-- Balasan --}}
                                    <div class="border-t border-gray-300 mt-3 pt-3 pl-6">
                                        <div class="flex gap-3 items-start">
                                            <div class="w-8 h-8 rounded-full bg-gray-600 flex items-center justify-center text-white font-bold">
                                                {{-- Icon Reply --}}
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
            </div>

            {{-- ARTIKEL TERKAIT --}}
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
