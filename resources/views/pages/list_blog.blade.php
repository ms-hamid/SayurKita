@extends('layouts.list_product')

@section('title', 'List Blog Page')

@section('content')
@php
    $blogs = [
        [
            'title' => 'Sayur Wortel',
            'image' => 'wortel.jpg',
            'desc' => 'Wortel bukan hanya terkenal karena warnanya yang mencolok, tetapi juga karena kandungan nutrisinya yang luar biasa. Sayuran akar ini kaya akan beta-karoten, yang akan diubah tubuh menjadi vitamin A—penting untuk kesehatan mata, kulit, dan daya tahan tubuh.'
        ],
        [
            'title' => 'Buah Tomat',
            'image' => 'tomat.jpg',
            'desc' => 'Tomat adalah salah satu sayuran (secara kuliner) yang paling serbaguna dan disukai banyak orang. Di balik warnanya yang merah cerah, tomat mengandung likopen—antioksidan kuat yang dipercaya membantu menjaga kesehatan jantung, melindungi sel dari kerusakan, dan bahkan mengurangi risiko kanker.'
        ],
        [
            'title' => 'Sayur Brokoli',
            'image' => 'brokoli.jpg',
            'desc' => 'Brokoli dikenal sebagai salah satu superfood karena kandungan nutrisinya yang sangat lengkap. Sayur berwarna hijau tua ini sarat akan vitamin C, vitamin K, serat, zat besi, dan senyawa antioksidan kuat yang mendukung kesehatan secara menyeluruh.'
        ],
    ];
@endphp

<div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-2xl font-bold text-gray-700 mb-6">List Blog Page</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sidebar Filter -->
        <aside class="md:col-span-1 bg-gray-200 p-6 rounded shadow text-sm text-gray-700">
            <h2 class="text-lg font-semibold mb-4">Filter By</h2>
            <form class="space-y-4">
                <div><input type="checkbox" id="terbaru"> <label for="terbaru">Update terbaru</label></div>
                <div><input type="checkbox" id="az"> <label for="az">Urutan A-Z</label></div>
                <div class="flex gap-4">
                    <div class="space-y-2">
                        <div><input type="checkbox" id="katA"> <label for="katA">Kategori A</label></div>
                        <div><input type="checkbox" id="katC"> <label for="katC">Kategori C</label></div>
                    </div>
                    <div class="space-y-2">
                        <div><input type="checkbox" id="katB"> <label for="katB">Kategori B</label></div>
                        <div><input type="checkbox" id="katD"> <label for="katD">Kategori D</label></div>
                    </div>
                </div>
            </form>
        </aside>

        <!-- Blog List -->
        <div class="md:col-span-3 space-y-6">
            @foreach ($blogs as $item)
            <div class="bg-white rounded shadow p-4 flex flex-col sm:flex-row gap-4 items-start">
                <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}" class="w-full sm:w-40 h-40 object-cover rounded">
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-1">{{ $item['title'] }}</h3>
                    <p class="text-sm text-gray-700">{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
