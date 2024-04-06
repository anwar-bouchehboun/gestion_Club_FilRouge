<x-platform-layout>
    <x-slot name="solt">
        <section class="mt-10 ">
            <div class="md:ps-24 md:my-0">
                <div class="font-sans text-[#333] max-w-6xl max-md:max-w-md mx-auto">
                    <div class="grid items-center md:grid-cols-2 md:gap-12">
                        <div class="relative z-50 max-md:order-1 max-md:text-center">
                            <h2 class="lg:text-6xl md:text-5xl text-2xl font-extrabold mb-4 md:!leading-[56px]"><span
                                    class="text-[#24B49A] uppercase">Club</span>  {{ $clubs->club }} <span class="text-[#24B49A]">and</span>
                                Categories
                            </h2>
                            <p class="mt-6 text-base leading-relaxed">
                                {{ $clubs->discrption }}

                            </p>
                            <button type='button'
                                class="bg-[#24B49A]  border-2 border-[#24B49A] mt-10 transition-all text-black font-bold text-sm rounded-md px-6 py-2.5">Learn
                                More</button>
                            {{-- <div class="mt-10">
                          <div class="grid items-center gap-4 sm:grid-cols-3">
                            <div class="flex flex-col items-center text-center">
                              <h5 class="mb-1 text-xl font-bold">10+</h5>
                              <p>Years Experience</p>
                            </div>
                            <div class="flex flex-col items-center text-center">
                              <h5 class="mb-1 text-xl font-bold">890</h5>
                              <p>Cases Solved</p>
                            </div>
                            <div class="flex flex-col items-center text-center">
                              <h5 class="mb-1 text-xl font-bold">250</h5>
                              <p>Business Partners</p>
                            </div>
                          </div>
                        </div> --}}
                        </div>
                        <div
                            class="lg:h-[550px] md:h-[650px] flex items-center relative max-md:before:hidden before:absolute md:ms-16 ms-0 before:h-[120%] before:w-[120%] before:right-0 before:z-0">
                            <img src="../storage/{{ $clubs->image }} " class="relative z-50 rounded-md lg:w-4/5" alt="Logo club" />
                        </div>
                    </div>
                    {{-- <div class="relative z-50 grid gap-4 md:grid-cols-3 md:px-4 max-md:mt-10">
                        <div class="p-6 bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="w-12 mb-4 inline-block bg-[#24B49A] p-3 rounded-md" viewBox="0 0 32 32">
                                <path
                                    d="M28.068 12h-.128a.934.934 0 0 1-.864-.6.924.924 0 0 1 .2-1.01l.091-.091a2.938 2.938 0 0 0 0-4.147l-1.511-1.51a2.935 2.935 0 0 0-4.146 0l-.091.091A.956.956 0 0 1 20 4.061v-.129A2.935 2.935 0 0 0 17.068 1h-2.136A2.935 2.935 0 0 0 12 3.932v.129a.956.956 0 0 1-1.614.668l-.086-.091a2.935 2.935 0 0 0-4.146 0l-1.516 1.51a2.938 2.938 0 0 0 0 4.147l.091.091a.935.935 0 0 1 .185 1.035.924.924 0 0 1-.854.579h-.128A2.935 2.935 0 0 0 1 14.932v2.136A2.935 2.935 0 0 0 3.932 20h.128a.934.934 0 0 1 .864.6.924.924 0 0 1-.2 1.01l-.091.091a2.938 2.938 0 0 0 0 4.147l1.51 1.509a2.934 2.934 0 0 0 4.147 0l.091-.091a.936.936 0 0 1 1.035-.185.922.922 0 0 1 .579.853v.129A2.935 2.935 0 0 0 14.932 31h2.136A2.935 2.935 0 0 0 20 28.068v-.129a.956.956 0 0 1 1.614-.668l.091.091a2.935 2.935 0 0 0 4.146 0l1.511-1.509a2.938 2.938 0 0 0 0-4.147l-.091-.091a.935.935 0 0 1-.185-1.035.924.924 0 0 1 .854-.58h.128A2.935 2.935 0 0 0 31 17.068v-2.136A2.935 2.935 0 0 0 28.068 12ZM29 17.068a.933.933 0 0 1-.932.932h-.128a2.956 2.956 0 0 0-2.083 5.028l.09.091a.934.934 0 0 1 0 1.319l-1.511 1.509a.932.932 0 0 1-1.318 0l-.09-.091A2.957 2.957 0 0 0 18 27.939v.129a.933.933 0 0 1-.932.932h-2.136a.933.933 0 0 1-.932-.932v-.129a2.951 2.951 0 0 0-5.028-2.082l-.091.091a.934.934 0 0 1-1.318 0l-1.51-1.509a.934.934 0 0 1 0-1.319l.091-.091A2.956 2.956 0 0 0 4.06 18h-.128A.933.933 0 0 1 3 17.068v-2.136A.933.933 0 0 1 3.932 14h.128a2.956 2.956 0 0 0 2.083-5.028l-.09-.091a.933.933 0 0 1 0-1.318l1.51-1.511a.932.932 0 0 1 1.318 0l.09.091A2.957 2.957 0 0 0 14 4.061v-.129A.933.933 0 0 1 14.932 3h2.136a.933.933 0 0 1 .932.932v.129a2.956 2.956 0 0 0 5.028 2.082l.091-.091a.932.932 0 0 1 1.318 0l1.51 1.511a.933.933 0 0 1 0 1.318l-.091.091A2.956 2.956 0 0 0 27.94 14h.128a.933.933 0 0 1 .932.932Z"
                                    data-original="#000000" />
                                <path d="M16 9a7 7 0 1 0 7 7 7.008 7.008 0 0 0-7-7Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Z"
                                    data-original="#000000" />
                            </svg>
                            <h3 class="mb-2 text-xl font-bold">Customization</h3>
                            <p class="text-sm">Customize your category to suit your needs.</p>
                        </div>
                        <div class="p-6 bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="w-12 mb-4 inline-block bg-[#24B49A] p-3 rounded-md" viewBox="0 0 512.001 512.001">
                                <path
                                    d="M271.029 0c-33.091 0-61 27.909-61 61s27.909 61 61 61 60-27.909 60-61-26.909-61-60-61zm66.592 122c-16.485 18.279-40.096 30-66.592 30-26.496 0-51.107-11.721-67.592-30-14.392 15.959-23.408 36.866-23.408 60v15c0 8.291 6.709 15 15 15h151c8.291 0 15-6.709 15-15v-15c0-23.134-9.016-44.041-23.408-60zM144.946 460.404 68.505 307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979 9.897c-7.439 3.689-10.466 12.73-6.753 20.156l90 180c3.701 7.423 12.704 10.377 20.083 6.738l19.722-9.771c14.875-7.368 20.938-25.417 13.53-40.272zM499.73 247.7c-12.301-9-29.401-7.2-39.6 3.9l-82 100.8c-5.7 6-16.5 9.6-22.2 9.6h-69.901c-8.401 0-15-6.599-15-15s6.599-15 15-15h60c16.5 0 30-13.5 30-30s-13.5-30-30-30h-78.6c-7.476 0-11.204-4.741-17.1-9.901-23.209-20.885-57.949-30.947-93.119-22.795-19.528 4.526-32.697 12.415-46.053 22.993l-.445-.361-21.696 19.094L174.28 452h171.749c28.2 0 55.201-13.5 72.001-36l87.999-126c9.9-13.201 7.2-32.399-6.299-42.3z"
                                    data-original="#000000" />
                            </svg>
                            <h3 class="mb-2 text-xl font-bold">Support</h3>
                            <p class="text-sm">24/7 customer support for all your inquiries.</p>
                        </div>
                        <div class="p-6 bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="w-12 mb-4 inline-block bg-[#24B49A] p-3 rounded-md" viewBox="0 0 24 24">
                                <g fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M17.03 8.97a.75.75 0 0 1 0 1.06l-4.2 4.2a.75.75 0 0 1-1.154-.114l-1.093-1.639L8.03 15.03a.75.75 0 0 1-1.06-1.06l3.2-3.2a.75.75 0 0 1 1.154.114l1.093 1.639L15.97 8.97a.75.75 0 0 1 1.06 0z"
                                        data-original="#000000" />
                                    <path
                                        d="M13.75 9.5a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-1.25H14.5a.75.75 0 0 1-.75-.75z"
                                        data-original="#000000" />
                                    <path
                                        d="M3.095 3.095C4.429 1.76 6.426 1.25 9 1.25h6c2.574 0 4.57.51 5.905 1.845C22.24 4.429 22.75 6.426 22.75 9v6c0 2.574-.51 4.57-1.845 5.905C19.571 22.24 17.574 22.75 15 22.75H9c-2.574 0-4.57-.51-5.905-1.845C1.76 19.571 1.25 17.574 1.25 15V9c0-2.574.51-4.57 1.845-5.905zm1.06 1.06C3.24 5.071 2.75 6.574 2.75 9v6c0 2.426.49 3.93 1.405 4.845.916.915 2.419 1.405 4.845 1.405h6c2.426 0 3.93-.49 4.845-1.405.915-.916 1.405-2.419 1.405-4.845V9c0-2.426-.49-3.93-1.405-4.845C18.929 3.24 17.426 2.75 15 2.75H9c-2.426 0-3.93.49-4.845 1.405z"
                                        data-original="#000000" />
                                </g>
                            </svg>
                            <h3 class="mb-2 text-xl font-bold">Performance</h3>
                            <p class="text-sm">Experience blazing-fast performance with our platform.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <section class= "mt-3 body-font md:mt-0">
            <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Categorie</h2>
            <hr class="w-20 h-1 bg-black ms-3 md:mb-1 mb-9 md:ms-12">

            <div class="container px-5 mx-auto md:py-12 py-11">
                <div class="flex flex-wrap -m-4 text-center">
                    @forelse ($cateogires as  $categorie)
                    <div class="w-full p-4 sm:w-1/2 md:w-1/3">
                        <div
                            class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                            <img src="../storage/{{$categorie->image}}" alt="{{$categorie->image}}">
                            <div class="flex px-5">

                                <div class="flex items-center mt-2.5 mb-2.5 ">
                                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <div
                                        class="bg-red-100 text-red-800 text-xs font-semibold  px-2.5  rounded dark:bg-red-200 dark:text-red-800 md:ml-40 ml-16">
                                        5.0</div>
                                </div>
                            </div>
                            <a href="#">
                                <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">{{ $categorie->name }}</h2>
                            </a>
                        </div>
                    </div>
                    @empty
    <div>
        <h1  class="text-xl text-center">Nhoting Categorie</h1>
    </div>
                    @endforelse



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
