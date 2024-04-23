@php
    $subject = $subject ?? '';
    $body = $body ?? '';
    // $user = $user ?? null;
@endphp



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento Flight Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="p-6">



    <main class="flex flex-col w-screen h-screen">
        {{-- @foreach ($reservationData as $reserve) --}}
        <section class="flex items-center justify-center flex-grow w-full p-4 bg-red-800">
            <div class="flex w-full h-64 max-w-3xl text-zinc-50"
                style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL-Lm45K5q1h-05z6F3JOhI0iEIa9lyj-A2g&usqp=CAU'); background-repeat: no-repeat; background-size: cover; background-position: center; width:100%;">

                {{-- <div class="px-3 mt-8 ml-12 rou9nded-full bg-lime-400" style="rotate: 90deg;height:12rem"> --}}


                {{-- </div> --}}
                <div
                    class="relative flex flex-col items-center justify-between h-full border-2 border-black border-dashed bg-zinc-900">
                    <div class="text-sm font-medium text-center text-black mt-28" style="rotate: 90deg;">Ticket
                        Number : {{ $reservationData->id }}</div>

                    {{-- <div class="absolute w-8 h-8 bg-black rounded-full -top-5"></div>
                    <div class="absolute w-8 h-8 bg-black rounded-full -bottom-5"></div> --}}
                </div>
                <div class="flex flex-col flex-grow h-full px-10 py-8 bg-zinc-900 rounded-r-3xl">
                    <div class="flex items-center justify-between w-full">
                        <div class="flex flex-col ">
                            <span class="text-2xl font-bold">{!! $body !!}</span>
                            <span class="text-sm font-bold text-black">{!! $reservationData->users->name !!}</span>
                            <span class="text-sm font-bold text-black">{!! $reservationData->users->email !!}</span>
                        </div>
                        <div class="flex flex-col items-center flex-grow px-10">
                            <span class="text-xs font-extrabold text-black">YOUCODE</span>
                            <div class="flex items-center w-full mt-2">
                                <div class="w-3 h-3 "></div>
                                <div class="flex-grow h-px "></div>
                                {{-- <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                    stroke-miterlimit="2" viewBox="0 0 67 67" xmlns="http://www.w3.org/2000/svg"
                                    width="30px" style="fill: black;">
                                    <path
                                        d="m2.083 8.333v50c0 1.151.933 2.084 2.084 2.084h58.333c1.151 0 2.083-.933 2.083-2.084v-50c0-1.15-.932-2.083-2.083-2.083h-58.333c-1.151 0-2.084.933-2.084 2.083z" />
                                    <path d="m16.667 52.083v4.167h-10.417v-4.167z" />
                                    <path d="m20.833 56.25h10.417v-4.167h-10.417z" />
                                    <path d="m35.417 56.25h10.416v-4.167h-10.416z" />
                                    <path d="m50 52.083h10.417v4.167h-10.417z" />
                                    <path d="m6.25 18.75h54.167v29.167h-54.167z" fill="#dedede" />
                                    <path d="m6.25 18.75h27.083v29.167h-27.083z" fill="#f2f2f2" />
                                    <path
                                        d="m42.716 35.133c.64-.373 1.034-1.059 1.034-1.8s-.394-1.426-1.034-1.799l-12.5-7.292c-.644-.376-1.44-.378-2.087-.007-.647.372-1.046 1.061-1.046 1.807v14.583c0 .746.399 1.435 1.046 1.807.647.371 1.443.368 2.087-.007z" />
                                    <path d="m37.532 33.333-6.282 3.665v-7.329z" />
                                    <path d="m33.333 30.884v4.899l-2.083 1.215v-7.329z" />
                                    <path d="m50 10.417h10.417v4.166h-10.417z" />
                                    <path d="m35.417 14.583h10.416v-4.166h-10.416z" />
                                    <g fill="#666">
                                        <path d="m20.833 14.583h10.417v-4.166h-10.417z" />
                                        <path d="m16.667 10.417v4.166h-10.417v-4.166z" />
                                    </g>
                                </svg> --}}

                                <div class="flex-grow h-px "></div>
                                <div class="w-3 h-3 "></div>
                            </div>
                        </div>

                        <div class="flex flex-col items-center">



                            <span class="text-2xl font-bold">
                                {{ $reservationData->reservable->name }}
                            </span>


                        </div>
                    </div>
                    <div class="flex justify-between w-full mt-auto">
                        <div class="flex flex-col">
                            <span class="text-xs font-bold">Date</span>
                            <span class="font-bold text-black ">
                                {{ $reservationData->reservable->date }}
                            </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold">Prix</span>
                            <span class="font-bold text-black ">
                                {{ $reservationData->reservable->prix }} $
                            </span>
                        </div>
                        <div class="flex flex-col">
                            {{-- ------------------ --}}
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold">Local</span>
                            <span class="font-bold text-black ">
                                {{ $reservationData->reservable->local }}
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- @endforeach --}}
    </main>

</body>

</html>
