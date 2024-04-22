<x-auth-layout>
    <x-slot name="solt">
        <section class="bg-gray-50 dark:bg-gray-900">
            @if (session('status'))
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Rest Password Verfier Email",
                        text: "{{ session('success') }}",

                    });
                </script>
            @endif

            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div
                    class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                    <h1
                        class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Forgot your password?
                    </h1>
                    <p class="font-light text-gray-500 dark:text-gray-400">Don't fret! Just type in your email and we
                        will send you a code to reset your password!</p>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <span class="block text-red-700 sm:inline">{{ $error }}</span>
                        @endforeach
                    @endif
                    <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" method="POST" action="/request"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com">
                        </div>
                        <button type="submit" class="w-full py-3 rounded text-white bg-[#24B49A]">Reset
                            password</button>
                    </form>
                </div>
            </div>
        </section>
    </x-slot>
</x-auth-layout>
