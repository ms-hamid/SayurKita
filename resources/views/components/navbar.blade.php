<header class="bg-[#77B254] text-black py-2 px-4">
  <div class="flex items-center justify-between w-full">
    
    <!-- Kiri: Logo & Navigasi -->
    <div class="flex items-center space-x-8">
      <!-- Logo -->
      <div>
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
      </div>

      <!-- Navigation Links -->
      <nav>
        <ul class="flex divide-x divide-white text-base font-medium">
          <li>
            <a href="#" class="px-4 py-2 hover:text-gray-500">Home</a>
          </li>
          <li>
            <a href="products" class="px-4 py-2 hover:text-gray-500">Products</a>
          </li>
          <li>
            <a href="aboutus" class="px-4 py-2 hover:text-gray-500">About Us</a>
          </li>
          <li>
            <a href="blog" class="px-4 py-2 hover:text-gray-500">Blog</a>
          </li>
          <li>
            <a href="gallery" class="px-4 py-2 hover:text-gray-500">Gallery</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Kanan: Search Bar & Avatar -->
    <div class="flex items-center space-x-4">
      <!-- Search Form -->
      <form action="method="GET" class="flex items-center border border-gray-300 rounded-md px-2 py-1 bg-white">
        <!-- Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
        </svg>
        <!-- Input -->
        <input
          type="text"
          name="keyword"
          placeholder="Search..."
          class="outline-none px-2 py-1 w-40"
        >
        <!-- Button -->
        <button type="submit" class="ml-2 text-white bg-green-600 hover:bg-green-700 px-3 py-1 rounded">
          Search
        </button>
      </form>

      <!-- Avatar -->
      <div class="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center">
        <!-- Kosong (isi nanti) -->
      </div>
    </div>

  </div>
</header>
