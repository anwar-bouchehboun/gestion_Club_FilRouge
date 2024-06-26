<x-platform-layout>
    <x-slot name="slot">
        {{-- section catagrorie --}}

        <section class= "mt-3 body-font md:mt-0">
            <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Categorie</h2>
            <hr class="w-20 h-1 bg-black ms-3 md:mb-1 mb-9 md:ms-12">

            <div class="container px-5 mx-auto md:py-12 py-11">
                <div class="flex flex-wrap -m-4 text-center">
                    <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                        <div
                            class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                            <img src="./storage/image/club.jpg" alt="">
                            <a href="#">
                                <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                            </a>
                        </div>
                    </div>
                    <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                        <div
                            class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                            <img src="./storage/image/club.jpg" alt="">
                            <a href="#">
                                <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                            </a>
                        </div>
                    </div>

                    <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                        <div
                            class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                            <img src="./storage/image/club.jpg" alt="">
                            <a href="#">
                                <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                            </a>
                        </div>
                    </div>

                    <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                        <div
                            class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                            <img src="./storage/image/club.jpg" alt="">
                            <a href="#">
                                <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                            </a>
                        </div>
                    </div>

                    <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                        <div
                            class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                            <img src="./storage/image/club.jpg" alt="">
                            <a href="#">
                                <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                            </a>
                        </div>
                    </div>

                    <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                        <div
                            class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                            <img src="./storage/image/club.jpg" alt="">
                            <a href="#">
                                <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                            </a>
                        </div>
                    </div>
                    <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                        <div
                            class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                            <img src="./storage/image/club.jpg" alt="">
                            <a href="#">
                                <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                            </a>
                        </div>
                    </div>

                    <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                        <div
                            class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                            <img src="./storage/image/club.jpg" alt="image">
                            <a href="#">
                                <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">GAMING</h2>
                            </a>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        {{-- Event --}}
        <div class="  w-full font-[sans-serif] mb-7">
            <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Event</h2>
            <hr class="w-20 h-1 bg-black ms-3 md:mb-1 mb-9 md:ms-12">

            <div class="grid md:grid-cols-2 gap-4 items-center md:max-h-[475px] overflow-hidden">
                <div class="p-6">
                    <h1 class="text-2xl font-bold md:text-4xl text-[#24B49A]">MUSIC Event</h1>
                    <p class="mt-4 text-sm font-semibold leading-9 text-black">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Duis
                        accumsan, nuncet
                        tempus blandit, metus mi consectetur nibh, a pharetra felis turpis vitae ligula. Etiam laoreet
                        velit nec
                        neque
                        ultrices, non consequat mauris tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Duis
                        accumsan, nuncet
                        tempus blandit, metus mi consectetur nibh.</p>

                    <div class="flex justify-between px-2 ">
                        <div>
                            <p class="mt-3 text-sm italic text-black ">Localisation - <span
                                    class="text-[#24B49A]">12-12-2024</span></p>
                            <p class="mt-3 italic text-black">Price : <span class="text-[#24B49A]">500</span>$</p>
                        </div>
                        <div>
                            <form action="{{ route('session') }}" method="post">
                                @csrf
                                <input type="text" name="price" value="500" hidden>
                                <button type="submit"
                                    class=" px-9 py-3 mt-10 text-sm font-semibold tracking-wider text-white bg-[#24B49A] border-none rounded outline-none ">Reservé</button>
                            </form>

                        </div>

                    </div>

                </div>


                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://readymadeui.com/team-image.webp"
                                class="object-cover w-full h-full shrink-0" />
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://readymadeui.com/team-image.webp"
                                class="object-cover w-full h-full shrink-0" />
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://readymadeui.com/team-image.webp"
                                class="object-cover w-full h-full shrink-0" />
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://readymadeui.com/team-image.webp"
                                class="object-cover w-full h-full shrink-0" />
                        </div>
                    </div>

                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
        </div>

    {{-- commentaire --}}
    <section class="">
        <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Comentaire</h2>

        <div class="container py-5 mx-auto my-5">
            <div class="flex justify-center">
                <div class="w-full md:w-10/12 lg:w-8/12">
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="p-4">
                            <div class="flex items-center">
                                <img class="w-16 mr-3 rounded-full shadow-md md:w-20 lg:w-24"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp"
                                    alt="avatar">
                                <div>
                                    <h6 class="mb-1 font-bold text-primary">Lily Coleman</h6>
                                    <p class="mb-0 text-sm text-[#24B49A]">Shared publicly - Jan 2020</p>
                                </div>
                            </div>

                            <p class="pb-2 mt-3 mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                            </p>


                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <img class="w-16 mr-3 rounded-full shadow-md md:w-20 lg:w-24"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp"
                                    alt="avatar">
                                <div>
                                    <h6 class="mb-1 font-bold text-primary">Lily Coleman</h6>
                                    <p class="mb-0 text-sm text-[#24B49A]">Shared publicly - Jan 2020</p>
                                </div>
                            </div>

                            <p class="pb-2 mt-3 mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                            </p>


                        </div>

                        <div class="px-4 py-3 bg-gray-100">
                            <form action="">
                                <div class="flex items-center">
                                    <img class="w-10 h-10 mr-3 rounded-full shadow-md md:w-12 md:h-12 lg:w-16 lg:h-16"
                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp"
                                        alt="avatar">



                                    <div class="w-full">
                                        <textarea
                                            class="w-full h-24 bg-white border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 focus:ring-opacity-50"
                                            id="textAreaExample" rows="4"></textarea>
                                        <label class="sr-only" for="textAreaExample">Message</label>
                                    </div>
                                </div>
                                <div class="pt-1 mt-2 text-right">
                                    <button type="button"
                                        class="px-4 py-2 mr-2 text-white bg-[#24B49A] rounded-md">Post
                                        comment</button>
                                    <button type="button"
                                        class="px-4 py-2 text-[#24B49A] border border-[#24B49A] rounded-md">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </x-slot>
</x-platform-layout>
