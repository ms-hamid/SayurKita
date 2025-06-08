<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Default Title')</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
</head>
<body class="bg-gray-100 font-poppins flex flex-col min-h-screen">

  <!-- Navbar -->
  @include('components.navbar')

  <!-- Main Wrapper -->
  <div class="flex flex-1">
    <!-- Sidebar -->
    @include('components.sidebar')

    <!-- Page Content -->
    <main class="flex-1 bg-gray-50 p-6">
      @yield('content')
    </main>
  </div>

  <!-- Footer -->
  @include('components.footer')

</body>
</html>
