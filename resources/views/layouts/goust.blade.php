<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="./storage/image/logo.png" type="image/x-icon">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHONIXCLUB</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('vite')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    @include('layouts.nav')
    <main class="">
        {{ $solt }}
    </main>



    <x-footer />
    {{-- <script src="/assets/js/UpdateCommentaireSous.js"></script> --}}

</body>

</html>
<script src="/assets/js/Sotrecommentiaresous.js"></script>
@push('vite')
    @vite('resources/js/editCommentaireSous.js')
    {{-- @vite('resources/js/deleteCommenteire.js') --}}
@endpush
