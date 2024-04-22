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
    @include('layouts.nav')

    <section>
        <div class="py-8 text-black ">
            <div class="flex flex-wrap items-center my-12 md:my-24 justify-evenly">
                <div class="flex flex-col items-start justify-center w-full p-8 lg:w-1/3">
                    <h1 class="p-2 text-3xl text-[#24B49A] md:text-5xl tracking-loose font-semibold">PHONIX CLUB
                      </h1>
                    <h2 class="mb-2 text-3xl font-medium leading-relaxed uppercase md:text-5xl md:leading-snug">Space: there is no end
                    </h2>
                    <p class="mb-4 text-sm font-medium text-black md:text-base">Explore your favourite events and
                        register now to showcase your talent and win exciting prizes.</p>

                </div>
                        <img src="../storage/image/logo.png" class="relative z-50 rounded-md lg:w-1/3" alt="Logo club" />



            </div>
        </div>
    </section>

    {{-- <x-hero /> --}}
    <x-slide />



    {{-- @yield('content') --}}
    <main>
        <x-about />
        {{ $solt }}
    </main>

    <x-footer />
</body>

</html>
