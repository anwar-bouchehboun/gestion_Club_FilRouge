<x-goust-layout>
    <x-slot name="solt">

        <x-sweet-alert />



        <div class="py-3 ">
            <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Show Sous Categorie</h2>
            <hr class="w-20 h-1 bg-black ms-3 md:mb-1 mb-9 md:ms-12">
        </div>

        <div class="  w-full font-[sans-serif] mb-7">

            <div
                class="grid md:grid-cols-2  items-center md:max-h-[475px] overflow-hidden md:mx-4  border border-gray-200 rounded-lg shadow">

                <div class="p-2 w-50 md:w-96 ">

                    <img src="/../storage/{{ $souscategories->image }}" class="w-full rounded-2xl md:w-96"
                        alt="{{ $souscategories->name }}">
                    <a href="#">
                    </a>

                </div>
                <div class="p-6">
                    <h1 class="text-2xl font-bold md:text-4xl text-[#24B49A]">{{ $souscategories->name }}</h1>
                    <p class="mt-4 text-sm font-semibold leading-9 text-black">{{ $souscategories->discrption }}</p>

                    <div class="flex flex-col justify-between px-2 md:flex-row">
                        <div>
                            <h4 class="text-2xl font-bold">Cateogrie <strong class="text-[#24B49A] italic">
                                    {{ $souscategories->categorie->name }}</strong></h4>
                            <p class="mt-3 italic text-black">Price : <span
                                    class="text-[#24B49A]">{{ $souscategories->price }}</span>$</p>
                        </div>
                        <div>
                            @if ($existingReservation>0)
                                  <div>

                                  </div>
                            @else
                            <form action="{{ route('sessionsous') }}" method="post">
                                @csrf
                                <input type="text" name="sous" value="{{ $souscategories->id }}" hidden>
                                <button type="submit"
                                    class=" px-9 py-3 mt-10 text-sm font-semibold tracking-wider text-white bg-[#24B49A] border-none rounded outline-none ">ADD Sous catégorie</button>
                            </form>

                            @endif


                        </div>

                    </div>

                </div>


            </div>


            <div class="py-2 antialiased bg-[#FFF] dark:bg-gray-900 lg:py-3">
                <div class="max-w-5xl px-4 mx-auto">


                    {{-- @if ($member > 0) --}}
                    @auth
                        @if (Auth::User()->role == 'client')
                            @if ($souscategories->reserves()->where('user_id', Auth::user()->id)->exists())
                                <form class="mb-2 " id="commentForm">
                                    <div
                                        class="px-4 py-2 mb-2 bg-[#FFF] border border-[#24B49A] rounded-lg rounded-t-lg dark:bg-gray-800 dark:border-gray-700">
                                        <label for="comment" class="sr-only">Your comment</label>
                                        <input type="hidden" name="sous_id" value="{{ $souscategories->id }}">
                                        <input type="hidden" name="club_id"
                                            value="{{ $souscategories->categorie->club_id }}">
                                        <textarea id="comment" rows="6" name="contenu"
                                            class="w-full px-0 text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                            placeholder="Write a comment..."></textarea>
                                    </div>
                                    <button type="button" id="submitComment"
                                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-[#24B49A] rounded-lg   ">
                                        Post comment
                                    </button>
                                </form>
                            @endif
                        @endif
                    @endauth


                    {{-- @else --}}

                    <div class="rounded-lg shadow bg-[#24B49A]" id="contenu">
                        @foreach ($souscategories->commentaires as $commentaire)
                            <article class="p-6 text-base dark:bg-gray-900" id="containerid{{ $commentaire->id }}">
                                <footer class="flex items-center justify-between mb-2">
                                    <div class="flex items-center">
                                        <p
                                            class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                            <img class="w-10 h-10 mr-2 rounded-full"
                                                src="/../storage/{{ $commentaire->users->image }}"
                                                alt="{{ $commentaire->users->name }}">{{ $commentaire->users->name }}
                                        </p>
                                        <p class="text-sm text-white dark:text-gray-400">
                                            <time pubdate datetime="{{ $commentaire->created_at }}"
                                                title="{{ $commentaire->created_at->format('F jS, Y') }}">
                                                {{ $commentaire->created_at->format('M. j, Y') }}
                                            </time>
                                        </p>
                                    </div>
                                    @auth
                                        @if (Auth::check() && Auth::user()->id === $commentaire->users->id)
                                            <button id="dropdownComment{{ $commentaire->id }}Button"
                                                data-dropdown-toggle="dropdownComment{{ $commentaire->id }}"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg dark:text-gray-400 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 16 3">
                                                    <path
                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                </svg>
                                            </button>
                                        @endif
                                    @endauth
                                    <!-- Dropdown menu -->
                                    <!-- Menu déroulant pour modifier et supprimer le commentaire -->
                                    <div id="dropdownComment{{ $commentaire->id }}"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                            <li>
                                                <!-- Bouton pour modifier le commentaire -->
                                                <button
                                                    onclick="editCommentaireSous({{ $commentaire->id }},'{{ $commentaire->contenu }}')"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Modifier</button>
                                            </li>
                                            <li>
                                                <!-- Bouton pour supprimer le commentaire -->
                                                <button onclick="deletecommentaireSous({{ $commentaire->id }})"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Supprimer</button>
                                            </li>
                                        </ul>
                                    </div>
                                </footer>
                                <div id="commentaire{{ $commentaire->id }}">
                                    <p class="text-white dark:text-gray-400">
                                        {{ $commentaire->contenu }}
                                    </p>
                                </div>

                            </article>
                        @endforeach

                    </div>
                    {{-- @endif --}}

                </div>
            </div>





        </div>



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
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
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
        {{-- Delete commentaire --}}
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

                        <form id="deleteForm" action="" method="POST">
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
        @vite('resources/js/editCommentaireSous.js')
        @vite('resources/js/deleteCommenteireSous.js')
    @endpush
    </x-show-layout>
