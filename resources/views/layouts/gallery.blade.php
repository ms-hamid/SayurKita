<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('styles/output.css') }}" rel="stylesheet">
  <title>@yield('title', 'Default Title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind -->
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
    }
  </script>

  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-poppins">

  <!-- Navbar -->
  @include('components.navbar')

  <!-- Main Content -->
  <main class="flex-1 bg-gray-50 p-6">
    @yield('content')
  </main>

  <!-- Footer -->
  @include('components.footer')

  <!-- AOS Animation Script -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
