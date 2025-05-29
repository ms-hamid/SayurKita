@extends('layouts.list_product')

@section('title', 'List Product')

@section('content')
@php
    $vegetables = [
        ['name' => 'Product A', 'image' => 'tomat.jpg'],
        ['name' => 'Product B', 'image' => 'kol.jpg'],
        ['name' => 'Product C', 'image' => 'sawi hijau.jpg'],
        ['name' => 'Product D', 'image' => 'buncis.jpg'],
        ['name' => 'Product E', 'image' => 'wortel.jpg'],
        ['name' => 'Product F', 'image' => 'terong.jpg'],
        ['name' => 'Product G', 'image' => 'timun.jpg'],
        ['name' => 'Product H', 'image' => 'brokoli.jpg'],
        ['name' => 'Product I', 'image' => 'kangkung.jpg'],
        ['name' => 'Product J', 'image' => 'cabe.jpg'],
        ['name' => 'Product K', 'image' => 'pare.jpg'],
        ['name' => 'Product L', 'image' => 'bayam.jpg'],
    ];
@endphp

<div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center mb-10">Galeri Sayuran</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sidebar Filter -->
        <aside class="md:col-span-1 bg-gray-100 p-6 rounded shadow font-poppins">
            <h2 class="text-lg font-semibold mb-4">Filter By</h2>
            <form class="space-y-4 text-sm text-gray-700">
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

        <!-- Gallery Grid -->
        <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($vegetables as $veg)
            <div class="bg-white p-4 rounded shadow text-center">
                <h2 class="text-base font-semibold mb-2">{{ $veg['name'] }}</h2>
                <img src="{{ asset('images/' . $veg['image']) }}" alt="{{ $veg['name'] }}" class="w-full h-40 object-contain bg-gray-100 p-2">
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
