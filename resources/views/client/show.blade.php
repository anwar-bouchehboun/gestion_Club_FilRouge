<x-show-layout>
    <x-slot name="solt">


        <div class="  w-full font-[sans-serif] mb-7">

            <div class="grid md:grid-cols-2 gap-2 items-center md:max-h-[475px] overflow-hidden md:mx-4 ">

                <div class="p-4 md:w-2/4 sm:w-0.5">

                    <img src="./storage/image/club.jpg" class=" md:w-2/4" alt="">
                    <a href="#">
                    </a>

                </div>
                <div class="p-6">
                    <h1 class="text-2xl font-bold md:text-4xl text-[#24B49A]">GAMING</h1>
                    <p class="mt-4 text-sm font-semibold leading-9 text-black">Lorem ipsum dolor sit amet,
                        consectetur
                        adipiscing elit. Duis
                        accumsan, nuncet
                        tempus blandit, metus mi consectetur nibh, a pharetra felis turpis vitae ligula. Etiam
                        laoreet
                        velit nec
                        neque
                        ultrices, non consequat mauris tincidunt.Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Duis
                        accumsan, nuncet
                        tempus blandit, metus mi consectetur nibh.</p>

                    <div class="flex justify-between px-2 ">
                        <div>
                            <p class="mt-3 text-sm italic text-black ">Localisation - <span
                                    class="text-[#24B49A]">12-12-2024</span></p>
                            <p class="mt-3 italic text-black">Price : <span class="text-[#24B49A]">500</span>$</p>
                        </div>
                        <div>
                            <form action="{{ route('session') }}" method="post">
                                @csrf
                                <input type="text" name="price" value="500" hidden>
                                <button type="submit"
                                    class=" px-9 py-3 mt-10 text-sm font-semibold tracking-wider text-white bg-[#24B49A] border-none rounded outline-none ">Reservé</button>
                            </form>

                        </div>

                    </div>

                </div>

            </div>






        </div>
        </div>

    </x-slot>
</x-show-layout>
