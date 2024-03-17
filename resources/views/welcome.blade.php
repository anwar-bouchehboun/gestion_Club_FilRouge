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
    <x-nav />
    <x-hero />

    <section class= "body-font mt-3 md:mt-0">
        <h2 class=" uppercase text-4xl font-bold md:ms-12 ms-3">Club</h2>
        <div class="container px-5 md:py-12 py-11 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div
                        class="border-2 shadow border-gray-100 shadow-slate-300 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                        <img src="./storage/image/club.jpg" alt="" srcset="club image">
                        <a href="#">
                            <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div
                        class="border-2 shadow border-gray-100 shadow-slate-300 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                        <img src="./storage/image/club.jpg" alt="" srcset="club image">
                        <a href="#">
                            <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                        </a>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div
                        class="border-2 shadow border-gray-100 shadow-slate-300 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                        <img src="./storage/image/club.jpg" alt="" srcset="club image">
                        <a href="#">
                            <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                        </a>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div
                        class="border-2 shadow border-gray-100 shadow-slate-300 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                        <img src="./storage/image/club.jpg" alt="" srcset="club image">
                        <a href="#">
                            <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                        </a>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div
                        class="border-2 shadow border-gray-100 shadow-slate-300 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                        <img src="./storage/image/club.jpg" alt="" srcset="club image">
                        <a href="#">
                            <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                        </a>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div
                        class="border-2 shadow border-gray-100 shadow-slate-300 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                        <img src="./storage/image/club.jpg" alt="" srcset="club image">
                        <a href="#">
                            <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div
                        class="border-2 shadow border-gray-100 shadow-slate-300 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                        <img src="./storage/image/club.jpg" alt="" srcset="club image">
                        <a href="#">
                            <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                        </a>
                    </div>
                </div>

                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div
                        class="border-2 shadow border-gray-100 shadow-slate-300 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                        <img src="./storage/image/club.jpg" alt="" srcset="club image">
                        <a href="#">
                            <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                        </a>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <x-about />
<x-footer />
</body>

</html>
