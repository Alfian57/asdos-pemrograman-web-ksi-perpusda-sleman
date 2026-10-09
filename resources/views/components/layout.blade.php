<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Perpusda Sleman' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900 min-h-screen">
    {{-- Navbar aplikasi --}}
    <x-navbar />

    {{-- Slot untuk konten halaman --}}
    {{ $slot }}
</body>

</html>
