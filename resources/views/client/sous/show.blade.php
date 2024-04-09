<x-goust-layout>
    <x-slot name="solt">
        <div class="py-3 ">
            <h2 class="text-2xl font-bold uppercase md:text-4xl md:ms-12 ms-3">Show Sous Categorie</h2>
            <hr class="w-20 h-1 bg-black ms-3 md:mb-1 mb-9 md:ms-12">
        </div>

        <div class="  w-full font-[sans-serif] mb-7">

            <div class="grid md:grid-cols-2 gap-2 items-center md:max-h-[475px] overflow-hidden md:mx-4  border border-gray-200 rounded-lg shadow">

                <div class="p-4 w-50 md:w-full ">

                    <img src="/../storage/{{ $souscategories->image }}" class="w-full rounded-2xl" alt="{{ $souscategories->name }}">
                    <a href="#">
                    </a>

                </div>
                <div class="p-6">
                    <h1 class="text-2xl font-bold md:text-4xl text-[#24B49A]">{{ $souscategories->name }}</h1>
                    <p class="mt-4 text-sm font-semibold leading-9 text-black">{{ $souscategories->discrption }}</p>

                    <div class="flex justify-between px-2 ">
                        <div>
                          <h4 class="text-2xl font-bold">Cateogrie  <strong class="text-[#24B49A] italic">  {{ $souscategories->categorie->name }}</strong></h4>
                            <p class="mt-3 italic text-black">Price : <span class="text-[#24B49A]">{{ $souscategories->price }}</span>$</p>
                        </div>
                        <div>
                            <form action="{{ route('sessionsous') }}" method="post">
                                @csrf
                                <input type="text" name="sous" value="{{ $souscategories->id }}" hidden>
                                <button type="submit"
                                    class=" px-9 py-3 mt-10 text-sm font-semibold tracking-wider text-white bg-[#24B49A] border-none rounded outline-none ">Reservé</button>
                            </form>

                        </div>

                    </div>

                </div>

            </div>






        </div>


    </x-slot>
    </x-show-layout>
