<x-app-layout>
    <x-slot name="solt">
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
                                  Add  Categorie</p>
                            </a>

                        </li>

                    </ol>
                </nav>
                <div class="px-0 mb-0 border-0 rounded-t ">
                    <button id="ouvrirPopup" class=" px-4 py-2 mx-2 mt-4 text-white bg-[#24B49A] rounded-md uppercase ">Add new
                        Categorie</button>


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
                                    Categorie
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Club
                                </th>
                                <th class="px-6 py-3 text-sm font-semibold text-left text-black">
                                    Action
                                </th>

                            </tr>
                        </thead>

                        <tbody>

                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Black
                                </td>


                                <td class="flex px-6 py-4">

                                    <a href="" class="mr-4 text-blue-500 hover:text-blue-700" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                            <path
                                                d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                data-original="#000000" />
                                            <path
                                                d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                data-original="#000000" />
                                        </svg>
                                    </a>
                                    <form id="deleteForm" action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette Catégorie ?')"
                                            class="text-red-500 hover:text-red-700">
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
                                    </form>


                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div id="popup" class="fixed inset-0 flex items-center justify-center hidden "
            style="">
            <div class="p-8 mx-3 bg-white rounded shadow-md ">

                <form action="{{ route('categorie.store') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="categorie" class="block mb-2 font-medium text-gray-700">Categorie
                            :</label>
                        <input type="text" id="categorie" name="name"
                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                            placeholder="Entrez votre CaTegorie ">
                        @error('name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block mb-2 font-medium text-gray-700">Image
                            :</label>
                        <input type="file" id="image" name="name"
                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        @error('image')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block mb-2 font-medium text-gray-700">Club
                            :</label>
                        <select name="club_id"
                            id="club"class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            <option value="">club1</option>
                            <option value="">club1</option>
                            <option value="">club1</option>
                        </select>
                        @error('club_id')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="px-20 py-2 text-white bg-[#24B49A] rounded-md float-end ">Save
                    </button>
                </form>
                <button id="fermerPopup"
                    class="px-16 py-2 mt-4 text-white bg-red-500 rounded-md float-end hover:bg-red-600 focus:outline-none focus:bg-red-600">Fermer</button>
            </div>
        </div>
    </x-slot>
</x-app-layout>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const boutonOuvrirPopup = document.getElementById('ouvrirPopup');
        const boutonFermerPopup = document.getElementById('fermerPopup');
        const popup = document.getElementById('popup');

        boutonOuvrirPopup.addEventListener('click', function() {
            popup.classList.remove('hidden');
        });

        boutonFermerPopup.addEventListener('click', function() {
            popup.classList.add('hidden');
        });
    });
</script>
