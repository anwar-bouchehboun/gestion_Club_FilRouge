<nav class="bg-[#000] border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-bold text-white whitespace-nowrap">PHONIXCLUB</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-white rounded-lg md:hidden focus:outline-none focus:ring-2 "
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 font-medium md:p-0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
                <li>
                    <a href="{{ route('home') }}"
                        class="text-center block uppercase py-2 px-3 text-[#24B49A]  rounded md:bg-transparent md:text-[#24B49A] md:p-1 dark:text-white md:dark:text-[#24B49A] my-2"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                        class="text-center block uppercase py-2 px-3 text-white hover:bg-[#24B49A] md:hover:bg-transparent md:border-0 md:hover:text-[#24B49A] md:p-1 dark:text-white my-2">ALL
                        Club</a>
                </li>
                <li>
                    <a href="{{ route('login.index') }}" type="button"
                        class=" rounded text-center sm:mb-2 block uppercase focus:outline-none text-white bg-[#24B49A] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium text-sm px-6 py-1.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 md:mx-2  my-2">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" type="button"
                        class="rounded  text-center sm:mb-2 block uppercase focus:outline-none text-white bg-[#24B49A] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium text-sm px-6 py-1.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 md:mx-2  my-2">Sign
                        Up</a>
                </li>
            </ul>



        </div>
    </div>
</nav>
