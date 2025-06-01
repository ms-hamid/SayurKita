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
    ];
@endphp

<!-- Section judul dengan parallax -->
<div class="relative h-64 flex items-center justify-center bg-fixed bg-center bg-cover" style="background-image: url('{{ asset('images/parallax banner.jpg') }}');">
    <div class="bg-black bg-opacity-50 w-full h-full absolute inset-0"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-white text-5xl font-extrabold drop-shadow-lg" data-aos="fade-down">Our Vegetables</h1>
        <p class="text-gray-200 mt-4 max-w-xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="150">
            Explore our wide selection of fresh, high-quality vegetables sourced directly from trusted local farms.
        </p>
    </div>
</div>

<!-- Grid konten -->
<div class="max-w-7xl mx-auto px-6 sm:px-8 md:px-12 py-16">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($vegetables as $veg)
        <div
            class="flex flex-col gap-3 bg-white p-3 rounded-xl shadow-md transform transition duration-300 hover:scale-[1.04] hover:shadow-2xl group relative overflow-hidden"
            data-aos="fade-up"
            data-aos-duration="800"
        >
            <!-- Efek berkilau saat hover -->
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none animate-pulse rounded-xl"></div>

            <!-- Gambar -->
            <div class="relative w-full aspect-square rounded-xl overflow-hidden">
                <div
                    class="absolute inset-0 bg-center bg-no-repeat bg-cover transition-transform duration-300 group-hover:scale-110"
                    style="background-image: url('{{ asset('images/' . $veg['image']) }}')">
                </div>
                <div class="absolute inset-0 bg-black bg-opacity-10 group-hover:bg-opacity-25 transition-all duration-300 rounded-xl"></div>
            </div>

            <!-- Info -->
            <div>
                <p class="text-[#121811] text-base font-semibold leading-snug">{{ $veg['name'] }}</p>
                <p class="text-[#68875e] text-sm font-normal leading-normal">{{ $veg['description'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
