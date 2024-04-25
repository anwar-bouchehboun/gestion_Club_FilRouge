<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="./storage/image/logo.png" type="image/x-icon">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <title>PHONIXCLUB</title>
    @stack('vite')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>
    @include('layouts.nav')


    {{-- @yield('content') --}}
    <main class="">
        {{ $slot }}
    </main>
    <x-footer />
    <script src="/assets/js/Sotrecommentiare.js"></script>
    <script src="/assets/js/etoile.js"></script>
    {{-- <script src="/assets/js/addmember.js"></script> --}}
</body>

</html>
