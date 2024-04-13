<x-goust-layout>
    <x-slot name="solt">

        @if (Auth::User()->role == 'client')
            <x-sweet-alert />
        @endif
        <div class="py-3 ">
            <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Show Sous Categorie</h2>
            <hr class="w-20 h-1 bg-black ms-3 md:mb-1 mb-9 md:ms-12">
        </div>

        <div class="  w-full font-[sans-serif] mb-7">

            <div
                class="grid md:grid-cols-2 gap-2 items-center md:max-h-[475px] overflow-hidden md:mx-4  border border-gray-200 rounded-lg shadow">

                <div class="p-4 w-50 md:w-full ">

                    <img src="/../storage/{{ $souscategories->image }}" class="w-full rounded-2xl"
                        alt="{{ $souscategories->name }}">
                    <a href="#">
                    </a>

                </div>
                <div class="p-6">
                    <h1 class="text-2xl font-bold md:text-4xl text-[#24B49A]">{{ $souscategories->name }}</h1>
                    <p class="mt-4 text-sm font-semibold leading-9 text-black">{{ $souscategories->discrption }}</p>

                    <div class="flex justify-between px-2 ">
                        <div>
                            <h4 class="text-2xl font-bold">Cateogrie <strong class="text-[#24B49A] italic">
                                    {{ $souscategories->categorie->name }}</strong></h4>
                            <p class="mt-3 italic text-black">Price : <span
                                    class="text-[#24B49A]">{{ $souscategories->price }}</span>$</p>
                        </div>
                        <div>
                            <form action="{{ route('sessionsous') }}" method="post">
                                @csrf
                                <input type="text" name="sous" value="{{ $souscategories->id }}" hidden>
                                <button type="submit"
                                    class=" px-9 py-3 mt-10 text-sm font-semibold tracking-wider text-white bg-[#24B49A] border-none rounded outline-none ">Reservé</button>
                            </form>

                        </div>

                    </div>

                </div>


            </div>


            <div class="py-2 antialiased bg-[#FFF] dark:bg-gray-900 lg:py-3">
                <div class="max-w-5xl px-4 mx-auto">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-bold text-gray-900 lg:text-2xl dark:text-white">Discussion</h2>
                    </div>
                    <form class="mb-2 " id="commentForm">
                        <div
                            class="px-4 py-2 mb-2 bg-[#FFF] border border-[#24B49A] rounded-lg rounded-t-lg dark:bg-gray-800 dark:border-gray-700">
                            <label for="comment" class="sr-only">Your comment</label>
                            <input type="hidden" name="sous_id" value="{{ $souscategories->id }}">
                            <input type="hidden" name="club_id" value="{{ $souscategories->categorie->club_id }}">
                            <textarea id="comment" rows="6" name="contenu"
                                class="w-full px-0 text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                placeholder="Write a comment..."></textarea>
                        </div>
                        <button type="button" id="submitComment"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-[#24B49A] rounded-lg   ">
                            Post comment
                        </button>
                    </form>
                    <div class="rounded-lg shadow bg-[#24B49A]" id="contenu">
                        @foreach ($souscategories->comntaire as $commentaire)
                            <article class="p-6 text-base dark:bg-gray-900">
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
                                        @if (Auth::user()->id === $commentaire->users->id)
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
                                </footer>
                                <div id="commentaire">
                                    <p class="text-white dark:text-gray-400">
                                        {{ $commentaire->contenu }}
                                    </p>
                                </div>

                            </article>
                        @endforeach

                    </div>


                </div>
            </div>



        </div>



    </x-slot>
    </x-show-layout>
