@extends('layouts.aboutus')

@section('title', 'About Us')

@section('content')
<main class="w-full px-4 md:px-16 lg:px-24 py-12 space-y-12">

  <!-- Banner Slideshow dengan efek hover zoom -->
  <div class="relative rounded-lg shadow-lg overflow-hidden mb-12 group">
    <div id="banner-slideshow" class="relative w-full h-96 overflow-hidden">
      @foreach (['sayur1.jpg', 'sayur2.jpg', 'sayur3.jpg'] as $key => $img)
        <img 
          src="{{ asset('images/' . $img) }}" 
          class="absolute top-0 left-0 w-full h-96 object-cover transition duration-1000 ease-in-out transform {{ $key === 0 ? 'opacity-100 scale-100' : 'opacity-0 scale-100' }} group-hover:scale-105" 
          alt="Banner Image {{ $key }}" 
        >
      @endforeach
    </div>
    <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>
    <div class="absolute bottom-6 left-6 text-white text-4xl font-bold drop-shadow-lg z-20 animate-fade-in-blur">
      
    </div>
  </div>

  <!-- Deskripsi (hover zoom) -->
  <div 
    class="bg-white shadow-md rounded-md p-6 text-center w-full transform transition-transform duration-300 ease-in-out hover:scale-105 will-change-transform" 
    data-aos="fade-up" data-aos-delay="100"
  >
    <h1 class="text-3xl font-bold mb-4">Tentang Kami</h1>
    <p class="text-gray-600 text-sm max-w-3xl mx-auto mb-2">
      Sayur Kita adalah platform CMS berbasis web yang dirancang untuk mendukung kegiatan ekspor sayur lokal...
    </p>
    <p class="text-gray-600 text-sm max-w-4xl mx-auto mb-2">
      Kami percaya bahwa potensi sayur lokal Indonesia sangat besar untuk bersaing di pasar global...
    </p>
    <p class="text-gray-600 text-sm max-w-3xl mx-auto">
      Kami berkomitmen untuk mendorong pertumbuhan ekonomi lokal melalui digitalisasi...
    </p>
  </div>

  <!-- Misi & Visi -->
  <div class="grid md:grid-cols-2 gap-8" data-aos="fade-up" data-aos-delay="200">
    <div class="bg-white p-8 rounded-lg shadow text-center transform transition-transform duration-300 ease-in-out hover:scale-105 will-change-transform">
      <h3 class="text-xl font-semibold mb-4">Misi Kami</h3>
      <p class="text-gray-600">Memberikan dukungan kepada petani lokal...</p>
    </div>
    <div class="bg-white p-8 rounded-lg shadow text-center transform transition-transform duration-300 ease-in-out hover:scale-105 will-change-transform">
      <h3 class="text-xl font-semibold mb-4">Visi Kami</h3>
      <p class="text-gray-600">Membangun ekosistem pertanian berkelanjutan...</p>
    </div>
  </div>

  <!-- Ilustrasi -->
  <div class="grid md:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="300">
    @foreach ([['src' => 'petani lokal.jpg', 'label' => 'Petani Lokal'], ['src' => 'distribusi cepat.png', 'label' => 'Distribusi Cepat'], ['src' => 'kualitas terbaik.png', 'label' => 'Kualitas Terbaik']] as $item)
      <div class="bg-white rounded-lg shadow p-6 transform transition-transform duration-300 ease-in-out hover:scale-105 will-change-transform">
        <img src="{{ asset('images/' . $item['src']) }}" alt="{{ $item['label'] }}" class="w-full h-47 object-cover rounded mb-4">
        <p class="text-center font-medium text-gray-700">{{ $item['label'] }}</p>
      </div>
    @endforeach
  </div>

  <!-- Ketua Prodi & Manajer -->
  <div class="text-center" data-aos="fade-up" data-aos-delay="400">
    <h2 class="text-3xl font-bold mb-8">Ketua Program Studi & Manajer Proyek</h2>
    <div class="flex flex-wrap justify-center gap-8 max-w-screen-md mx-auto">
      @foreach ([['src' => 'yeni rokhayati.jpg', 'name' => 'Yeni Rokhayati, S.Si., M.Sc', 'title' => 'Ketua Program Studi Teknik Informatika'], ['src' => 'agung riyadi.jpg', 'name' => 'Agung Riyadi, S.Si., M.Kom', 'title' => 'Manajer Proyek']] as $person)
        <div class="bg-white p-6 rounded-xl shadow-lg transform transition-transform duration-300 ease-in-out hover:scale-105 text-center max-w-sm mx-auto will-change-transform">
          <img src="{{ asset('images/' . $person['src']) }}" class="w-36 h-36 object-cover rounded-full mx-auto mb-4 shadow-md">
          <h3 class="font-semibold text-gray-800 text-lg">{{ $person['name'] }}</h3>
          <p class="text-sm text-gray-600">{{ $person['title'] }}</p>
        </div>
      @endforeach
    </div>
  </div>

  <!-- Our Team -->
  <div class="text-center" data-aos="fade-up" data-aos-delay="500">
    <h2 class="text-3xl font-bold mb-8">Our Great Team</h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
      @foreach ([['src' => 'hamid.jpg', 'nim' => '3312411005', 'name' => 'Muhammad Syarif Hamid (Project Leader)'], ['src' => 'dipa.jpg', 'nim' => '3312311101', 'name' => 'Nailah Dipa Khairiyah Lubis'], ['src' => 'faiz.jpg', 'nim' => '3312411018', 'name' => 'Muhammad Faiz Difa Suanda'], ['src' => 'ilham.jpg', 'nim' => '3312411003', 'name' => 'Muhammad Ilham Tri Adi Putra'], ['src' => 'junior.jpg', 'nim' => '3312411002', 'name' => 'Junior Dirgantara Betan']] as $member)
        <div class="bg-white p-6 rounded-lg shadow transform transition-transform duration-300 ease-in-out hover:scale-105 text-center will-change-transform">
          <img src="{{ asset('images/' . $member['src']) }}" class="w-40 h-40 object-cover rounded-full mb-4 mx-auto">
          <p class="font-semibold text-gray-800">{{ $member['nim'] }}</p>
          <p class="font-semibold text-gray-800">{{ $member['name'] }}</p>
        </div>
      @endforeach
    </div>
  </div>

</main>

{{-- Slideshow Script --}}
<script>
  const slides = document.querySelectorAll('#banner-slideshow img');
  let index = 0;

  setInterval(() => {
    slides[index].classList.remove('opacity-100');
    slides[index].classList.add('opacity-0');

    index = (index + 1) % slides.length;

    slides[index].classList.remove('opacity-0');
    slides[index].classList.add('opacity-100');
  }, 5000);
</script>
@endsection