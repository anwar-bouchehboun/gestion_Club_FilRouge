<x-goust-layout>
    <x-slot name="solt">
        <x-sweet-alert />
        <div class="relative w-full overflow-hidden rounded shadow-2xl">
            {{-- <a href=""
                class="fixed z-50 flex items-center justify-center w-12 h-12 duration-150 rounded-full bg-white/50 hover:bg-white top-10 left-10 animate-pulse"><i
                    class='text-5xl bx bx-left-arrow-alt'></i></a> --}}

            <div class="relative w-full h-64 overflow-hidden bg-blue-600 top">
                <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                    alt="" class="absolute z-0 object-cover object-center w-full h-full ">
                <div class="relative flex flex-col items-center justify-center h-full text-white bg-black bg-opacity-50">
                    <i class='bx bxs-user-circle text-9xl'></i>
                    <img class="w-20 h-20 rounded-full" src="../storage/{{ $profile->image }}" alt="">
                    <h1 class="text-2xl font-semibold">{{ $profile->name }}</h1>
                </div>
            </div>
            <div class="grid grid-cols-12 text-black bg-white">

                <div
                    class="flex flex-col justify-center w-full col-span-12 px-3 py-5 space-x-4 md:space-x-0 md:space-y-4 md:col-span-3 md:justify-start ">
                    {{-- CLUB CHAQUE USERS --}}
                    <div>
                        <h3 class="text-lg font-semibold text-center uppercase md:text-2xl">Liked Clubs</h3>
                        <div class="h-[1px] bg-[#24B49A] "></div>
                        <div class="grid grid-cols-2 p-2 pt-5 gap-x-2 gap-y-3">
                            @foreach ($club_User as $user)
                                <div>
                                    <button data-modal-target="popup-modal-{{ $user->id }}"
                                        data-modal-toggle="popup-modal-{{ $user->id }}" class=""
                                        type="button">
                                        <img src="../storage/{{ $user->club->image }}" alt="{{ $user->club->image }}">

                                    </button>


                                    <div id="popup-modal-{{ $user->id }}" tabindex="-1"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-md max-h-full p-4">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="popup-modal-{{ $user->id }}">
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
                                                    <img src="../storage/{{ $user->club->image }}"
                                                        alt="{{ $user->club->image }}" class="mx-auto w-60">

                                                    <h2 class="mb-3 text-lg font-semibold text-[#24B49A]  ">
                                                        {{ $user->club->club }}

                                                    </h2>
                                                    <p class="font-bold ">
                                                        {{ $user->club->discrption }}
                                                    </p>
                                                    <span class=" my-5 text-lg  font-medium text-[#24B49A] ">
                                                        <strong class="font-light "> Club Created At:</strong>
                                                        {{ $user->club->created_at->format('Y-m-d') }}
                                                    </span>
                                                    <form id="deleteForm{{ $user->id }}">
                                                        @csrf
                                                        <button id="deleteButton{{ $user->id }}"
                                                            onclick="deleteUser({{ $user->id }})" type="button"
                                                            class="p-2 text-white bg-red-700 rounded float-end">Delete
                                                            Club</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach





                        </div>
                    </div>
                    {{-- SouCaegorie Users --}}
                    <div>
                        <h3 class="text-lg font-semibold text-center uppercase md:text-2xl">Liked SousCategorie</h3>
                        <div class="h-[1px] bg-[#24B49A] "></div>
                        <div class="grid grid-cols-2 p-2 pt-5 gap-x-2 gap-y-3">
                            @foreach ($SousUser as $user_client)
                                <div>
                                    <button data-modal-target="popup-modal-{{ $user_client->id }}"
                                        data-modal-toggle="popup-modal-{{ $user_client->id }}" class=""
                                        type="button">
                                        <img src="../storage/{{ $user_client->reservable->image }}" alt="{{ $user_client->reservable->image }}">

                                    </button>


                                    <div id="popup-modal-{{ $user_client->id }}" tabindex="-1"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-md max-h-full p-4">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="popup-modal-{{ $user_client->id }}">
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
                                                    <img src="../storage/{{ $user_client->reservable->image }}"
                                                        alt="{{ $user_client->reservable->image }}" class="mx-auto w-60">

                                                    <h2 class="mb-3 text-lg font-semibold text-[#24B49A]  ">
                                                        {{ $user_client->reservable->name }}

                                                    </h2>
                                                    <p class="font-bold ">
                                                        {{ $user_client->reservable->discrption }}
                                                    </p>
                                                    <span class=" my-5 text-lg  font-medium text-[#24B49A] ">
                                                        <strong class="font-light "> Club Created At:</strong>
                                                        {{ $user_client->reservable->created_at->format('Y-m-d') }}
                                                    </span>
                                                    {{-- <form id="deleteForm{{ $user->id }}">
                                                        @csrf
                                                        <button id="deleteButton{{ $user->id }}"
                                                            onclick="deleteUser({{ $user->id }})" type="button"
                                                            class="p-2 text-white bg-red-700 rounded float-end">Delete
                                                            Souscategorie</button>
                                                    </form> --}}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach





                        </div>
                    </div>

                </div>

                <div
                    class="col-span-12 md:border-solid md:border-l md:border-[#24B49A]  md:border-opacity-2   h-full md:col-span-9 ">
                    <div class="px-4 pt-4">




                        <h3 class="pb-1 text-lg font-semibold text-center uppercase md:text-2xl">Personal Information
                        </h3>
                        <div class="h-[1px] bg-[#24B49A] "></div>
                        <form id="updateForm" action="" class="mb-2 ">
                            @csrf
                            <div class="grid md:grid-cols-2 w-[80%] mx-auto md:gap-x-5 mb-3 mt-6">
                                <div class="relative w-full form-item">
                                    <label class="text-base font-semibold md:text-xl">Full Name</label>
                                    <div class="relative my-3">
                                        <input id="nameInput" type="text"
                                            value="{{ old('name', $profile->name) }}" name="name"
                                            class="w-full px-2 py-2 pr-8 text-black bg-white rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:border-blue-200">
                                    </div>

                                </div>

                                <div class="relative w-full form-item">
                                    <label class="text-base font-semibold md:text-xl">Email</label>
                                    <div class="relative my-3">
                                        <input id="emailInput" type="text"
                                            value="{{ old('email', $profile->email) }}" name="email"
                                            class="w-full px-2 py-2 pr-8 text-black bg-white rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:border-blue-200">
                                    </div>
                                </div>
                            </div>
                            <div class="w-[90%] flex justify-end">
                                <button id="updateButton" type="button"
                                    class="inline-flex items-center justify-center lg:px-7 lg:py-3 md:px-3 px-10 py-3 text-sm font-semibold text-white transition-all duration-200 bg-[#24B49A] font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">Update</button>
                            </div>
                        </form>

                        <h3 class="pb-1 text-lg font-semibold text-center uppercase md:text-2xl">Update Password</h3>
                        <div class="h-[1px] bg-[#24B49A] "></div>

                        <form action="{{ route('update.password') }}" method="POST">
                            @csrf
                            <div class=" w-[80%] mx-auto grid md:grid-cols-2 text-black    md:gap-x-5    mb-5 mt-6">
                                <div class="w-full col-span-2 pb-3 form-item">
                                    <label class="font-semibold text-black md:text-xl text-md ">Email</label>
                                    <input type="text" value="{{ $profile->email }}" name="email"
                                        class="w-full px-2 py-2 mr-2 text-opacity-50 rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:border-blue-200 ">
                                </div>
                                <div class="w-full col-span-2 pb-3 md:col-span-1 form-item">
                                    <label class="font-semibold text-black md:text-xl text-md">New Password</label>
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        class="w-full px-2 py-2 mr-2 text-opacity-50 rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:border-blue-200 ">
                                </div>



                                <div class="w-full col-span-1 form-item">
                                    <label class="font-semibold text-black md:text-xl text-md ">Confirme
                                        Password</label>
                                    <input type="password" name="password_confirmation"
                                        class="w-full px-2 py-2 mr-2 text-opacity-50 rounded shadow appearance-none focus:outline-none focus:shadow-outline focus:border-blue-200 ">

                                </div>


                            </div>
                            <div class="flex w-full mb-1 justify-evenly">
                                <button
                                    class=" inline-flex items-center justify-center px-28   py-3 text-sm font-semibold text-white transition-all duration-200 bg-[#24B49A]  font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">Reset</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </x-slot>
</x-goust-layout>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var updateButton = document.getElementById("updateButton");

        updateButton.addEventListener("click", function() {
            var nameInput = document.getElementById("nameInput").value;
            var emailInput = document.getElementById("emailInput").value;

            if (nameInput.trim() === '' || emailInput.trim() === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Please fill in all the fields',
                });
                return; // Stop  execution
            }

            var formData = new FormData(document.getElementById("updateForm"));
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "/profile/update", true);
            xhr.setRequestHeader("X-CSRF-Token", "{{ csrf_token() }}");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Profile updated successfully',
                            timer: 4000,
                            timerProgressBar: true,
                            showConfirmButton: false,
                            didClose: () => {
                                window.location.reload();
                            }
                        });
                        console.log("Update successful");
                    } else {
                        var response = JSON.parse(xhr.responseText);
                        var errorMessage = response.error;
                        if (response.validation_errors) {
                            errorMessage += '<br><ul>';
                            Object.values(response.validation_errors).forEach(function(errors) {
                                errors.forEach(function(error) {
                                    errorMessage += '<li>' + error + '</li>';
                                });
                            });
                            errorMessage += '</ul>';
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            html: errorMessage
                        });
                        console.error("Update failed");
                    }
                }
            };
            xhr.send(formData);
        });
    });
</script>

<script src="/assets/js/deleteClubuser.js"></script>
