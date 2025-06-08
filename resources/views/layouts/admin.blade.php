<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Sayur Kita')</title>
    @vite([ 'resources/css/app.css', 'resources/js/app.js' ])
</head>
<body class="bg-gray-200 text-black font-sans">

    <!-- Sidebar -->
    @include('components.sidebar_admin')
    
    <!-- Content -->
    <main>
        @yield('content')
    </main>

</body>
</html>