@extends('layouts.aboutus')

@section('title', 'About Us')

@section('content')
<main class="w-full px-4 md:px-16 lg:px-24 py-12 space-y-16">

  <!-- Parallax Banner -->
  <div class="relative rounded-xl overflow-hidden shadow-2xl">
    <div class="relative h-[28rem] parallax-banner" style="background-image: url('{{ asset('images/sayur1.jpg') }}');">
      <div class="absolute inset-0 bg-black/50 z-10"></div>
      <div class="absolute bottom-8 left-8 z-20 text-white text-4xl md:text-5xl font-bold drop-shadow-xl animate-glow">
        Sayur Kita — Grow Locally, Export Globally
      </div>
    </div>
  </div>

  <!-- Our Story -->
  <section class="text-center max-w-5xl mx-auto space-y-6" data-reveal>
    <h1 class="text-4xl font-bold">Our Story</h1>
    <p class="text-gray-600 text-base">
      Sayur Kita is a web-based CMS platform designed to support the export of Indonesia’s finest locally-grown vegetables...
    </p>
    <p class="text-gray-600 text-base">
      We are committed to improving transparency, efficiency, and accessibility...
    </p>
  </section>

  <!-- Vision & Mission -->
  <section class="grid md:grid-cols-2 gap-10" data-reveal>
    <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-green-200 transition duration-300 ease-in-out">
      <h3 class="text-2xl font-semibold mb-4 text-green-700">Our Mission</h3>
      <p class="text-gray-600">To empower Indonesia’s local vegetable industry...</p>
    </div>
    <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-green-200 transition duration-300 ease-in-out">
      <h3 class="text-2xl font-semibold mb-4 text-green-700">Our Vision</h3>
      <p class="text-gray-600">To become the leading digital gateway...</p>
    </div>
  </section>

  <!-- Illustrations -->
  <section class="grid md:grid-cols-3 gap-10" data-reveal>
    @foreach ([['src' => 'petani lokal.jpg', 'label' => 'Local Farmer'], ['src' => 'distribusi cepat.png', 'label' => 'Fast Distribution'], ['src' => 'kualitas terbaik.png', 'label' => 'Best Quality']] as $item)
      <div class="bg-white rounded-xl shadow-md p-6 text-center transform hover:scale-105 transition duration-300 hover:shadow-xl">
        <img src="{{ asset('images/' . $item['src']) }}" alt="{{ $item['label'] }}" class="w-full h-52 object-cover rounded-lg mb-4">
        <p class="text-lg font-medium text-gray-700">{{ $item['label'] }}</p>
      </div>
    @endforeach
  </section>

  <!-- Leadership -->
  <section class="text-center space-y-8" data-reveal>
    <h2 class="text-3xl font-bold">Leadership</h2>
    <div class="flex flex-wrap justify-center gap-10 max-w-4xl mx-auto">
      @foreach ([['src' => 'yeni rokhayati.jpg', 'name' => 'Yeni Rokhayati, S.Si., M.Sc', 'title' => 'Head of Informatics Engineering Program'], ['src' => 'agung riyadi.jpg', 'name' => 'Agung Riyadi, S.Si., M.Kom', 'title' => 'Project Manager']] as $person)
        <div class="bg-white p-6 rounded-2xl shadow-lg max-w-xs transform hover:scale-105 transition duration-300">
          <img src="{{ asset('images/' . $person['src']) }}" class="w-32 h-32 object-cover rounded-full mx-auto mb-4 shadow">
          <h3 class="text-xl font-semibold text-gray-800">{{ $person['name'] }}</h3>
          <p class="text-gray-600 text-sm">{{ $person['title'] }}</p>
        </div>
      @endforeach
    </div>
  </section>

  <!-- Our Team -->
  <section class="text-center space-y-8" data-reveal>
    <h2 class="text-3xl font-bold">Meet Our Team</h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
      @foreach ([['src' => 'hamid.jpg', 'nim' => '3312411005', 'name' => 'Muhammad Syarif Hamid (Project Leader)', 'desc' => 'Leader pengembangan frontend dan integrasi modul.'],
                 ['src' => 'dipa.jpg', 'nim' => '3312311101', 'name' => 'Nailah Dipa Khairiyah Lubis', 'desc' => 'Desainer antarmuka dan dokumentasi sistem.'],
                 ['src' => 'faiz.jpg', 'nim' => '3312411018', 'name' => 'Muhammad Faiz Difa Suanda', 'desc' => 'Backend & frontend integrator.'],
                 ['src' => 'ilham.jpg', 'nim' => '3312411003', 'name' => 'Muhammad Ilham Tri Adi Putra', 'desc' => 'Testing dan deployment.'],
                 ['src' => 'junior.jpg', 'nim' => '3312411002', 'name' => 'Junior Dirgantara Betan', 'desc' => 'DevOps dan pengelolaan versi.']] as $member)
        <div 
          class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition duration-300 text-center cursor-pointer"
          onclick="openModal('{{ asset('images/' . $member['src']) }}', '{{ $member['name'] }}', '{{ $member['nim'] }}', '{{ $member['desc'] }}')"
        >
          <img src="{{ asset('images/' . $member['src']) }}" class="w-32 h-32 object-cover rounded-full mx-auto mb-4 shadow-md">
          <p class="font-semibold text-black-700">{{ $member['nim'] }}</p>
          <p class="font-semibold text-gray-800">{{ $member['name'] }}</p>
        </div>
      @endforeach
    </div>
  </section>

</main>
@endsection
