<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('styles/output.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Default Title')</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>


  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
          },
        },
      },
    };
  </script>

  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <!-- Rellax.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>

  <!-- Custom style -->
  <style>
    .parallax-container {
      position: relative;
      overflow: hidden;
      height: 300px;
    }

    .parallax-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 120%;
      object-fit: cover;
    }

    .overlay-text {
      position: relative;
      z-index: 10;
      color: white;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
    }

    @keyframes fade-in-blur {
      0% {
        opacity: 0;
        filter: blur(4px);
        transform: translateY(10px);
      }
      100% {
        opacity: 1;
        filter: blur(0);
        transform: translateY(0);
      }
    }

    .animate-fade-in-blur {
      animation: fade-in-blur 1s ease-out forwards;
    }
  </style>

  @stack('styles')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col font-poppins">

  @include('components.navbar')

  <main class="flex-grow">
    @yield('content')
  </main>

  @include('components.footer')

  <!-- AOS JS & Rellax Init -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

  <script>
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      offset: 100,
    });

    const rellax = new Rellax('.rellax');

    gsap.registerPlugin(ScrollTrigger);
    gsap.to(".parallax-image", {
      scale: 1.1,
      scrollTrigger: {
        trigger: ".parallax-container",
        start: "top center",
        end: "bottom top",
        scrub: true
      }
    });

    VanillaTilt.init(document.querySelector(".parallax-container"), {
      max: 10,
      speed: 400,
      glare: true,
      "max-glare": 0.3
    });
  </script>

  @stack('scripts')
</body>
</html>
