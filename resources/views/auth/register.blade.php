<x-auth-layout>
    <x-slot name="solt">
        {{-- @include('vendor.sweetalert.alert') --}}



        <section class="mt-16 mb-20 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">

                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            Register
                        </h1>

                        <form class="space-y-2 md:space-y-2" action="{{ route('register.store') }}" method="post"
                            onsubmit="return validateForm()" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <div class="relative ">
                                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Name">
                                    <span id="nameIcon"
                                        class="absolute text-gray-400 transform -translate-y-1/2 right-3 top-1/2"></span>

                                </div>

                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>
                            <div>
                                <x-input-label for="email" :value="__('Email')" />

                                <div class="relative ">
                                    <input type="text" name="email" id="email" value="{{ old('email') }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name@company.com">
                                    <span id="emailIcon"
                                        class="absolute text-gray-400 transform -translate-y-1/2 right-3 top-1/2"></span>

                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                            <div>
                                <x-input-label for="password" :value="__('Password')" />
                                <div class="relative ">
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <span id=""
                                        class="absolute text-gray-400 transform -translate-y-1/2 right-3 top-1/2">
                                        <button type="button" id="togglePassword"
                                            class="text-gray-500 dark:text-gray-300 focus:outline-none">
                                            <i class="far fa-eye-slash"></i>
                                        </button>
                                    </span>


                                </div>

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            </div>
                            <div>
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                {{-- <label for="password_confirmation" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label> --}}
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            </div>
                            <div>
                                <x-input-label for="image" :value="__('Image')" />

                                <div class="relative ">
                                    <input type="file" name="image" id="image" onchange="validateImage()"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5   ">
                                    <span id="imageIcon"
                                        class="absolute text-gray-400 transform -translate-y-1/2 right-3 top-1/2"></span>

                                </div>

                                <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            </div>
                            <button type="submit" class="w-full text-white bg-[#24B49A] py-2 rounded">Register</button>
                            <p class="text-sm font-light text-black">
                                Don’t have an account yet? <a href="{{ route('login.index') }}"
                                    class="font-medium text-[#24B49A] hover:underline">Login ,</a>

                                <a href="/" class="font-medium text-[#24B49A] hover:underline ">PHONIXCLUB</a>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </x-slot>
</x-auth-layout>
<script src="/assets/js/RegisterVlidation.js"></script>
<script src="/assets/js/validationForm.js"></script>
<script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordField = document.getElementById("password");

    togglePassword.addEventListener("click", function() {
        console.log(passwordField);
        const type =
            passwordField.type === "password" ? "text" : "password";
        passwordField.type = type;
        this.innerHTML =
            type === "password" ?
            '<i class="far fa-eye-slash"></i>' :
            '<i class="far fa-eye"></i>';
    });
</script>
