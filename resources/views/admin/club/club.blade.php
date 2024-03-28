<x-app-layout>
    <x-slot name="solt">
        {{-- messg --}}
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Noveau Club",
                    text: "{{ session('success') }}",

                });
            </script>
        @endif

        {{-- data club --}}
        <div class="p-4 xl:ml-80">
            <div class="flex flex-wrap justify-between my-6 capitalize ">
                <nav aria-label="breadcrumb" class="w-max">
                    <ol
                        class="flex flex-wrap items-center w-full p-0 transition-all bg-transparent rounded-md bg-opacity-60">
                        <li
                            class="flex items-center font-sans text-sm antialiased font-normal leading-normal transition-colors duration-300 cursor-pointer text-blue-gray-900 hover:text-light-blue-500">
                            <a href="#">
                                <p
                                    class="block font-sans text-4xl antialiased font-bold leading-normal text-black uppercase transition-all ">
                                    Add Club</p>
                            </a>

                        </li>

                    </ol>
                </nav>
                <div class="px-0 mb-0 border-0 rounded-t ">
                    <button  data-modal-target="insert-modal" data-modal-toggle="insert-modal"
                        class=" px-4 py-2 mx-2 mt-4 text-white bg-[#24B49A] rounded-md uppercase ">+
                        Add new
                        Club</button>


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
                                    Club
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Descrption
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Action
                                </th>

                            </tr>
                        </thead>

                        <tbody>
                            {{-- clubs --}}
                            @forelse ($clubs as $club)
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {!! $club->id !!}
                                    </th>
                                    <td class="px-6 py-4">
                                        {!! $club->club !!}
                                    </td>
                                    <td class="px-6 py-4">
                                        {!! $club->discrption !!}
                                    </td>


                                    <td class="flex px-6 py-4">

                                        <button
                                            onclick="openEditModal({{ $club->id }},'{{ $club->club }}','{{ $club->image }}','{{ $club->discrption }}')"
                                            class="mr-4 text-blue-500 hover:text-blue-700" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 fill-blue-500 hover:fill-blue-700"
                                                viewBox="0 0 348.882 348.882">
                                                <path
                                                    d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                    data-original="#000000" />
                                                <path
                                                    d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                    data-original="#000000" />
                                            </svg>
                                        </button>
                                        <button   onclick="openDeleteModal({{ $club->id }})"
                                            class="mr-4 text-blue-500 hover:text-blue-700" title="Delete">
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
                            @empty
                                <h2>Nhoting Club </h2>
                            @endforelse

                        </tbody>

                    </table>
                    {{ $clubs->links() }}
                </div>

            </div>
        </div>
        {{-- Modal insert --}}
        <div id="insert-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit Club
                    </h3>
                    <button type="button"
                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="insert-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->

                <form  action="{{ route('club.store') }}" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="col-span-2">
                            <label for="club" class="block mb-2 font-medium text-gray-700">Club
                                :</label>
                            <input type="text" id="club" name="club"
                                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            @error('club')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                            {{-- <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label> --}}
                            {{-- <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required=""> --}}
                        </div>
                        <div class="col-span-2 ">
                            <label for="image" class="block mb-2 font-medium text-gray-700">Image
                                :</label>
                            <input type="file" id="" name="image"
                                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                                placeholder="Entrez votre Club ">
                            @error('image')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-2 ">
                            <label for="discrption" class="block mb-2 font-medium text-gray-700">Discrption
                                :</label>
                            <textarea type="file" id="" name="discrption"
                                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                            @error('discrption')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-[#24B49A]    font-medium rounded-lg text-sm px-5 py-2.5 text-center   ">
                        Add Club
                    </button>
                </form>
            </div>
        </div>
    </div>
        {{-- modal edit --}}

        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full p-4">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Club
                        </h3>
                        <button type="button"
                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->

                    <form id="edit-form" action="" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="col-span-2">
                                <label for="club" class="block mb-2 font-medium text-gray-700">Club
                                    :</label>
                                <input type="text" id="club_name" name="club"
                                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                @error('club')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                                {{-- <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label> --}}
                                {{-- <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required=""> --}}
                            </div>
                            <div class="hidden col-span-2">
                                <label for="image" class="block mb-2 font-medium text-gray-700">Image
                                    :</label>
                                <input type="text" id="image_name" name="image"
                                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                                    placeholder="Entrez votre Club ">

                            </div>

                            <div class="col-span-2 ">
                                <label for="image" class="block mb-2 font-medium text-gray-700">Image
                                    :</label>
                                <input type="file" id="" name="image"
                                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                                    placeholder="Entrez votre Club ">
                                @error('image')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-2 ">
                                <label for="discrption" class="block mb-2 font-medium text-gray-700">Discrption
                                    :</label>
                                <textarea type="file" id="discrption_name" name="discrption"
                                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                                @error('discrption')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-[#24B49A]    font-medium rounded-lg text-sm px-5 py-2.5 text-center   ">
                            Update Club
                        </button>
                    </form>
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
                            delete this Club?</h3>

                        <form id="deleteForm" action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" data-modal-hide="popup-modal" type="button"
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
        @vite('resources/js/editClub.js')
        @vite('resources/js/deleteClub.js')
    @endpush

</x-app-layout>
