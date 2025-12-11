<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Siloam Hospital College Of Health Sciences" />
    <meta name="generator" content="Astro v5.13.2" />

    <title>@yield('title', 'Page Title')</title>
    <link rel="icon" type="image/png/jpg" href="{{ asset('assets/images/LOGO.jpg') }}?v=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
         {{-- Vite assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="theme-color" content="#712cf9" />
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Page content --}}
    <main class="flex-grow-1 container my-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style> body { padding-top: 60px; /* space for fixed navbar */ } </style>
</body>
</html>
