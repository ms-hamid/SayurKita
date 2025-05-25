<nav class="flex flex-wrap items-center justify-between bg-white p-[20px_30px] rounded-[20px] gap-y-3 relative">
  <!-- Kiri: Logo dan Brand -->
  <div class="flex items-center gap-3 flex-shrink-0">
    <div class="h-[43px] w-auto overflow-hidden">
      <img src="{{ asset('images/logo.png') }}" class="object-contain w-full h-full" alt="Logo">
    </div>
    <div class="flex flex-col">
      <p id="CompanyName" class="font-extrabold text-xl leading-[30px]">SayurKita</p>
      <p id="CompanyTagline" class="text-sm text-cp-light-grey">Vegetable Revolution</p>
    </div>
  </div>

  <!-- Tengah: Navigasi -->
  <ul class="hidden md:flex absolute left-1/2 -translate-x-[55%] gap-[30px]">
    <li class="font-semibold transition-all duration-300">
      <a href="{{ route('landingpage') }}" class="{{ request()->routeIs('landingpage') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">Home</a>
    </li>
    <li class="font-semibold transition-all duration-300">
      <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">Products</a>
    </li>
    <li class="font-semibold transition-all duration-300">
      <a href="{{ route('aboutus') }}" class="{{ request()->routeIs('aboutus') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">About Us</a>
    </li>
    <li class="font-semibold transition-all duration-300">
      <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">Blog</a>
    </li>
    <li class="font-semibold transition-all duration-300">
      <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">Gallery</a>
    </li>
  </ul>

  <!-- Kanan: Search bar + icon + hamburger -->
  <div class="flex items-center gap-3 relative">
    <!-- Search Bar (hidden by default) -->
    <form id="searchBar" class="hidden w-[280px]" onsubmit="event.preventDefault(); /* submit handling here */">
      <label for="default-search" class="sr-only">Search</label>
      <div class="relative">
        <input type="search" id="default-search" placeholder="Search..." class="block w-full p-2 ps-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" required>
        <button type="submit" class="text-white absolute right-1 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1">Go</button>
      </div>
    </form>

    <!-- Search Icon -->
    <button onclick="toggleSearch()" class="text-cp-dark-blue">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
    </button>

    <!-- Hamburger Icon untuk mobile -->
    <button class="block md:hidden text-cp-dark-blue focus:outline-none" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
    </button>
  </div>

  <!-- Menu mobile -->
  <ul id="mobile-menu" class="hidden w-full mt-4 md:hidden flex flex-col gap-4">
    <li class="font-semibold"><a href="{{ route('landingpage') }}" class="{{ request()->routeIs('landingpage') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">Home</a></li>
    <li class="font-semibold"><a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">Products</a></li>
    <li class="font-semibold"><a href="{{ route('aboutus') }}" class="{{ request()->routeIs('aboutus') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">About Us</a></li>
    <li class="font-semibold"><a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">Blog</a></li>
    <li class="font-semibold"><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-cp-dark-blue' : 'hover:text-cp-dark-blue' }}">Gallery</a></li>
  </ul>
</nav>

<script>
  function toggleSearch() {
    const searchBar = document.getElementById('searchBar');
    searchBar.classList.toggle('hidden');
  }
</script>
