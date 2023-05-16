@extends('layouts.main')
@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Data Mining</p>
                                <h5 class="mb-0 font-bold">
                                    145
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="w-12 h-12 text-center rounded-lg flex items-center justify-center" style="background: linear-gradient(to right, #A3A47F, #8FA781)">
                                <img src="image/data-mining.svg" alt="" width="20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">RPL</p>
                                <h5 class="mb-0 font-bold">
                                    168
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="w-12 h-12 text-center rounded-lg flex items-center justify-center" style="background: linear-gradient(to right, #A3A47F, #8FA781)">
                                <img src="image/rpl.svg" alt="" width="20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Jaringan</p>
                                <h5 class="mb-0 font-bold">
                                    95
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="w-12 h-12 text-center rounded-lg flex items-center justify-center" style="background: linear-gradient(to right, #A3A47F, #8FA781)">
                                <img src="image/jaringan.svg" alt="" width="20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-sm">GIS</p>
                                <h5 class="mb-0 font-bold">
                                    89
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="w-12 h-12 text-center rounded-lg flex items-center justify-center" style="background: linear-gradient(to right, #A3A47F, #8FA781)">
                                <img src="image/gis.svg" alt="" width="20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards row 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full h-60 px-3 lg:w-full lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('image/mipa.jpg')">
                    <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-stone-500 to-slate-800 opacity-80"></span>
                    <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                        <h5 class="pt-2 mb-1 px-5 font-bold text-white">SIMBA
                            </p>
                        </h5>
                        <h5 class="mb-6 px-5 font-semibold text-white">Sistem Infomasi Biodata Alumni Universitas Syiah Kuala
                            </p>
                        </h5>
                        <p class="text-white justify-normal px-5">Hi, <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
                        </p>
                        <p class="text-white justify-normal px-5">This system is developed to track and find out the database of graduates from the Department of Informatics, Faculty of Mathematics and Natural Sciences, Universitas Syiah Kuala. We encourage you to use this system wisely.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--card row-3-->
    <div class="w-full max-w-full -mx-3 px-3 mt-4 lg:w-full lg:flex-none">
        <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                <h3 class="font-bold">Jumlah Alumni <h5 class="font-semibold">Berdasarkan Tahun</h5>
                </h3>
                <p class="leading-normal text-sm">
                    <i class="fa fa-arrow-up text-lime-500"></i>
                    <span class="font-semibold">4% more</span> in 2020
                </p>
            </div>
            <div class="flex-auto p-4">
                <div>
                    <canvas id="chart-line" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const data = [32, 46, 53, 58, 62, 81, 79, 76];

        // Mendapatkan referensi ke elemen canvas
        const canvas = document.getElementById('chart-line');

        // Membuat line chart
        new Chart(canvas, {
            type: 'line',
            data: {
                labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'], // Label untuk setiap titik pada grafik
                datasets: [{
                    label: 'Total Alumni',
                    data: data,
                    borderColor: '#A3A47F', // Warna garis
                    borderWidth: 2, // Ketebalan garis
                    fill: true,
                    backgroundColor: 'rgba(163, 164, 127, 0.4)', // Warna latar belakang area di bawah garis
                    tension: 0.4,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                tooltips: {
                    enabled: true,
                    mode: 'index',
                    intersect: false,
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleFontColor: '#ffffff',
                    bodyFontColor: '#ffffff',
                    borderColor: '#ffffff',
                    borderWidth: 1,
                    displayColors: false,
                    callbacks: {
                        title: function(tooltipItem) {
                            // Mengatur judul tooltip sebagai tahun
                            return 'Tahun: ' + tooltipItem[0].label;
                        },
                        label: function(tooltipItem) {
                            // Mengatur label tooltip sebagai data alumni
                            return 'Jumlah Alumni: ' + tooltipItem.value;
                        }
                    }
                },
                // Konfigurasi lainnya
            }
        });
    </script>


    <!-- cards row 3 -->

    <div class="flex flex-wrap mt-4 -mx-3 px-3">
        <div class="w-full mt-0 mb-1 lg:mb-0 lg:w-full lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="flex-auto px-3 md:mt-4">

                    <h6 class="mb-0 ml-2 font-bold">Total Alumni</h6>
                    <p class="ml-2 leading-normal text-sm"><span class="font-semibold">Berdasarkan Minat</span></p>
                    <div class="w-full px-6 mx-auto max-w-screen-2xl rounded-xl">
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none w-1/4 max-w-full py-4 pl-0 pr-3 mt-0">
                                <div class="flex mb-2">
                                    <div class="flex items-center justify-center w-10 h-10 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl" style="background: linear-gradient(to right, #A3A47F, #8FA781)">

                                        <img src="image/gis.svg" alt="" width="18px" height="18px">

                                    </div>
                                    <p class="mt-1 mb-0 font-bold leading-tight text-sm">Data Mining</p>
                                </div>
                                <h4 class="font-bold">158</h4>
                                <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft -mt-0.38 w-9/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-none w-1/4 max-w-full py-4 pl-0 pr-3 mt-0">
                                <div class="flex mb-2">
                                    <div class="flex items-center justify-center w-10 h-10 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl" style="background: linear-gradient(to right, #A3A47F, #8FA781)">

                                        <img src="image/gis.svg" alt="" width="18px" height="18px">

                                    </div>
                                    <p class="mt-1 mb-0 font-bold leading-tight text-sm">RPL</p>
                                </div>
                                <h4 class="font-bold">158</h4>
                                <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft -mt-0.38 w-9/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-none w-1/4 max-w-full py-4 pl-0 pr-3 mt-0">
                                <div class="flex mb-2">
                                    <div class="flex items-center justify-center w-10 h-10 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl" style="background: linear-gradient(to right, #A3A47F, #8FA781)">

                                        <img src="image/gis.svg" alt="" width="18px" height="18px">

                                    </div>
                                    <p class="mt-1 mb-0 font-bold leading-tight text-sm">Jaringan</p>
                                </div>
                                <h4 class="font-bold">158</h4>
                                <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft -mt-0.38 w-9/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-none w-1/4 max-w-full py-4 pl-0 pr-3 mt-0">
                                <div class="flex mb-2">
                                    <div class="flex items-center justify-center w-10 h-10 mr-2 text-center bg-center rounded fill-current shadow-soft-2xl" style="background: linear-gradient(to right, #A3A47F, #8FA781)">

                                        <img src="image/gis.svg" alt="" width="18px" height="18px">

                                    </div>
                                    <p class="mt-1 mb-0 font-bold leading-tight text-sm">GIS</p>
                                </div>
                                <h4 class="font-bold">158</h4>
                                <div class="text-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft -mt-0.38 w-9/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="md:mt-4 mb-4 mx-4">
                    <canvas id="chart-bars" height="80"></canvas>
                    <script>
                        var ctx = document.getElementById('chart-bars').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Data Mining', 'RPL', 'Jaringan', 'GIS'],
                                datasets: [{
                                    label: 'Jumlah Alumni',
                                    data: [145, 158, 95, 89],
                                    backgroundColor: '#A3A47F',
                                    borderColor: '#A3A47F',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>

    </div>

    <!-- cards row 4 -->

    <div class="flex flex-wrap my-6 -mx-3">


    </div>

    <footer>
        <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                    <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                        Copyright © CardDev Team 2023
                    </div>
                </div>

            </div>
        </div>
    </footer>


</div>
<!-- end cards -->
@endsection