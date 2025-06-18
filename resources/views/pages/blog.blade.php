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
        <div x-data="{ images: ['{{ asset('images/sayur-kol-banner.jpg') }}','{{ asset('images/wortel.jpg') }}','{{ asset('images/brokoli.jpg') }}','{{ asset('images/tomat.jpg') }}'], activeIndex: 0, init() { setInterval(() => { this.activeIndex = (this.activeIndex + 1) % this.images.length; }, 4000); } }" class="relative h-64 rounded-xl overflow-hidden shadow-xl bg-black group">
            <template x-for="(image, index) in images" :key="index">
                <img x-show="activeIndex === index" x-transition:enter="transition-opacity duration-1000" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" :src="image" loading="lazy" alt="Banner Image" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-in-out transform group-hover:scale-105 group-hover:brightness-75">
            </template>
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent z-10"></div>
            <div class="absolute bottom-5 left-6 z-20">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white drop-shadow-lg select-none">
                    {{ $blog->title }}
                </h1>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            {{-- === KONTEN UTAMA === --}}
            <div class="lg:col-span-2 bg-white shadow-xl rounded-xl p-6 fade-in-up">
                <div class="flex justify-between items-center text-sm text-gray-500 mb-4 select-none">
                    <span class="font-medium">{{ $blog->title }}</span>
                    <span>{{ $blog->created_at->format('H:i d/m/Y') }}</span>
                </div>
                <p class="text-gray-700 leading-relaxed select-text">
                    {{ $blog->content }}
                </p>

                @if(session('success'))
                    <div class="p-2 bg-green-200 text-green-800 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ url('/blog/' . $blog->blog_id . '/comment') }}" class="mt-6">
                    @csrf
                    <textarea name="content" class="w-full p-2 border rounded" placeholder="Tulis komentar anda..." required></textarea>
                    <button type="submit" class="mt-2 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Kirim Komentar</button>
                </form>

                <div class="space-y-4 mt-8">
                    @forelse($comments as $comment)
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <div class="flex gap-4 items-start">
                                <div class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center text-white font-bold">G</div>
                                <div class="flex-1">
                                    <div class="flex justify-between text-sm">
                                        <p class="font-semibold">Guest</p>
                                        <p class="text-gray-500">{{ $comment->created_at->format('H:i d/m/Y') }}</p>
                                    </div>
                                    <p class="mt-1 text-gray-700">{{ $comment->content }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-sm text-gray-500">Belum ada komentar.</p>
                    @endforelse
                </div>
            </div>

            {{-- === SIDEBAR ARTIKEL TERKAIT === --}}
            <div class="space-y-4 fade-in-up">
                <h2 class="text-xl font-semibold text-gray-700 select-none">Artikel Terkait</h2>
                @foreach ($related as $index => $item)
                    <div x-data="{ show: false }" x-init="setTimeout(() => show = true, {{ 200 * $index }})" x-show="show" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="relative group overflow-hidden backdrop-blur-sm bg-white/40 border border-white/30 rounded-xl shadow-md p-3 cursor-pointer transform transition duration-300 hover:scale-105 hover:shadow-xl hover:border-indigo-400/50" role="button" tabindex="0" aria-label="Artikel terkait: {{ $item->title }}">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300 rounded-xl z-10"></div>
                        <div class="flex gap-4 items-center relative z-20">
                            <img src="{{ asset($item->image_path) }}" alt="{{ $item->title }}" loading="lazy" class="w-20 h-20 object-cover rounded-md border border-white/30 transform transition duration-300 group-hover:scale-105" />
                            <div>
                                <h3 class="font-bold text-sm text-gray-900">{{ $item->title }}</h3>
                                <p class="text-xs text-gray-700 mt-1">{{ \Str::limit(strip_tags($item->content), 50) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
