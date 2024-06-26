<x-app-layout>
    <x-slot name="solt">
        <div class="p-4 xl:ml-80">
            <nav
                class="block w-full max-w-full px-0 py-1 text-white transition-all bg-transparent shadow-none rounded-xl">
                <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                    <div class="capitalize">
                        <nav aria-label="breadcrumb" class="w-max">
                            <ol
                                class="flex flex-wrap items-center w-full p-0 transition-all bg-transparent rounded-md bg-opacity-60">
                                <li
                                    class="flex items-center font-sans text-sm antialiased font-normal leading-normal transition-colors duration-300 cursor-pointer text-blue-gray-900 hover:text-light-blue-500">
                                    <a href="#">
                                        <p
                                            class="block font-sans text-3xl antialiased font-bold leading-normal text-[#24B49A] uppercase transition-all ">
                                            dashboard</p>
                                    </a>

                                </li>

                            </ol>
                        </nav>

                    </div>
                    <div class="flex items-center">
                        <div class="mr-auto md:mr-4 md:w-56">

                        </div>
                        <button
                            class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                            type="button" id="toggle">
                            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" stroke-width="3" class="w-6 h-6 text-blue-gray-500">
                                    <path fill-rule="evenodd"
                                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </button>



                    </div>
                </div>
            </nav>
            <div class="mt-12">
                <div class="grid mb-12 gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                    <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                        <div
                            class="absolute grid w-16 h-16 mx-4 -mt-4 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-gradient-to-tr from-blue-600 to-blue-400 shadow-blue-500/40 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p
                                class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-600">
                                Evenments</p>
                            <h4
                                class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                {{ $CountClientEvent }}
                            </h4>
                        </div>
                        <div class="p-4 border-t border-blue-gray-50">
                            <p
                                class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-600">
                                <strong class="text-green-500"> {{ $CountClientEventYesterdayCount }}</strong>&nbsp;than
                                yesterday
                            </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                        <div
                            class="absolute grid w-16 h-16 mx-4 -mt-4 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-gradient-to-tr from-pink-600 to-pink-400 shadow-pink-500/40 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p
                                class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-600">
                                Users</p>
                            <h4
                                class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                {{ $client }}
                            </h4>

                        </div>
                        <div class="p-4 border-t border-blue-gray-50">
                            <p
                                class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-600">
                                <strong class="text-green-500"> {{ $MemberClient }} </strong>MemberShip CLub
                            </p>
                        </div>

                    </div>
                    <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                        <div
                            class="absolute grid w-16 h-16 mx-4 -mt-4 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-gradient-to-tr from-green-600 to-green-400 shadow-green-500/40 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p
                                class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-600">
                                New Clients</p>
                            <h4
                                class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                {{ $newClientsCount }}</h4>
                        </div>
                        <div class="p-4 border-t border-blue-gray-50">
                            <p
                                class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-600">
                                <strong class="text-green-500">{{ $newClientsYesterdayCount }}</strong>&nbsp;than
                                yesterday
                            </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                        <div
                            class="absolute grid w-16 h-16 mx-4 -mt-4 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-gradient-to-tr from-orange-600 to-orange-400 shadow-orange-500/40 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="w-6 h-6 text-white">
                                <path
                                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                                </path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p
                                class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-600">
                                Client </p>
                            <h4
                                class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                {{ $CountClientSous }}</h4>
                        </div>
                        <div class="p-4 border-t border-blue-gray-50">
                            <p
                                class="block font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-600">
                                <strong
                                    class="text-green-500">{{ $CountClientSousYesterdayCount }}</strong>&nbsp;SousCateogrie
                            </p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="flex flex-wrap justify-evenly">
                <div class="card-body">
                    <div id="piechart_3d" style="width: 350px; height: 300px;"></div>
                </div>



                <div class="chart">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>

            </div>




        </div>

    </x-slot>
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>

<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawFirstChart);
    // google.charts.setOnLoadCallback(drawSecondChart);

    function drawFirstChart() {
        var data = google.visualization.arrayToDataTable([
            ['club', 'STATSITIQUE'],
            <?php echo $data; ?>
        ]);

        var options = {
            title: 'STATSITIQUE CLUB',
            is3D: true,
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }



    /////kdk
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line', // also try bar or other graph types

        // The data for our dataset
        data: {
            labels: <?php echo json_encode($reservationNames); ?>,
            // Information about the dataset
            datasets: [{
                label: "Event",
                backgroundColor: 'lightblue',
                borderColor: 'royalblue',
                data: <?php echo json_encode($reservationCounts); ?>,
            }]
        },

        // Configuration options
        options: {
            layout: {
                padding: 10,
            },
            legend: {
                position: 'bottom',
            },
            title: {
                display: true,
                text: 'Precipitation in Reservation'
            },
            scales: {
                yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: ''
                    }
                }],
                xAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: ''
                    }
                }]
            }
        }
    });
</script>
