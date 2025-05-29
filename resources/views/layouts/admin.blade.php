<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Sayur Kita')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/flowbite.min.css">
    <script src="styles/flowbite.min.js"></script>
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
<body class="bg-white-100 text-black-800 font-poppins">

    <!-- Sidebar -->
    @include('components.sidebar_admin')
    
    <!-- Content -->
    <main>
        @yield('content')
    </main>

</body>
</html>