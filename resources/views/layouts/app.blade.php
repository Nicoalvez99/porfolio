<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script>
        const fileInput = document.getElementById('file');
        const fileStatus = document.getElementById('file-status');
        const fileSvg1 = document.querySelector(".svg1");
        const fileSvg2 = document.querySelector(".svg2");

        fileInput.addEventListener('change', function() {
            if (fileInput.files.length > 0) {
                fileStatus.textContent = 'Imagen subida';
                fileSvg1.classList.add('hidden');
                fileSvg2.classList.remove('hidden');
                fileSvg2.classList.add('block');
            } else {
                fileStatus.textContent = 'Sin archivos subidos';
            }
        });
    </script>
</body>

</html>