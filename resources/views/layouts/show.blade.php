<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('layouts.nav');
    <div class="pb-6 ">
        <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Show Sous Categorie</h2>
        <hr class="w-20 h-1 bg-black ms-3 md:mb-1 mb-9 md:ms-12">
    </div>
    {{-- @yield('content') --}}
    <main class="my-2 md:my-4 md:w-52">
        {{ $solt }}
    </main>

    <x-footer />
</body>

</html>
