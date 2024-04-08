<x-app-layout>
    <x-slot name="solt">
        <x-sweet-alert />
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
                                    Event</p>
                            </a>

                        </li>

                    </ol>
                </nav>
                <div class="px-0 mb-0 border-0 rounded-t ">
                    <button data-modal-target="add-modal" data-modal-toggle="add-modal"
                        class=" px-4 py-2 mx-2 mt-4 text-white bg-[#24B49A] rounded-md uppercase ">+
                        Add new
                        Event</button>


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
                                    Event
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Club
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Date
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Localisation
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Price
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Action
                                </th>

                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($events as $event)
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $event->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $event->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $event->club->club }} </td>
                                    <td class="px-6 py-4">
                                        {{ $event->date }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $event->local }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $event->prix }} $
                                    </td>


                                    <td class="flex px-6 py-4">

                                        <button
                                            onclick="editEventModal({{ $event->id }},'{{ $event->name }}',{{ $event->prix }},'{{ $event->discrption }}','{{ $event->local }}','{{ $event->date }}',{{ $event->club_id }})"
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
                                        <button onclick="openDeleteModal({{ $event->id }})"
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
                            @empty
                                <tr>
                                    <td colspan="7"></td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    {{ $events->links() }}
                </div>

            </div>
        </div>
        {{-- Modal insert --}}



        <!-- Main modal -->
        <div id="add-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full p-4 ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Create New Event
                        </h3>
                        <button type="button"
                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="add-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5 " action="{{ route('event.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="col-span-4 sm:col-span-1">
                                <label for="name" class="block mb-2 font-medium text-gray-700">Name
                                    :</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                                    placeholder="Entrez votre club ">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-1">
                                <label for="local" class="block mb-2 font-medium text-gray-700">Localisation
                                    :</label>
                                <input type="text" name="local" value="{{ old('local') }}"
                                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                                    placeholder="Entrez votre local ">
                                @error('local')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-4 sm:col-span-1">
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="prix" value="{{ old('prix') }}"
                                    class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="$2999">
                                @error('prix')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-1">
                                <label for="club"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Club</label>
                                <select name="club_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 ">
                                    <option selected disabled>Select Club</option>
                                    @foreach ($clubs as $club)
                                        <option value="{!! $club->id !!}"
                                            {{ old('club_id') == $club->id ? 'selected' : '' }}>{{ $club->club }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('club_id')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-1">
                                <label for="image"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                <div id="image-container">
                                    <input type="file" name="image[]"
                                        class="block text-sm border border-gray-300 rounded-lg ">

                                </div>
                                <button type="button"
                                    class= "px-2 py-2 font-semibold text-white uppercase bg-[#24B49A] border rounded-md "
                                    onclick="addImage()">Add file Image</button>
                                @error('image')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-1">
                                <label for="date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                                    Event</label>
                                <input type="date" name="date" value="{{ old('date') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                @error('date')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-span-2">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event
                                    Description</label>
                                <textarea rows="4" name="discrption"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write Event description here">{{ old('discrption') }}</textarea>
                                @error('discrption')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-[#24B49A] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5 me-1 -ms-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Add new Event
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- ---------------------------- --}}

        {{-- modal edit --}}
        <div id="edit-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full p-4">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Club
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

                    <form id="edit-form" class="p-4 md:p-5" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="grid grid-cols-2 gap-4 mb-4 ">
                            <div class="col-span-4 sm:col-span-1">
                                <label for="name" class="block mb-2 font-medium text-gray-700">Name
                                    :</label>
                                <input type="text" name="name" id="event"
                                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-1">
                                <label for="local" class="block mb-2 font-medium text-gray-700">Localisation
                                    :</label>
                                <input type="text" name="local" id="loclisation"
                                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                @error('local')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-span-4 sm:col-span-1">
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="prix" id="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="$2999">
                                @error('prix')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-1">
                                <label for="club"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Club</label>
                                <select name="club_id" id="club_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option selected disabled>Select Club</option>
                                    @foreach ($clubs as $club)
                                        <option value="{!! $club->id !!}">{{ $club->club }}</option>
                                    @endforeach

                                </select>
                                @error('club_id')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="hidden col-span-2 sm:col-span-1">
                                <label for="image"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                <div id="image-containers">
                                    <input type="file" name="image[]"
                                        class="block text-sm border border-gray-300 rounded-lg ">

                                </div>
                                <button type="button"
                                    class= "px-2 py-2 font-semibold text-white uppercase bg-[#24B49A] border rounded-md "
                                    onclick="addImages()">Add file Image</button>
                                @error('image')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-1">
                                <label for="date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">date</label>
                                <input type="date" name="date" id="date_now"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                @error('date')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-span-2">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event
                                    Description</label>
                                <textarea rows="4" name="discrption" id="discrption_name"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write Event description here"></textarea>
                                @error('discrption')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-[#24B49A]  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5 me-1 -ms-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Update Event
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
                            delete this Categorie?</h3>

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
        @vite('resources/js/editEvent.js')
        @vite('resources/js/deleteEvent.js')
    @endpush
</x-app-layout>
