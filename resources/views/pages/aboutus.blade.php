@extends('layouts.aboutus')

@section('title', 'About Us')

@section('content')
<main class="w-full px-4 md:px-16 lg:px-24 py-12 space-y-12">

    <!-- Banner Besar di Atas -->
    <div class="w-full h-50 md:h-60 rounded-lg overflow-hidden shadow-lg aos-init aos-animate" data-aos="fade-up">
    <img src="{{ asset('images/sayur1.jpg') }}" alt="Banner Utama" class="w-full h-full object-cover object-center" style="object-position: center bottom;">
    </div>

    <!-- Gambar Utama & Deskripsi -->
    <div class="bg-white shadow-md rounded-md p-6 text-center w-full aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <h1 class="text-3xl font-bold mb-4">Tentang Kami</h1>
        <p class="text-gray-600 text-sm max-w-3xl mx-auto">Sayur Kita adalah platform Content Management System (CMS) berbasis web yang dirancang khusus untuk mendukung kegiatan ekspor sayur lokal. Dibangun menggunakan framework Laravel, Sayur Kita hadir sebagai solusi digital yang memudahkan pengelolaan informasi, data ekspor, serta komunikasi antara pelaku usaha dan mitra ekspor.</p>
        <p class="text-gray-600 text-sm max-w-4xl mx-auto">Kami percaya bahwa potensi sayur lokal Indonesia sangat besar untuk bersaing di pasar global. Melalui teknologi yang kami kembangkan, kami ingin membantu petani, eksportir, dan pelaku UMKM untuk lebih mudah mengelola proses ekspor secara efisien, transparan, dan terorganisir.</p>
        <p class="text-gray-600 text-sm max-w-3xl mx-auto">Dengan Sayur Kita, kami tidak hanya menyediakan sistem yang andal, tetapi juga berkomitmen untuk mendorong pertumbuhan ekonomi lokal melalui digitalisasi dan pemberdayaan pelaku usaha di sektor pertanian.</p>
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
            <img src="{{ asset('images/petani lokal.jpg') }}" alt="Petani Lokal" class="w-full h-47 object-cover rounded mb-4 transition-transform transform hover:scale-105 hover:shadow-lg">
            <p class="text-center font-medium text-gray-700">Petani Lokal</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <img src="{{ asset('images/distribusi cepat.png') }}" alt="Distribusi" class="w-full h-46 object-cover rounded mb-4 transition-transform transform hover:scale-105 hover:shadow-lg">
            <p class="text-center font-medium text-gray-700">Distribusi Cepat</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <img src="{{ asset('images/kualitas terbaik.png') }}" alt="Kualitas" class="w-full h-47 object-cover rounded mb-4 transition-transform transform hover:scale-105 hover:shadow-lg">
            <p class="text-center font-medium text-gray-700">Kualitas Terbaik</p>
        </div>
    </div>

<!-- Ketua Program Studi & Manajer Proyek -->
<div class="w-full text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
    <h2 class="text-3xl font-bold mb-8">Ketua Program Studi & Manajer Proyek</h2>
    
    <div class="grid sm:grid-cols-2 gap-8 justify-center">
        <!-- Ketua Program Studi -->
        <div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-sm mx-auto hover:scale-105 transition-all duration-300 text-center">
            <img src="{{ asset('images/yeni rokhayati.jpg') }}" alt="Ketua Program Studi" class="w-36 h-36 object-cover rounded-full mx-auto mb-4 shadow-md">
            <h3 class="font-semibold text-gray-800 text-lg">Yeni Rokhayati, S.Si., M.Sc</h3>
            <p class="text-sm text-gray-600">Ketua Program Studi Teknik Informatika</p>
        </div>

        <!-- Manajer Proyek -->
        <div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-sm mx-auto hover:scale-105 transition-all duration-300 text-center">
            <img src="{{ asset('images/agung riyadi.jpg') }}" alt="Manajer Proyek" class="w-36 h-36 object-cover rounded-full mx-auto mb-4 shadow-md">
            <h3 class="font-semibold text-gray-800 text-lg">Agung Riyadi, S.Si., M.Kom</h3>
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
                <img src="{{ asset('images/hamid.jpg') }}" class="w-40 h-38 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">3312411005</p>
                <p class="font-semibold text-gray-800">Muhammad Syarif Hamid (Leader)</p>
            </div>
            <!-- Member 2 -->
            <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
                <img src="{{ asset('images/dipa.jpg') }}"  class="w-full h-40 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">3312311101</p>
                <p class="font-semibold text-gray-800">Nailah Dipa Khairiyah Lubis</p>
            </div>
            <!-- Member 3 -->
            <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
                <img src="{{ asset('images/faiz.jpg') }}" class="w-full h-40 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">3312411018</p>
                <p class="font-semibold text-gray-800">Muhammad Faiz Difa Suanda</p>
            </div>
            <!-- Member 4 -->
            <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
                <img src="{{ asset('images/ilham.jpg') }}" class="w-full h-40 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">3312411003</p>
                <p class="font-semibold text-gray-800">Muhammad Ilham Tri Adi Putra</p>
            </div>
            <!-- Member 5 -->
            <div class="bg-white p-6 rounded-lg shadow hover:transform hover:scale-105 transition-all">
                <img src="{{ asset('images/junior.jpg') }}" class="w-full h-40 object-cover rounded-full mb-4">
                <p class="font-semibold text-gray-800">3312411002</p>
                <p class="font-semibold text-gray-800">Junior Dirgantara Betan</p>
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
