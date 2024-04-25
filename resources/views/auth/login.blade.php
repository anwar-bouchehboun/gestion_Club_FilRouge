<x-auth-layout>
    <x-slot name="solt">
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: "success",
                    title: "BienVenu PlatForm",
                    text: "{{ session('success') }}",

                });
            </script>
        @endif
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-6 mx-auto md:flex-row md:h-screen lg:py-0">

                <div
                    class="w-full bg-white shadow dark:border md:mt-0 sm:max-w-md md:p-0 dark:bg-gray-800 dark:border-gray-700">

                    <div class="p-3 space-y-4 md:space-y-6 sm:p-8">

                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            Login
                        </h1>
                        <p class="text-xl text-center text-gray-600">Welcome back! <a href="/"
                                class="font-medium text-[#24B49A] hover:underline ">PHONIXCLUB</a></p>

                        <form class="space-y-4 md:space-y-6" action="{{ route('login.store') }}" method="post">
                            @csrf
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <div class="relative ">
                                    <input type="text" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name@company.com">
                                    <span id="emailIcon"
                                        class="absolute text-gray-400 transform -translate-y-1/2 right-3 top-1/2"></span>

                                </div>

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
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

                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                            name="remember">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember
                                            me</label>
                                    </div>
                                </div>
                                {{-- @if (Route::has('password.request')) --}}
                                <a href="/request"
                                    class="text-sm font-medium text-[#24B49A] hover:underline dark:text-primary-500">Forgot
                                    Your password?</a>
                                {{-- @endif --}}
                            </div>
                            <button type="submit" class="w-full text-white bg-[#24B49A]  py-3 rounded">Sign in</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don’t have an account yet? <a href="{{ route('register') }}"
                                    class="font-medium text-[#24B49A] hover:underline ">Register</a>
                            </p>
                        </form>
                    </div>
                </div>


            </div>
        </section>
    </x-slot>
</x-auth-layout>
<script src="/assets/js/loginValidation.js"></script>
{{-- <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        this.innerHTML = type === 'password' ? '<i class="far fa-eye-slash"></i>' :
        '<i class="far fa-eye"></i>';
    });
</script> --}}
