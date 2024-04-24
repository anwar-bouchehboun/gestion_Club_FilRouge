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

        <div class="relative py-4 text-black ">
            <div class="flex flex-wrap items-center my-12 md:my-24 justify-evenly">
                <div class="flex flex-col items-start justify-center w-full p-8 lg:w-1/3">

                    <h1 class="p-2 text-3xl text-[#24B49A] md:text-5xl tracking-loose font-semibold">PHONIX CLUB
                    </h1>
                    <h2 class="mb-2 text-3xl font-medium leading-relaxed uppercase md:text-5xl md:leading-snug">Space:
                        there is no end
                    </h2>
                    <p class="mb-4 text-sm font-medium text-black md:text-base">Explore your favourite events and
                        register now to showcase your talent and win exciting prizes.</p>

                </div>
                <img src="../storage/image/logo.png" class="relative z-50 rounded-md lg:w-1/3" alt="Logo club" />



            </div>
        </div>
    </section>
    <section class=" min-h-[50vh] bg-no-repeat px-6 bg-cover items-center justify-center  flex"
        style="background-color:#aeefe3">
        <div class="max-w-6xl mx-10 md:mx-auto">
            <div class="grid gap-8 py-8 mx-auto lg:grid-cols-3 md:grid-cols-2 max-md:max-w-lg">
                <div class="px-4 py-6 text-center bg-white rounded group hover:bg-[#24B49A] hover:text-white">
                    <h3 class="mb-4 text-xl font-extrabold">Trouvez votre domaine</h3>
                    <p class="text-sm">Explorez plusieurs domaines pour découvrir vos passions et compétences. Pesez
                        les opportunités et perspectives de carrière avant de prendre une décision éclairée. Trouvez
                        le domaine qui correspond le mieux à vos intérêts et objectifs.</p>

                </div>
                <div class="px-4 py-6 text-center bg-white rounded group hover:bg-[#24B49A] hover:text-white">
                    <h3 class="mb-4 text-xl font-extrabold">Trouver une université</h3>
                    <p class="text-sm">Trouver la bonne université est crucial pour votre parcours éducatif.
                        Explorez les cours, les programmes et l'atmosphère de chaque établissement pour trouver
                        celui qui correspond le mieux à vos besoins.</p>

                </div>
                <div class="px-4 py-6 text-center bg-white rounded group hover:bg-[#24B49A] hover:text-white">
                    <h3 class="mb-4 text-xl font-extrabold">Trouvez la réponse à votre question
                    </h3>
                    <p class="text-sm">Partagez vos expériences scolaires, discutez avec d'autres membres et
                        posez-leur des questions pour élargir votre compréhension et enrichir votre expérience.</p>

                </div>
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
