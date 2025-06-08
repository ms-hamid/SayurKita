<!-- Pastikan Alpine.js sudah disertakan -->
<script src="//unpkg.com/alpinejs" defer></script>

<nav class="flex flex-wrap items-center justify-between px-6 py-4 gap-y-3 relative w-full bg-white shadow z-50" x-data="{ mobileMenuOpen: false }">
  <!-- KIRI: Logo -->
  <div class="flex items-center gap-3 flex-shrink-0">
    <a href="{{ route('landingpage') }}" class="flex items-center gap-3 hover:opacity-80 transition duration-300 ease-in-out">
      <div class="h-[43px] w-auto overflow-hidden">
        <img src="{{ asset('images/logo.png') }}" class="object-contain w-full h-full" alt="Logo">
      </div>
      <div class="flex flex-col">
        <p class="font-extrabold text-xl leading-[30px]">SayurKita</p>
        <p class="text-sm text-cp-black">Vegetable Revolution</p>
      </div>
    </a>
  </div>

  @php
    $navItems = [
      'landingpage' => 'Home',
      'products'     => 'Products',
      'gallery'      => 'Gallery',
      'blog'         => 'Blog',
      'aboutus'      => 'About Us',
    ];

    $productsActive = request()->routeIs('products') || request()->routeIs('list_product');
    $productsLabel = $productsActive ? (request()->routeIs('list_product') ? 'List Product' : 'Products') : 'Products';

    $blogActive = request()->routeIs('blog') || request()->routeIs('list_blog');
    $blogLabel = $blogActive ? (request()->routeIs('list_blog') ? 'List Blog' : 'Blog') : 'Blog';
  @endphp

  <!-- TENGAH: Navigasi Desktop -->
  <ul class="hidden md:flex absolute left-1/2 -translate-x-1/2 gap-[30px]">
    @foreach($navItems as $route => $label)
      @if($route === 'products')
        <!-- DROPDOWN PRODUCTS -->
        <li x-data="{ open: false }" class="relative group font-semibold">
          <button @click="open = !open"
                  class="flex items-center gap-1 hover:text-cp-dark-blue transition duration-300"
                  :class="{ 'text-cp-dark-blue font-bold': open || {{ $productsActive ? 'true' : 'false' }} }"
                  type="button">
            {{ $productsLabel }}
            <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none"
                 stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </button>
          <div x-show="open" @click.outside="open = false" x-transition
               class="absolute top-full left-0 mt-2 w-48 text-sm font-medium bg-white border border-gray-200 rounded-lg shadow-lg z-50">
            <a href="{{ route('products') }}"
               class="block w-full px-4 py-2 border-b hover:bg-gray-100 hover:text-blue-700
                      {{ request()->routeIs('products') ? 'text-blue-700 font-semibold' : '' }}">
              Products
            </a>
            <a href="{{ route('list_product') }}"
               class="block w-full px-4 py-2 hover:bg-gray-100 hover:text-blue-700
                      {{ request()->routeIs('list_product') ? 'text-blue-700 font-semibold' : '' }}">
              List Product  
            </a>
          </div>
        </li>

      @elseif($route === 'blog')
        <!-- DROPDOWN BLOG -->
        <li x-data="{ open: false }" class="relative group font-semibold">
          <button @click="open = !open"
                  class="flex items-center gap-1 hover:text-cp-dark-blue transition duration-300"
                  :class="{ 'text-cp-dark-blue font-bold': open || {{ $blogActive ? 'true' : 'false' }} }"
                  type="button">
            {{ $blogLabel }}
            <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none"
                 stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </button>
          <div x-show="open" @click.outside="open = false" x-transition
               class="absolute top-full left-0 mt-2 w-48 text-sm font-medium bg-white border border-gray-200 rounded-lg shadow-lg z-50">
            <a href="{{ route('blog') }}"
               class="block w-full px-4 py-2 border-b hover:bg-gray-100 hover:text-blue-700
                      {{ request()->routeIs('blog') ? 'text-blue-700 font-semibold' : '' }}">
              Blog
            </a>
            <a href="{{ route('list_blog') }}"
               class="block w-full px-4 py-2 hover:bg-gray-100 hover:text-blue-700
                      {{ request()->routeIs('list_blog') ? 'text-blue-700 font-semibold' : '' }}">
              List Blog
            </a>
          </div>
        </li>

      @else
        <!-- LINK BIASA -->
        <li class="font-semibold transition-all duration-300">
          <a href="{{ route($route) }}"
             class="hover:text-cp-dark-blue transition duration-300
                    {{ request()->routeIs($route) ? 'text-cp-dark-blue font-bold' : '' }}">
            {{ $label }}
          </a>
        </li>
      @endif
    @endforeach
  </ul>

  <!-- KANAN: ICON SETTING -->
  <div class="relative" x-data="{ open: false }">
    <button @click="open = !open"
            class="text-cp-dark-blue focus:outline-none hover:rotate-12 hover:text-blue-700 transition duration-300 ease-in-out">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
           stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33
                 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09a1.65 1.65 0 0 0-1-1.51
                 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06
                 a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09
                 a1.65 1.65 0 0 0 1.51-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06
                 a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33h.09
                 a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51
                 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06
                 a1.65 1.65 0 0 0-.33 1.82v.09a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09
                 a1.65 1.65 0 0 0-1.51 1z"></path>
      </svg>
    </button>
    <div x-show="open" @click.outside="open = false" x-transition
         class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-md z-50 origin-top scale-95">
      <a href="{{ route('settings') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
        Manage Account
      </a>
    </div>
  </div>

  <!-- MOBILE MENU BUTTON -->
  <button class="block md:hidden text-cp-dark-blue focus:outline-none"
          aria-label="Toggle mobile menu"
          @click="mobileMenuOpen = !mobileMenuOpen">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
         stroke-linecap="round" stroke-linejoin="round">
      <line x1="3" y1="6" x2="21" y2="6"></line>
      <line x1="3" y1="12" x2="21" y2="12"></line>
      <line x1="3" y1="18" x2="21" y2="18"></line>
    </svg>
  </button>

  <!-- MOBILE MENU -->
  <div x-show="mobileMenuOpen" @click.outside="mobileMenuOpen = false" 
       class="w-full md:hidden absolute top-full left-0 bg-white shadow-lg border-t border-gray-200 z-40"
       x-transition:enter="transition ease-out duration-200"
       x-transition:enter-start="opacity-0 transform -translate-y-2"
       x-transition:enter-end="opacity-100 transform translate-y-0"
       x-transition:leave="transition ease-in duration-150"
       x-transition:leave-start="opacity-100 transform translate-y-0"
       x-transition:leave-end="opacity-0 transform -translate-y-2">
    
    <ul class="flex flex-col py-4 gap-2 px-6 text-base font-semibold">
      @foreach($navItems as $route => $label)
        @if($route === 'products')
          <!-- MOBILE DROPDOWN PRODUCTS -->
          <li x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="flex justify-between w-full items-center hover:text-cp-dark-blue transition duration-300">
              <span>{{ $productsLabel }}</span>
              <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </button>
            <div x-show="open" x-transition class="mt-2 pl-4 border-l border-gray-300">
              <a href="{{ route('products') }}" class="block py-2 hover:text-blue-700 {{ request()->routeIs('products') ? 'text-blue-700 font-semibold' : '' }}">
                Products
              </a>
              <a href="{{ route('list_product') }}" class="block py-2 hover:text-blue-700 {{ request()->routeIs('list_product') ? 'text-blue-700 font-semibold' : '' }}">
                List Product
              </a>
            </div>
          </li>

        @elseif($route === 'blog')
          <!-- MOBILE DROPDOWN BLOG -->
          <li x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="flex justify-between w-full items-center hover:text-cp-dark-blue transition duration-300">
              <span>{{ $blogLabel }}</span>
              <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </button>
            <div x-show="open" x-transition class="mt-2 pl-4 border-l border-gray-300">
              <a href="{{ route('blog') }}" class="block py-2 hover:text-blue-700 {{ request()->routeIs('blog') ? 'text-blue-700 font-semibold' : '' }}">
                Blog
              </a>
              <a href="{{ route('list_blog') }}" class="block py-2 hover:text-blue-700 {{ request()->routeIs('list_blog') ? 'text-blue-700 font-semibold' : '' }}">
                List Blog
              </a>
            </div>
          </li>

        @else
          <!-- MOBILE LINK BIASA -->
          <li>
            <a href="{{ route($route) }}" class="block hover:text-cp-dark-blue transition duration-300
                {{ request()->routeIs($route) ? 'text-cp-dark-blue font-bold' : '' }}">
              {{ $label }}
            </a>
          </li>
        @endif
      @endforeach

      <!-- Tambahkan Manage Account di Mobile -->
      <li class="pt-4 border-t border-gray-200">
        <a href="{{ route('settings') }}" class="block hover:text-cp-dark-blue font-semibold transition duration-300">
          Manage Account
        </a>
      </li>
    </ul>
  </div>
</nav>
