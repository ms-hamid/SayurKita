<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Default Title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
  />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ["Poppins", "sans-serif"],
          },
        },
      },
    };
  </script>
</head>
<body class="bg-gray-100 font-poppins min-h-screen flex flex-col">
  <!-- Navbar -->
  @include('components.navbar')

  <!-- Main Content -->
  <main class="flex-1 bg-gray-50 p-6">
    @yield('content')
  </main>

  <!-- Footer -->
  @include('components.footer')
</body>
</html>
