@extends('layouts.gallery')

@section('title', 'Gallery')

@section('content')
@php
    $vegetables = [
        ['name' => 'Tomat', 'description' => 'Buah berair serbaguna yang kaya likopen dan vitamin C.', 'image' => 'tomat.jpg'],
        ['name' => 'Kol', 'description' => 'Sayur berdaun renyah yang kaya serat dan vitamin C, atau fermentasi.', 'image' => 'kol.jpg'],
        ['name' => 'Sawi Hijau', 'description' => 'Sayur dengan rasa ringan dan tekstur renyah, cocok untuk mie atau sup.', 'image' => 'sawi hijau.jpg'],
        ['name' => 'Buncis', 'description' => 'Polong hijau yang kaya protein nabati dan serat, cocok untuk tumisan sehat.', 'image' => 'buncis.jpg'],
        ['name' => 'Wortel', 'description' => 'Akar manis berwarna oranye yang kaya karoten, baik untuk kesehatan mata dan kulit.', 'image' => 'wortel.jpg'],
        ['name' => 'Bayam', 'description' => 'Daun hijau lembut yang kaya zat besi dan folat, baik untuk darah dan energi', 'image' => 'bayam.jpg'],
        ['name' => 'Terong', 'description' => 'Buah ungu yang kaya antioksidan dan serat, nikmat digoreng, dibakar, atau dimasak kuah', 'image' => 'terong.jpg'],
        ['name' => 'Timun', 'description' => 'Sayur berair yang menyegarkan, baik untuk hidrasi dan kesehatan kulit.', 'image' => 'timun.jpg'],
        ['name' => 'Brokoli', 'description' => 'Sayur hijau dengan kandungan antioksidan tinggi untuk menjaga kekebalan tubuh.', 'image' => 'brokoli.jpg'],
        ['name' => 'Kangkung', 'description' => 'Sayuran air yang lezat ditumis dan tinggi serat, membantu melancarkan pencernaan.', 'image' => 'kangkung.jpg'],
        ['name' => 'Cabe', 'description' => 'Memberi rasa pedas alami, juga tinggi vitamin C dan membantu metabolisme.', 'image' => 'cabe.jpg'],
        ['name' => 'Pare', 'description' => 'Sayur lembut dan rendah kalori, sering digunakan dalam sayur lodeh atau oseng-oseng.', 'image' => 'pare.jpg'],
        // Tambah item lainnya sesuai kebutuhan
    ];
@endphp

<div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center mb-10">Galeri Sayuran</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($vegetables as $veg)
        <div class="bg-white border rounded-lg shadow-md hover:shadow-lg transition overflow-hidden">
            <img src="{{ asset('images/' . $veg['image']) }}" alt="{{ $veg['name'] }}" class="w-full h-40 object-contain bg-gray-100 p-2">
            <div class="p-4 text-center">
                <h2 class="text-lg font-semibold text-gray-800">{{ $veg['name'] }}</h2>
                <p class="text-sm text-gray-600 mt-2">{{ $veg['description'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
