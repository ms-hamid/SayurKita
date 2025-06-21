@extends('layouts.list_blog')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12 font-poppins">
    <div class="w-full mb-10 bg-gradient-to-br from-green-100 to-green-50 p-6 rounded-2xl shadow-md">
        <h2 class="text-xl font-semibold text-green-800 mb-4">🔍 Filter Kategori</h2>
        <form id="filterForm" class="flex flex-wrap gap-4 text-sm text-gray-700">
            @foreach ($categories as $cat)
                <div>
                    <input type="checkbox" id="filter-{{ strtolower(str_replace(' ', '-', $cat)) }}" value="{{ strtolower($cat) }}" class="category-filter">
                    <label for="filter-{{ strtolower(str_replace(' ', '-', $cat)) }}">{{ $cat }}</label>
                </div>
            @endforeach
        </form>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="blogContainer">
        @foreach ($blogs as $item)
        <div class="blog-card cursor-pointer bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-[1.03] hover:shadow-xl"
             data-category="{{ strtolower($item->category->category_name ?? 'lainnya') }}"
             data-title="{{ $item->title }}"
             data-image="{{ $item->image_url }}"
             data-desc="{{ $item->content }}">
            <img src="{{ $item->image_url }}" loading="lazy" alt="{{ $item->title }}" class="w-full h-48 object-cover">
            <div class="p-4 flex flex-col justify-between flex-grow">
                <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full mb-2">{{ $item->category->category_name ?? 'Tanpa Kategori' }}</span>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $item->title }}</h3>
                <p class="text-sm text-gray-600 leading-relaxed">{{ \Str::limit(strip_tags($item->content), 100) }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 relative animate-fade-in">
        <button id="closeModal" class="absolute top-3 right-4 text-gray-500 hover:bg-gray-200 hover:text-gray-700 text-xl font-bold rounded-full px-2 py-1 transition">&times;</button>
        <img id="modalImage" src="" alt="" class="w-full h-48 object-cover rounded-lg mb-4">
        <h3 id="modalTitle" class="text-xl font-bold text-gray-900 mb-2"></h3>
        <p id="modalDesc" class="text-gray-700 text-sm leading-relaxed max-h-48 overflow-y-auto"></p>

        <div class="flex justify-between mt-6">
            <button id="prevBtn" class="px-4 py-2 bg-gray-100 text-gray-700 rounded hover:bg-gray-200">&larr; Sebelumnya</button>
            <button id="nextBtn" class="px-4 py-2 bg-gray-100 text-gray-700 rounded hover:bg-gray-200">Selanjutnya &rarr;</button>
        </div>
    </div>
</div>

<script>
// sama persis seperti versi sebelumnya
</script>

<style>
@keyframes fade-in {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
}
.animate-fade-in {
    animation: fade-in 0.25s ease-out;
}
</style>
@endsection
