@extends('layouts.blog')

@section('title', 'Blog')

@section('content')
<div class="bg-gray-100 py-10 px-4 min-h-screen">
    <div class="max-w-6xl mx-auto space-y-6">

        {{-- === BANNER DENGAN AUTO-SLIDE DAN EFEK ZOOM & GELAP SAAT HOVER === --}}
        <div 
            x-data="{
                images: [
                    '{{ asset('images/sayur-kol-banner.jpg') }}',
                    '{{ asset('images/wortel.jpg') }}',
                    '{{ asset('images/brokoli.jpg') }}',
                    '{{ asset('images/tomat.jpg') }}'
                ],
                activeIndex: 0,
                init() {
                    setInterval(() => {
                        this.activeIndex = (this.activeIndex + 1) % this.images.length;
                    }, 4000);
                }
            }" 
            class="relative h-64 rounded-xl overflow-hidden shadow-xl bg-black group"
        >

            {{-- Gambar Carousel --}}
            <template x-for="(image, index) in images" :key="index">
                <img 
                    x-show="activeIndex === index"
                    x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    :src="image"
                    loading="lazy"
                    alt="Banner Image"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-in-out transform group-hover:scale-105 group-hover:brightness-75"
                >
            </template>

            {{-- Overlay gradient --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent z-10"></div>

            {{-- Teks Banner --}}
            <div class="absolute bottom-5 left-6 z-20">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white drop-shadow-lg select-none">
                    Sayur Kol
                </h1>
            </div>
        </div>

        {{-- === KONTEN ARTIKEL DAN SIDEBAR === --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">

            {{-- === KONTEN UTAMA ARTIKEL + KOMENTAR DENGAN ANIMASI === --}}
            <div class="lg:col-span-2 bg-white shadow-xl rounded-xl p-6">

                {{-- Judul dan tanggal --}}
                <div class="flex justify-between items-center text-sm text-gray-500 mb-4 select-none">
                    <span class="font-medium">Sayur Kol</span>
                    <span>20:00 01/05/2025</span>
                </div>

                {{-- Isi Artikel --}}
                <p class="text-gray-700 leading-relaxed select-text">
                    Kol, atau kubis, adalah salah satu sayuran yang paling mudah ditemui di pasar tradisional hingga supermarket.
                    Di balik bentuknya yang sederhana, kol menyimpan berbagai manfaat penting bagi tubuh.
                    Kaya akan vitamin C, serat, dan antioksidan, kol sangat baik untuk mendukung sistem imun, 
                    melancarkan pencernaan, dan menjaga kesehatan kulit.
                </p>

                {{-- Komentar --}}
                <div class="mt-10 space-y-4">
                    <div 
                        x-data="{ show: false }" 
                        x-init="setTimeout(() => show = true, 500)" 
                        x-show="show"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 -translate-x-6"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        class="bg-gray-100 p-4 rounded-lg transition-shadow duration-300 hover:shadow-lg hover:bg-gray-200"
                    >
                        <div class="flex gap-4 items-start">
                            <div class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center text-white font-bold select-none">M</div>
                            <div class="flex-1">
                                <div class="flex justify-between text-sm">
                                    <p class="font-semibold">Muhammad Faiz</p>
                                    <p class="text-gray-500 select-none">15:00 05/05/2025</p>
                                </div>
                                <p class="mt-1 text-gray-700 select-text">Kol enak banget dibuat salad! Tambah mayones dikit, segar dan sehat.</p>

                                {{-- Balasan komentar dengan animasi slide & fade --}}
                                <div 
                                    x-data="{ show: false }"
                                    x-init="setTimeout(() => show = true, 700)"
                                    x-show="show"
                                    x-transition:enter="transition duration-500"
                                    x-transition:enter-start="opacity-0 translate-x-4"
                                    x-transition:enter-end="opacity-100 translate-x-0"
                                    class="border-t border-gray-300 mt-3 pt-3 pl-6"
                                >
                                    <div class="flex gap-3 items-start">
                                        <div class="w-8 h-8 rounded-full bg-gray-600 flex items-center justify-center text-white font-bold select-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M3 6h7m-7 8h7m4 4l4-4m0 0l-4-4m4 4H10" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-sm">
                                                <p class="font-semibold text-blue-600">@andakitchen</p>
                                                <p class="text-gray-500 select-none">15:30 05/05/2025</p>
                                            </div>
                                            <p class="mt-1 text-gray-700 select-text">Wah benar Kak, saya juga suka buat salad pakai kol dan wortel. Praktis banget!</p>
                                        </div>
                                    </div>

                                    {{-- Tombol Suka dengan efek hover dan scale --}}
                                    <button class="mt-3 bg-green-500 hover:bg-green-600 text-white text-xs px-3 py-1 rounded-full shadow transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-300 select-none" aria-label="Suka komentar">
                                        Suka
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- === SIDEBAR ARTIKEL TERKAIT DENGAN ANIMASI MASUK & EFEK HOVER === --}}
            <div class="space-y-4">
                <h2 class="text-xl font-semibold text-gray-700 select-none">Artikel Terkait</h2>

                @php
                    $related = [
                        ['title' => 'Sayur Wortel', 'desc' => 'Wortel dikenal kaya beta-karoten dan vitamin A...', 'img' => 'wortel.jpg'],
                        ['title' => 'Sayur Brokoli', 'desc' => 'Brokoli sangat kaya akan vitamin C dan serat...', 'img' => 'brokoli.jpg'],
                        ['title' => 'Manfaat Tomat', 'desc' => 'Tomat segar kaya akan likopen dan bagus untuk kulit...', 'img' => 'tomat.jpg']
                    ];
                @endphp

                @foreach ($related as $index => $item)
                <div 
                    x-data="{ show: false }" 
                    x-init="setTimeout(() => show = true, {{ 200 * $index }})"
                    x-show="show"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="relative group overflow-hidden backdrop-blur-sm bg-white/40 border border-white/30 rounded-xl shadow-md p-3 cursor-pointer transform transition duration-300 hover:scale-105 hover:shadow-xl hover:border-indigo-400/50"
                    role="button"
                    tabindex="0"
                    aria-label="Artikel terkait: {{ $item['title'] }}"
                >
                    {{-- Overlay Gelap Saat Hover --}}
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300 rounded-xl z-10"></div>

                    {{-- Konten --}}
                    <div class="flex gap-4 items-center relative z-20">
                        <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['title'] }}" loading="lazy" class="w-20 h-20 object-cover rounded-md border border-white/30" />
                        <div>
                            <h3 class="font-bold text-sm text-gray-900">{{ $item['title'] }}</h3>
                            <p class="text-xs text-gray-700 mt-1">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
