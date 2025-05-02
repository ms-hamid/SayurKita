<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Sayur Kita')</title>

    <link rel="stylesheet" href="styles/flowbite.min.css">
    <script src="styles/flowbite.min.js"></script>
</head>
<body class="bg-white-100 text-black-800 font-sans">

    <!-- Sidebar -->
    @include('components.sidebar')
    
    <!-- Content -->
    <main>
        @yield('content')
    </main>

</body>
</html>