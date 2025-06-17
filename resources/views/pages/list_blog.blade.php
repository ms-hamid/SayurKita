@extends('layouts.list_blog')

@section('content')
@php
    $blogs = [
        ['title' => 'Sayur Wortel', 'image' => 'wortel.jpg', 'desc' => 'Wortel bukan hanya terkenal karena warnanya yang mencolok, tetapi juga karena kandungan nutrisinya yang luar biasa...', 'category' => 'Vitamin A'],
        ['title' => 'Buah Tomat', 'image' => 'tomat.jpg', 'desc' => 'Tomat adalah salah satu sayuran (secara kuliner) yang paling serbaguna dan disukai banyak orang...', 'category' => 'Antioksidan'],
        ['title' => 'Sayur Brokoli', 'image' => 'brokoli.jpg', 'desc' => 'Brokoli dikenal sebagai salah satu superfood karena kandungan nutrisinya yang sangat lengkap...', 'category' => 'Superfood'],
        ['title' => 'Sayur Bayam', 'image' => 'bayam.jpg', 'desc' => 'Bayam adalah sayuran hijau yang kaya zat besi dan vitamin K yang membantu menjaga kesehatan tulang dan darah.', 'category' => 'Zat Besi'],
        ['title' => 'Sayur Buncis', 'image' => 'buncis.jpg', 'desc' => 'Buncis mengandung serat tinggi dan cocok untuk menjaga pencernaan serta kadar gula darah.', 'category' => 'Serat'],
        ['title' => 'Sayur Kol', 'image' => 'kol.jpg', 'desc' => 'Kol rendah kalori namun kaya vitamin C dan antioksidan, baik untuk diet dan sistem imun.', 'category' => 'Vitamin C'],
        ['title' => 'Sayur Kacang Panjang', 'image' => 'kacang-panjang.jpg', 'desc' => 'Kacang panjang mengandung vitamin A dan C serta baik untuk pencernaan dan kesehatan mata.', 'category' => 'Vitamin A'],
        ['title' => 'Sayur Terong', 'image' => 'terong.jpg', 'desc' => 'Terong mengandung antioksidan dan rendah kalori, cocok untuk makanan diet dan mengontrol kolesterol.', 'category' => 'Antioksidan'],
        ['title' => 'Sayur Kangkung', 'image' => 'kangkung.jpg', 'desc' => 'Kangkung populer di Asia Tenggara, mengandung zat besi dan vitamin B kompleks yang bermanfaat untuk tubuh.', 'category' => 'Zat Besi'],
        ['title' => 'Sayur Labu Siam', 'image' => 'labu-siam.jpg', 'desc' => 'Labu siam rendah kalori dan tinggi air, membantu hidrasi dan pencernaan yang sehat.', 'category' => 'Serat'],
        ['title' => 'Sayur Sawi', 'image' => 'sawi.jpg', 'desc' => 'Sawi kaya antioksidan dan vitamin C, bagus untuk meningkatkan imunitas dan kesehatan kulit.', 'category' => 'Vitamin C'],
        ['title' => 'Sayur Seledri', 'image' => 'seledri.jpg', 'desc' => 'Seledri dikenal dapat menurunkan tekanan darah dan sangat rendah kalori, cocok untuk diet sehat.', 'category' => 'Superfood'],
    ];
@endphp

<div class="max-w-7xl mx-auto px-4 py-12 font-poppins">
    <div class="w-full mb-10 bg-gradient-to-br from-green-100 to-green-50 p-6 rounded-2xl shadow-md">
        <h2 class="text-xl font-semibold text-green-800 mb-4">🔍 Filter Kategori</h2>
        <form id="filterForm" class="flex flex-wrap gap-4 text-sm text-gray-700">
            @php
                $categories = collect($blogs)->pluck('category')->unique();
            @endphp
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
             data-category="{{ strtolower($item['category']) }}"
             data-title="{{ $item['title'] }}"
             data-image="{{ asset('images/' . $item['image']) }}"
             data-desc="{{ $item['desc'] }}">
            <img src="{{ asset('images/' . $item['image']) }}" loading="lazy" alt="{{ $item['title'] }}" class="w-full h-48 object-cover">
            <div class="p-4 flex flex-col justify-between flex-grow">
                <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full mb-2">{{ $item['category'] }}</span>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $item['title'] }}</h3>
                <p class="text-sm text-gray-600 leading-relaxed">{{ $item['desc'] }}</p>
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
document.addEventListener('DOMContentLoaded', () => {
    const checkboxes = document.querySelectorAll('.category-filter');
    const blogCards = document.querySelectorAll('.blog-card');
    const modal = document.getElementById('modalOverlay');
    const modalImg = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');
    const closeModal = document.getElementById('closeModal');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let visibleCards = [];
    let currentIndex = -1;

    const updateVisibleCards = () => {
        visibleCards = Array.from(document.querySelectorAll('.blog-card'))
            .filter(card => card.style.display !== 'none');
    };

    const openModalAt = (index) => {
        const card = visibleCards[index];
        if (!card) return;
        currentIndex = index;
        modalImg.src = card.dataset.image;
        modalTitle.textContent = card.dataset.title;
        modalDesc.textContent = card.dataset.desc;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    };

    blogCards.forEach((card) => {
        card.addEventListener('click', () => {
            updateVisibleCards();
            const index = visibleCards.indexOf(card);
            openModalAt(index);
        });
    });

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) openModalAt(currentIndex - 1);
    });

    nextBtn.addEventListener('click', () => {
        if (currentIndex < visibleCards.length - 1) openModalAt(currentIndex + 1);
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
        currentIndex = -1;
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
    });

    document.addEventListener('keydown', (e) => {
        if (modal.classList.contains('hidden')) return;
        if (e.key === 'Escape') closeModal.click();
        if (e.key === 'ArrowLeft' && currentIndex > 0) openModalAt(currentIndex - 1);
        if (e.key === 'ArrowRight' && currentIndex < visibleCards.length - 1) openModalAt(currentIndex + 1);
    });

    // Filter
    checkboxes.forEach(cb => {
        cb.addEventListener('change', () => {
            const selected = [...checkboxes].filter(c => c.checked).map(c => c.value);
            blogCards.forEach(card => {
                const cat = card.dataset.category;
                card.style.display = selected.length === 0 || selected.includes(cat) ? 'block' : 'none';
            });
        });
    });
});
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
