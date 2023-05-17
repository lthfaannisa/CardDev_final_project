@extends('layouts.main-admin')
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
                        <p class="text-white justify-normal px-5 font-semibold">Hi, Admin
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






    @endsection