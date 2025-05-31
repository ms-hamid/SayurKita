@extends('layouts.list_product')

@section('title', 'List Product')

@section('content')

<div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center mb-10">Galeri Sayuran</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sidebar Filter -->
        <aside class="md:col-span-1 bg-gray-100 p-6 rounded shadow">
            <h2 class="text-lg font-semibold mb-4">Filter By</h2>

            <form method="GET" action="{{ url('/list_product') }}" class="space-y-4 text-sm text-gray-700">
                <div>
                    <input type="radio" id="terbaru" name="sort" value="terbaru"
                        {{ request('sort') == 'terbaru' ? 'checked' : '' }}>
                    <label for="terbaru">Update Terbaru</label>
                </div>
                <div>
                    <input type="radio" id="az" name="sort" value="az"
                        {{ request('sort') == 'az' ? 'checked' : '' }}>
                    <label for="az">Urutan A-Z</label>
                </div>

                <div class="mt-4">
                    <p class="font-semibold mb-2">Kategori:</p>
                    <div class="flex gap-4">
                        <div class="space-y-2 w-1/2">
                            @foreach ($categories->take(2) as $cat)
                                <div>
                                    <input
                                        type="checkbox"
                                        name="category[]"
                                        value="{{ $cat->category_id }}"
                                        id="category_{{ $cat->category_id }}"
                                        {{ is_array(request('category')) && in_array($cat->category_id, request('category')) ? 'checked' : '' }}
                                    >
                                    <label for="category_{{ $cat->category_id }}">{{ $cat->category_name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="space-y-2 w-1/2">
                            @foreach ($categories->skip(2)->take(2) as $cat)
                                <div>
                                    <input
                                        type="checkbox"
                                        name="category[]"
                                        value="{{ $cat->category_id }}"
                                        id="category_{{ $cat->category_id }}"
                                        {{ is_array(request('category')) && in_array($cat->category_id, request('category')) ? 'checked' : '' }}
                                    >
                                    <label for="category_{{ $cat->category_id }}">{{ $cat->category_name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <button type="submit" class="mt-4 px-4 py-2 bg-green-500 text-white rounded">Filter</button>
            </form>
        </aside>

        <!-- Gallery Grid -->
        <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($vegetables as $veg)
                <div class="bg-white p-4 rounded shadow text-center">
                    <h2 class="text-base font-semibold mb-2">{{ $veg->name }}</h2>
                    <img src="{{ asset('storage/' . $veg->image_path) }}" alt="{{ $veg->name }}"
                        class="w-full h-40 object-contain bg-gray-100 p-2">
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">Tidak ada produk ditemukan dengan filter tersebut.</p>
            @endforelse
        </div>
    </div>
</div>

@endsection
