<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    @stack('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <main class="">
        @include('layouts.admin.side')

        {{ $solt }}

    </main>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>

</html>
<script>
    var container = document.getElementById('image-container');

    // var containers = document.getElementById('image-containers');
    function addImage() {
        console.log("ee");
        var newInput = document.createElement('input');
        newInput.type = 'file';
        newInput.name = 'image[]'; // Use 'images[]' to match the existing input
        newInput.required = true;
        newInput.classList.add('block', 'border-gray-300', 'py-[8px]', 'w-full', 'bg-white', 'rounded-lg', 'text-sm',
            'text-slate-500', 'file:mr-4', 'file:py-2', 'file:ml-2', 'file:px-4', 'file:rounded-md',
            'file:border-0', 'file:text-sm', 'file:font-semibold', 'file:bg-blue-50', 'file:text-blue-700',
            'hover:file:bg-blue-100');

        container.appendChild(newInput);
        // containers.appendChild(newInput);
    }
</script>
<script src="/assets/js/toggle.js"></script>
<script src="/assets/js/datatble.js"></script>
