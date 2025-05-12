@extends('layouts.aboutus')

@section('title', 'About Us')

@section('content')
<main class="w-full px-4 md:px-16 lg:px-24 py-12 space-y-12">

    <!-- Banner Besar di Atas -->
    <div class="w-full h-50 md:h-60 rounded-lg overflow-hidden shadow-lg aos-init aos-animate" data-aos="fade-up">
        <img src="{{ asset('images/about-top-banner.jpg') }}" alt="Banner Utama" class="w-full h-full object-cover object-center">
    </div>

    <!-- Gambar Utama & Deskripsi -->
    <div class="bg-white shadow-md rounded-md p-6 text-center w-full aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <h1 class="text-3xl font-bold mb-4">Tentang Kami</h1>
        <p class="text-gray-600 text-sm max-w-2xl mx-auto">Sayur Kita merupakan platform distribusi hasil panen lokal yang menghubungkan petani dan konsumen langsung, dengan menjaga kualitas dan kesegaran produk.</p>
    </div>

    <!-- Dua Kolom Informasi -->
    <div class="grid md:grid-cols-2 gap-8 w-full aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-white p-8 rounded-lg shadow text-center w-full">
            <h3 class="text-xl font-semibold mb-4">Misi Kami</h3>
            <p class="text-gray-600 text-base">Memberikan dukungan kepada petani lokal untuk mendistribusikan hasil pertanian mereka secara adil dan efisien melalui teknologi digital.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow text-center w-full">
            <h3 class="text-xl font-semibold mb-4">Visi Kami</h3>
            <p class="text-gray-600 text-base">Membangun ekosistem pertanian berkelanjutan yang terhubung langsung antara petani dan masyarakat luas.</p>
        </div>
    </div>

    <!-- Tiga Gambar Ilustrasi -->
    <div class="grid md:grid-cols-3 gap-8 w-full aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <div class="bg-white rounded-lg shadow p-6">
            <img src="{{ asset('images/farm1.jpg') }}" alt="Petani Lokal" class="w-full h-48 object-cover rounded mb-4 transition-transform transform hover:scale-105 hover:shadow-lg">
            <p class="text-center font-medium text-gray-700">Petani Lokal</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <img src="{{ asset('images/farm2.jpg') }}" alt="Distribusi" class="w-full h-48 object-cover rounded mb-4 transition-transform transform hover:scale-105 hover:shadow-lg">
            <p class="text-center font-medium text-gray-700">Distribusi Cepat</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <img src="{{ asset('images/farm3.jpg') }}" alt="Kualitas" class="w-full h-48 object-cover rounded mb-4 transition-transform transform hover:scale-105 hover:shadow-lg">
            <p class="text-center font-medium text-gray-700">Kualitas Terbaik</p>
        </div>
    </div>

    <!-- Ketua Program Studi & Manajer Proyek -->
<div class="w-full text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
    <h2 class="text-3xl font-bold mb-8">Ketua Program Studi & Manajer Proyek</h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8">
        <!-- Ketua Program Studi -->
        <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
            <img src="{{ asset('images/leader1.jpg') }}" alt="Ketua Program Studi" class="w-full h-64 object-cover rounded mb-4">
            <h3 class="font-semibold text-gray-800 text-lg">Nama Dosen 1</h3>
            <p class="text-sm text-gray-600">Ketua Program Studi</p>
        </div>
        <!-- Manajer Proyek -->
        <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
            <img src="{{ asset('images/leader2.jpg') }}" alt="Manajer Proyek" class="w-full h-64 object-cover rounded mb-4">
            <h3 class="font-semibold text-gray-800 text-lg">Nama Dosen 2</h3>
            <p class="text-sm text-gray-600">Manajer Proyek</p>
        </div>
    </div>
</div>


    <!-- Our Great Team Section -->
    <div class="w-full text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
        <h2 class="text-3xl font-bold mb-8">Our Great Team</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <!-- Member 1 -->
            <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
                <img src="{{ asset('images/team1.jpg') }}" alt="Team Member 1" class="w-full h-40 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">Nama Anggota 1</p>
            </div>
            <!-- Member 2 -->
            <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
                <img src="{{ asset('images/team2.jpg') }}" alt="Team Member 2" class="w-full h-40 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">Nama Anggota 2</p>
            </div>
            <!-- Member 3 -->
            <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
                <img src="{{ asset('images/team3.jpg') }}" alt="Team Member 3" class="w-full h-40 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">Nama Anggota 3</p>
            </div>
            <!-- Member 4 -->
            <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
                <img src="{{ asset('images/team4.jpg') }}" alt="Team Member 4" class="w-full h-40 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">Nama Anggota 4</p>
            </div>
            <!-- Member 5 -->
            <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
                <img src="{{ asset('images/team5.jpg') }}" alt="Team Member 5" class="w-full h-40 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">Nama Anggota 5</p>
            </div>
        </div>
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800, // Durasi animasi
        easing: 'ease-in-out', // Easing untuk efek smooth
        once: true, // Efek hanya terjadi sekali
        offset: 100, // Menambah jarak scroll untuk memicu animasi
    });
</script>

@endsection
