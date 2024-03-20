<x-goust-layout>
    <x-slot name="solt">
        @include('vendor.sweetalert.alert')
        <section class="pt-24 pb-32 bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            Register
                        </h1>
                        <form class="space-y-2 md:space-y-2" action="{{ route('register.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <x-input-label for="name" :value="__('Name')" />

                                {{-- <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Name</label> --}}
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>
                            <div>
                                <x-input-label for="email" :value="__('Email')" />

                                {{-- <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Your email</label> --}}
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                            <div>
                                <x-input-label for="password" :value="__('Password')" />

                                {{-- <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Password</label> --}}
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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

                                {{-- <label for="image" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Image</label> --}}
                                <input type="file" name="image"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5   ">
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            </div>
                            <button type="submit" class="w-full text-white bg-[#24B49A] py-2 rounded">Register</button>
                            <p class="text-sm font-light text-black">
                                Don’t have an account yet? <a href="#"
                                    class="font-medium text-[#24B49A] hover:underline">Login</a>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </x-slot>
</x-goust-layout>
