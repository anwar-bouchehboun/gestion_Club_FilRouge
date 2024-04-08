<!-- component -->

<aside
class="bg-[#24B49A] -translate-x-80 fixed inset-0 z-50 h-[calc(200vh-32px)] w-72  transition-transform duration-300 xl:translate-x-0">
<div class="relative border-b border-white/20">
        <a class="flex items-center gap-4 px-8 py-6" href="/Dashbord">
            <h6 class="block font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-white">
                PHONIXCLUB</h6>
        </a>
        {{-- <button
            class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden"
            type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
        </button> --}}
    </div>
    <div class="m-4">
        <ul class="flex flex-col gap-1 mb-4">
            <li>
                <a aria-current="page" class="active" href="{{ route('Dashbord') }}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="w-5 h-5 text-inherit">
                            <path
                                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                            </path>
                            <path
                                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                            </path>
                        </svg>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            Dashboard</p>
                    </button>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('club.index') }}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">
                        <svg class="w-5 h-5 text-white" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="21 12 17 12 14 20 10 4 7 12 3 12" />
                        </svg>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            Club</p>
                    </button>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('categorie.index') }}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="w-5 h-5 text-inherit">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            Categorie</p>
                    </button>
                </a>
            </li>
            {{-- sous categorie --}}
            <li>
                <a class="" href="{{ route('souscategorie.index') }}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="w-5 h-5 text-inherit">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            SousCategorie</p>
                    </button>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('event.index') }}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="w-5 h-5 text-inherit">
                            <path fill-rule="evenodd"
                                d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            Event</p>
                    </button>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('user.index') }}">
                    <button
                        class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                        type="button">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" class="w-5 h-5 text-inherit">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                            Users</p>
                    </button>
                </a>
            </li>

            <li>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="flex items-center w-full gap-4 px-4 py-3 font-sans text-xs font-bold text-white capitalize transition-all rounded-lg middle none center disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-white/10 active:bg-white/30"
                          >

                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="0.5"
                                        d="M20.5 7V13C20.5 16.7712 20.5 18.6569 19.3284 19.8284C18.1569 21 16.2712 21 12.5 21H11.5C7.72876 21 5.84315 21 4.67157 19.8284C3.5 18.6569 3.5 16.7712 3.5 13V7"
                                        stroke="#FFF" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path
                                        d="M2 5C2 4.05719 2 3.58579 2.29289 3.29289C2.58579 3 3.05719 3 4 3H20C20.9428 3 21.4142 3 21.7071 3.29289C22 3.58579 22 4.05719 22 5C22 5.94281 22 6.41421 21.7071 6.70711C21.4142 7 20.9428 7 20 7H4C3.05719 7 2.58579 7 2.29289 6.70711C2 6.41421 2 5.94281 2 5Z"
                                        stroke="#FFF" stroke-width="1.5"></path>
                                    <path d="M12 7L12 16M12 16L15 12.6667M12 16L9 12.6667" stroke="#FFF"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <p
                                class="block font-sans text-base antialiased font-medium leading-relaxed capitalize text-inherit">
                                LogOut</p>
                        </button>
                    </form>


            </li>
        </ul>

    </div>
</aside>
