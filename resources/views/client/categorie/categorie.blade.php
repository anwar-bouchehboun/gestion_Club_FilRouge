<x-platform-layout>
    <x-slot name="slot">

        @auth
            @if (Auth::User()->role == 'client')
                <x-sweet-alert />
            @endif
        @endauth

        <section class="mx-2 mt-10 md:mx-0">


            <div class="md:ps-24 md:my-0">
                <div class="font-sans text-[#333] max-w-6xl max-md:max-w-md mx-auto">
                    <div class="grid items-center md:grid-cols-2 md:gap-12">
                        <div class="relative z-50 max-md:order-1 max-md:text-center">
                            <h2 class="lg:text-6xl md:text-5xl text-2xl font-extrabold mb-4 md:!leading-[56px]"><span
                                    class="text-[#24B49A] uppercase">Club</span> {{ $club->club }} <span
                                    class="text-[#24B49A]">and</span>
                                Categories
                            </h2>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <p class="text-sm font-bold text-gray-900 ms-2 dark:text-white">{{ $rating_percentage }}
                                </p>
                                <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>

                            </div>

                            <p class="mt-6 text-base leading-relaxed">
                                {{ $club->discrption }}

                            </p>


                            @auth
                                @if (Auth::user()->role == 'client')

                                    @if ($clubs > 0)
                                        <div class="container mx-auto">
                                            <input type="hidden" name="club_id" value="{{ $club->id }}" id="club">
                                            <div class="flex items-center" id="ratingStars">
                                                @if ($rating)
                                                    <div hidden>
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $rating->rating)
                                                                <span class="font-extrabold text-gray-500 etoile"
                                                                    data-value="{{ $i }}">&#9733;</span>
                                                            @else
                                                                <span class="font-extrabold text-gray-500 etoile"
                                                                    data-value="{{ $i }}">&#9734;</span>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                @else
                                                    <span class="font-extrabold cursor-pointer etoile"
                                                        data-value="1">&#9734;</span>
                                                    <span class="font-extrabold cursor-pointer etoile"
                                                        data-value="2">&#9734;</span>
                                                    <span class="font-extrabold cursor-pointer etoile"
                                                        data-value="3">&#9734;</span>
                                                    <span class="font-extrabold cursor-pointer etoile"
                                                        data-value="4">&#9734;</span>
                                                    <span class="font-extrabold cursor-pointer etoile"
                                                        data-value="5">&#9734;</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div>
                                            <!-- Content to display when the club's user is the authenticated user -->
                                        </div>
                                    @else
                                        <form id="addMembersForm">
                                            <input type="hidden" name="club_id" value="{{ $club->id }}">
                                            <button type="button" id="addMembersBtn"
                                                class="bg-[#24B49A] border-2 border-[#24B49A] mt-10 transition-all text-black font-bold text-sm rounded-md px-6 py-2.5">
                                                Add Members
                                            </button>
                                        </form>
                                    @endif
                                @else
                                    {{-- <form action="{{ route('membereShips.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="club_id" value="{{ $club->id }}">
                                    <button type="submit"
                                        class="bg-[#24B49A] border-2 border-[#24B49A] mt-10 transition-all text-black font-bold text-sm rounded-md px-6 py-2.5">
                                        Add Members
                                    </button>
                                </form> --}}
                                @endif
                            @endauth






                            {{-- <form action="{{ route('membereShips.store') }}" method="POST">

                                    <input type="hidden" name="club_id" value="{{ $clubs->id }}">
                                    <button type="submit"
                                        class="bg-[#24B49A] border-2 border-[#24B49A] mt-10 transition-all text-black font-bold text-sm rounded-md px-6 py-2.5">
                                        Add Members
                                    </button>
                                </form> --}}




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
                            <img src="../storage/{{ $club->image }} " class="relative z-50 rounded-md lg:w-4/5 "
                                alt="Logo club" />
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
            @if (count($categories) > 0)
                <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Categorie</h2>
                <hr class="w-20 h-1 bg-black ms-3 md:mb-1 mb-9 md:ms-12">

                <div class="container mx-auto px-9 md:py-12 py-11">
                    <div class="flex flex-wrap -m-4 text-center">

                        @forelse ($categories as  $categorie)
                            <div class="w-full p-4 sm:w-1/2 md:w-1/3">
                                <div
                                    class="px-4 py-6 transition duration-500 transform border-2 border-gray-100 rounded-lg shadow shadow-slate-300 hover:scale-110">
                                    <img src="../storage/{{ $categorie->image }}" alt="{{ $categorie->image }}"
                                        class="w-full h-56">
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
                                    <a href="{{ route('souscategorie', $categorie->id) }}">
                                        <h2 class="leading-relaxed uppercase text-[#24B49A] text-2xl font-bold ">
                                            {{ $categorie->name }}</h2>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="mx-auto text-center">
                                <h1 class="text-xl font-semibold text-center">Nhoting Categorie</h1>
                            </div>
                        @endforelse
                    @else
                        <div class="mx-auto text-center">
                            {{-- <h1 class="text-xl font-semibold text-center">Nhoting Categorie</h1> --}}
                        </div>





                    </div>
            @endif
            </div>
        </section>
        {{-- Event --}}
        <div class="  w-full font-[sans-serif] mb-7">
            @if ($events)


                <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Event</h2>
                <hr class="w-20 h-1 bg-black ms-3 md:mb-1 mb-9 md:ms-12">

                <div class="grid md:grid-cols-2 gap-4 items-center md:max-h-[475px] overflow-hidden">

                    <div class="p-6">

                        <h1 class="text-2xl font-bold md:text-4xl text-[#24B49A]">{{ $events->name }}</h1>
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

                        </div>
                        <p class="mt-4 text-sm font-semibold leading-9 text-black"> {{ $events->discrption }}</p>
                        <div class="flex px-5">
                        </div>
                        <div class="flex justify-between px-2 ">
                            <div>

                                <p class="mt-3 text-sm italic text-black ">{{ $events->local }} - <span
                                        class="text-[#24B49A]">{{ $events->date }}</span></p>
                                <p class="mt-3 italic text-black">Price : <span
                                        class="text-[#24B49A]">{{ $events->prix }}</span>$</p>
                            </div>
                            <div>
                                @if (!$existingReservation && $events->date >= \Carbon\Carbon::now()->format('Y-m-d'))
                                    <form action="{{ route('session') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="event" value="{{ $events->id }}">
                                        <button type="submit"
                                            class=" px-9 py-3 mt-10 text-sm font-semibold tracking-wider text-white bg-[#24B49A] border-none rounded outline-none ">Reservé</button>
                                    </form>
                                @endif


                            </div>

                        </div>

                    </div>
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden md:h-96">
                            @if (count($images) > 0)
                                @forelse ($images as $image)
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="../storage/{{ $image->image }}"
                                            class="object-fill w-full h-full " />
                                    </div>
                                @empty
                                    <h2>nohting Image</h2>
                                @endforelse
                            @else
                                <div>

                                </div>
                            @endif



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
                @else
                    <div>


                    </div>
                </div>
            @endif

        </div>

        {{-- commentaire --}}

        {{-- -------------------------------------- --}}
        @if ($events && $commentaires)
            <section class="antialiased dark:bg-gray-900">
                <div class="max-w-5xl px-2 mx-auto">
                    @auth
                        @if ($events->reserves()->where('user_id', Auth::user()->id)->exists())
                            <div class="flex items-center justify-between mb-1">
                                <h2 class="text-lg font-bold text-gray-900 lg:text-2xl dark:text-white">Discussion</h2>
                            </div>
                            <form id="commentForm" class="mb-6">
                                @csrf

                                <button type='button' id="submitComment"
                                    class="inline-flex items-center py-2.5 px-4 my-1 text-xs font-medium text-center text-white bg-[#24B49A] rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                    Post comment
                                </button>

                                <input type="hidden" name="event_id" value="{{ $events->id }}">
                                <input type="hidden" name="club_id" value="{{ $club->id }}">
                                <div
                                    class="px-4 py-2 mb-4 bg-white border border-gray-200 rounded-lg rounded-t-lg dark:bg-gray-800 dark:border-gray-700">
                                    <label for="comment" class="sr-only">Your comment</label>
                                    <textarea id="comment" rows="6" name="contenu"
                                        class="w-full px-0 text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                        placeholder="Write a comment..."></textarea>
                                </div>
                            </form>
                        @endif
                    @endauth


                    <div class="rounded-lg shadow " id="contenu">
                        @foreach ($events->commentaires as $commentaire)
                            <article class="p-6 text-base bg-white dark:bg-gray-900"
                                id="containerid{{ $commentaire->id }}">
                                <footer class="flex items-center justify-between mb-2">
                                    <div class="flex items-center">
                                        <p
                                            class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                            <img class="w-10 h-10 mr-2 rounded-full"
                                                src="../storage/{{ $commentaire->users->image }}"
                                                alt="{{ $commentaire->users->name }}">{{ $commentaire->users->name }}
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            <time pubdate datetime="{{ $commentaire->created_at }}"
                                                title="{{ $commentaire->created_at->format('F jS, Y') }}">
                                                {{ $commentaire->created_at->format('M. j, Y') }}
                                            </time>
                                        </p>
                                    </div>
                                    <div>
                                        @auth
                                            @if (Auth::user()->id === $commentaire->users->id)
                                                <button id="dropdownComment{{ $commentaire->id }}Button"
                                                    data-dropdown-toggle="dropdownComment{{ $commentaire->id }}"
                                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg dark:text-gray-400 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                    type="button">
                                                    <svg class="w-4 h-4" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 16 3">
                                                        <path
                                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                    </svg>
                                                </button>
                                            @endif
                                        @endauth

                                        <!-- Menu déroulant pour modifier et supprimer le commentaire -->
                                        <div id="dropdownComment{{ $commentaire->id }}"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <!-- Bouton pour modifier le commentaire -->
                                                    <button
                                                        onclick="editcommentaire({{ $commentaire->id }},'{{ $commentaire->contenu }}')"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Modifier</button>
                                                </li>
                                                <li>
                                                    <!-- Bouton pour supprimer le commentaire -->
                                                    <button onclick="deletecommentaire({{ $commentaire->id }})"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </footer>
                                <div id="commentaire{{ $commentaire->id }}">
                                    <p class="text-gray-500 dark:text-gray-400">
                                        {{ $commentaire->contenu }}
                                    </p>
                                </div>
                            </article>
                        @endforeach


                    </div>


                </div>
            </section>
        @else
            <div>

            </div>
        @endif
        {{-- section Event  --}}
        <div class="max-w-screen-xl p-5 mx-auto sm:p-10 md:p-16">

            <div class="flex justify-between mb-5 text-sm ">
                <div class="flex items-center pb-2 pr-2 ">

                </div>
                {{-- <a href="#" class="text-3xl font-extralight">See All</a> --}}
            </div>


            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-3">

                <!-- CARD 1 -->
                @foreach ($data_events as $data)
                    <div class="flex flex-col overflow-hidden rounded shadow-lg">

                        <div class="relative">
                            <a href="#">
                                <img class="event-image" src="../storage/{{ $data->image[2]->image }}"
                                    style="width: 100%; max-width: 500px; height: auto;"
                                    alt="Sunset in the mountains">


                                <div
                                    class="absolute top-0 bottom-0 left-0 right-0 transition duration-300 bg-gray-900 opacity-25 hover:bg-transparent">
                                </div>
                            </a>



                        </div>
                        <div class="px-6 py-4 mb-auto">
                            <a href="#"
                                class="inline-block mb-2 text-lg font-medium transition duration-500 ease-in-out hover:text-indigo-600">
                                {{ $data->name }}
                            </a>
                            <p class="text-sm text-gray-500">
                                {{ $data->date }}
                            </p>
                        </div>
                        <div class="flex flex-row items-center justify-between px-6 py-3 bg-gray-100">
                            <span href="#"
                                class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                                <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="ml-1">
                                    {{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                                </span>
                            </span>

                            <span href="#"
                                class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                                <button data-modal-target="popup-modal-{{ $data->id }}"
                                    data-modal-toggle="popup-modal-{{ $data->id }}" class=""
                                    type="button">
                                    <span class="ml-1 text-[#24B49A] font-bold"> {{ $data->comment_count }}</span>

                                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                        </path>
                                    </svg>
                                </button>


                                <div id="popup-modal-{{ $data->id }}" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-md max-h-full p-4">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="popup-modal-{{ $data->id }}">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5">
                                                @foreach ($data->commentaires as $comment)
                                                    <article class="p-6 text-base bg-white dark:bg-gray-900"
                                                        id="containerid{{ $comment->id }}">
                                                        <footer class="flex items-center justify-between mb-2">
                                                            <div class="flex items-center">
                                                                <p
                                                                    class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                                                    <img class="w-10 h-10 mr-2 rounded-full"
                                                                        src="../storage/{{ $comment->users->image }}"
                                                                        alt="{{ $comment->users->name }}">{{ $comment->users->name }}
                                                                </p>
                                                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                                                    <time pubdate
                                                                        datetime="{{ $comment->created_at }}">

                                                                        {{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                                                                    </time>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                {{-- @auth
                                                                    @if (Auth::user()->id === $commentaire->users->id)
                                                                        <button
                                                                            id="dropdownComment{{ $commentaire->id }}Button"
                                                                            data-dropdown-toggle="dropdownComment{{ $commentaire->id }}"
                                                                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg dark:text-gray-400 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                                            type="button">
                                                                            <svg class="w-4 h-4" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="currentColor" viewBox="0 0 16 3">
                                                                                <path
                                                                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                                            </svg>
                                                                        </button>
                                                                    @endif
                                                                @endauth --}}

                                                                <!-- Menu déroulant pour modifier et supprimer le commentaire -->
                                                                {{-- <div id="dropdownComment{{ $commentaire->id }}"
                                                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
                                                                    <ul
                                                                        class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                                        <li>
                                                                            <!-- Bouton pour modifier le commentaire -->
                                                                            <button
                                                                                onclick="editcommentaire({{ $commentaire->id }},'{{ $commentaire->contenu }}')"
                                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Modifier</button>
                                                                        </li>
                                                                        <li>
                                                                            <!-- Bouton pour supprimer le commentaire -->
                                                                            <button
                                                                                onclick="deletecommentaire({{ $commentaire->id }})"
                                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</button>
                                                                        </li>
                                                                    </ul>
                                                                </div> --}}
                                                            </div>
                                                        </footer>
                                                        <div id="commentaire">
                                                            <p class="text-gray-500 dark:text-gray-400">
                                                                {{ $comment->contenu }}
                                                            </p>
                                                        </div>
                                                    </article>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </span>
                        </div>
                    </div>
                @endforeach





            </div>

        </div>




































        {{--  --}}
        {{-- edit commentaire --}}
        <div id="edit-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full p-4">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Commentaire
                        </h3>
                        <button type="button"
                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="edit-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->

                    <form id="edit-form" action="" method="" class="p-4 md:p-5">
                        @csrf
                        @method('PATCH')
                        <div class="grid grid-cols-2 gap-4 mb-4">

                            <div class="col-span-2">
                                <label for="" class="block mb-2 font-medium text-gray-700">Commentaire
                                    :</label>
                                <textarea id="contenu_text" name="contenu"
                                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                                @error('contenu')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-[#24B49A]    font-medium rounded-lg text-sm px-5 py-2.5 text-center   ">
                            Update Commentaire
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- ---------------------------------------------------- --}}

        {{-- deltecommentaire  --}}
        <div id="popup-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full p-4">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 text-center md:p-5">
                        <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                            delete this Commentaire?</h3>

                        <form id="deleteForm" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="deleteButton" type="button" data-modal-hide="popup-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    @push('vite')
        @vite('resources/js/editCommentaire.js')
        @vite('resources/js/deleteCommenteire.js')
    @endpush
</x-platform-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("addMembersBtn").addEventListener("click", function() {
            var form = document.getElementById("addMembersForm");
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "{{ route('membereShips.store') }}", true);
            xhr.setRequestHeader("X-CSRF-Token", "{{ csrf_token() }}");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Members added successfully!',
                            timer: 3000,
                            timerProgressBar: true,
                            showConfirmButton: false,
                            didClose: () => {
                                location.reload();
                            }
                        });

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    }
                }
            };
            xhr.send(formData);
        });
    });
</script>
