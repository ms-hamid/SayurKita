<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sayur Kita')</title>

    <!-- Tailwind dan Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@1.6.6/dist/flowbite.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.6/dist/flowbite.min.js" defer></script>
</head>
<body class="bg-green-100 min-h-screen flex items-center justify-center">
    <main class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
        @yield('content')
    </main>
</body>
</html>
