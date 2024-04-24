@php
    $subject = $subject ?? '';
    $body = $body ?? '';
    $user = $user ?? null;
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
        <section class="flex items-center justify-center flex-grow w-full p-4">
            <div class="flex w-full h-64 max-w-3xl text-zinc-50">
                <div class="flex flex-col flex-grow h-full px-10 py-8 bg-zinc-900 rounded-r-3xl">
                    <div class="flex items-center justify-between w-full">
                        <div class="flex flex-col">
                            <span class="text-2xl font-bold">{!! $body !!}</span>
                            <span class="text-sm font-bold text-black">{!! $user->users->name !!}</span>
                            <span class="text-sm font-bold text-black">{!! $user->users->email !!}</span>
                        </div>
                        <div class="flex flex-col items-center flex-grow px-10">
                            <span class="text-xs font-extrabold text-black uppercase"> Badge DGSIN</span>
                            <div class="flex items-center w-full mt-2">
                                <div class="flex items-center justify-center w-32 h-32 bg-white rounded-lg">
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold"> Add memeber Club :
                                {{ $user->created_at->format('Y-m-d') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

</body>

</html>
