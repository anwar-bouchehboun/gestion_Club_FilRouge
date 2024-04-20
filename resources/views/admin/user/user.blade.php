<x-app-layout>
    <x-slot name="solt">
        <div class="p-4 xl:ml-80">
            <nav
                class="block w-full max-w-full px-0 py-1 text-white transition-all bg-transparent shadow-none rounded-xl">
                <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">

                    <div class="flex items-center">
                        <div class="mr-auto md:mr-4 md:w-56">

                        </div>
                        <button
                            class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                            type="button" id="toggle">
                            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" stroke-width="3" class="w-6 h-6 text-blue-gray-500">
                                    <path fill-rule="evenodd"
                                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </button>



                    </div>
                </div>
            </nav>
            <div class="flex flex-wrap justify-between my-6 capitalize ">
                <nav aria-label="breadcrumb" class="w-max">
                    <ol
                        class="flex flex-wrap items-center w-full p-0 transition-all bg-transparent rounded-md bg-opacity-60">
                        <li
                            class="flex items-center font-sans text-sm antialiased font-normal leading-normal transition-colors duration-300 cursor-pointer text-blue-gray-900 hover:text-light-blue-500">
                            <a href="#">
                                <p
                                    class="block font-sans text-3xl antialiased font-bold leading-normal text-[#24B49A] uppercase transition-all ">
                                    liste User</p>
                            </a>

                        </li>

                    </ol>
                </nav>
                <div class="px-0 mb-0 border-0 rounded-t ">

                    {{-- <form class="max-w-md mx-auto"> --}}
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="searchInput"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search.." required />

                        </div>
                    {{-- </form> --}}


                </div>

            </div>


            <div>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">

                        <thead class="bg-gray-100 whitespace-nowrap">
                            <tr>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    #
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Name
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Email
                                </th>

                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    SousCategorie
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Picture
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Action
                                </th>


                            </tr>
                        </thead>

                        <tbody id="content_tr">
                            {{-- @foreach ($users as $user)
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->id }}</th>
                                    <td class="px-6 py-4">{{ $user->users->name }}</td>
                                    <td class="px-6 py-4">
                                        {{ $user->users->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->reservable->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <img src="../storage/{{ $user->reservable->image }}"
                                            alt="{{ $user->reservable->image }}"
                                            class="w-16 h-16 mb-3 rounded-full shadow-lg ">
                                    </td>
                                    <td class="flex px-6 py-4">

                                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                            class="mr-4 text-blue-500 hover:text-blue-700" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                    data-original="#000000" />
                                                <path
                                                    d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                    data-original="#000000" />
                                            </svg>
                                        </button>



                                    </td>
                                </tr>
                            @endforeach --}}



                        </tbody>
                    </table>
                </div>

            </div>
        </div>




        {{-- Delete --}}

        <div id="popup-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full p-4">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 text-center md:p-5">
                        <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                            delete this User?</h3>

                        <form id="deleteForm" action="" method="">
                           @csrf
                           @method('DELETE')
                            <button type="button" data-modal-hide="popup-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Yes, I'm sure
                            </button>


                        </form>

                    </div>
                </div>
            </div>
        </div>

        @push('vite')
        @vite('resources/js/deleteUser.js')
        @endpush
    </x-slot>
</x-app-layout>

{{-- <script src="/assets/js/UserdataSous.js"></script> --}}
