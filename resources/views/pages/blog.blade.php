@extends('layouts.blog')

@section('title', 'Blog')

@section('content')
<style>
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(10px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .fade-in-up {
        animation: fadeInUp 0.4s ease-out both;
    }

    .scrollbar-thin::-webkit-scrollbar {
        width: 6px;
    }

    .scrollbar-thin::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 3px;
    }
</style>

<div class="bg-gray-100 py-10 px-4 min-h-screen">
    <div class="max-w-6xl mx-auto space-y-6">

        {{-- === BANNER === --}}
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
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent z-10"></div>
            <div class="absolute bottom-5 left-6 z-20">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white drop-shadow-lg select-none">
                    Sayur Kol
                </h1>
            </div>
        </div>

        {{-- === KONTEN ARTIKEL & SIDEBAR === --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">

            {{-- === KONTEN UTAMA === --}}
            <div class="lg:col-span-2 bg-white shadow-xl rounded-xl p-6 fade-in-up">

                {{-- Judul dan tanggal --}}
                <div class="flex justify-between items-center text-sm text-gray-500 mb-4 select-none">
                    <span class="font-medium">Sayur Kol</span>
                    <span>20:00 01/05/2025</span>
                </div>

                <p class="text-gray-700 leading-relaxed select-text">
                    Kol, atau kubis, adalah salah satu sayuran yang paling mudah ditemui di pasar tradisional hingga supermarket...
                </p>

                {{-- Komentar --}}
                <div class="mt-10" x-data="{
                    showComment: true,
                    newComment: '',
                    comments: [
                        {
                            user: 'Muhammad Faiz',
                            time: '15:00 05/05/2025',
                            text: 'Kol enak banget dibuat salad!',
                            replies: [
                                {
                                    user: '@andakitchen',
                                    time: '15:30 05/05/2025',
                                    text: 'Wah benar Kak...',
                                    liked: false
                                }
                            ]
                        }
                    ]
                }">
                    <button @click="showComment = !showComment"
                        class="text-sm text-blue-600 mb-4 hover:underline focus:outline-none">
                        <span x-show="!showComment">Lihat Komentar</span>
                        <span x-show="showComment">Sembunyikan Komentar</span>
                    </button>

                    <div x-show="showComment" x-transition class="space-y-4 max-h-80 overflow-y-auto scrollbar-thin pr-2">
                        <template x-for="(comment, i) in comments" :key="i">
                            <div class="bg-gray-100 p-4 rounded-lg transition hover:shadow hover:bg-gray-200">
                                <div class="flex gap-4 items-start">
                                    <div class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center text-white font-bold select-none">
                                        <span x-text="comment.user.charAt(0)"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between text-sm">
                                            <p class="font-semibold" x-text="comment.user"></p>
                                            <p class="text-gray-500 select-none" x-text="comment.time"></p>
                                        </div>
                                        <p class="mt-1 text-gray-700 select-text" x-text="comment.text"></p>

                                        <template x-for="(reply, j) in comment.replies" :key="j">
                                            <div class="border-t border-gray-300 mt-3 pt-3 pl-6">
                                                <div class="flex gap-3 items-start">
                                                    <div class="w-8 h-8 rounded-full bg-gray-600 flex items-center justify-center text-white font-bold select-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M3 6h7m-7 8h7m4 4l4-4m0 0l-4-4m4 4H10" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="flex justify-between text-sm">
                                                            <p class="font-semibold text-blue-600" x-text="reply.user"></p>
                                                            <p class="text-gray-500 select-none" x-text="reply.time"></p>
                                                        </div>
                                                        <p class="mt-1 text-gray-700 select-text" x-text="reply.text"></p>

                                                        <button 
                                                            @click="reply.liked = !reply.liked"
                                                            :class="reply.liked ? 'bg-green-600' : 'bg-green-500'"
                                                            class="mt-3 text-white text-xs px-3 py-1 rounded-full shadow transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-300 select-none"
                                                            x-text="reply.liked ? '❤️ Disukai' : '👍 Suka'"
                                                        ></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            {{-- === SIDEBAR ARTIKEL TERKAIT === --}}
            <div class="space-y-4 fade-in-up">
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
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300 rounded-xl z-10"></div>

                    <div class="flex gap-4 items-center relative z-20">
                        <img 
                            src="{{ asset('images/' . $item['img']) }}" 
                            alt="{{ $item['title'] }}" 
                            loading="lazy" 
                            class="w-20 h-20 object-cover rounded-md border border-white/30 transform transition duration-300 group-hover:scale-105"
                        />
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
