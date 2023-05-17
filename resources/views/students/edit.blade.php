<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <!-- Favicon icon -->
    <link rel="icon" href="https://simkuliah.unsyiah.ac.id/assets/unsyiah.png" type="image/x-icon">
    <title>SIMBA</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
    

</head>
<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
                <img src="https://simkuliah.usk.ac.id/assets/unsyiah.png"
                    class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
                    alt="main_logo" />
                <span class="ml-1 font-semibold text-sm transition-all duration-200 ease-nav-brand">SIMBA</span>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">

                            <!-- Dashboard -->
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" 
                href="/dashboard">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <img src="image/dashboard.svg" alt="" width="13px">
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Bantuan</span>
                </a>
            </li>
            <!-- Dashboard end -->

            <!-- Data Alumni -->
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors rounded-lg bg-white font-semibold text-slate-700" 
                href="/dataalumni">
                <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5" style="background: linear-gradient(to right, #A3A47F, #8FA781)">
                        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(153.000000, 2.000000)">
                                            <path class="fill-slate-800 opacity-60" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                                            </path>
                                            <path class="fill-slate-800" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Data Alumni</span>
                </a>
            </li>
            <!-- Data alumni end -->

            <!-- Lowongan -->
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" 
                href="/lowongan">
                <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <img src="image/lowongan.svg" alt="" width="13px">
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Lowongan</span>
                </a>
            </li>
            <!-- Lowongan end -->

            <!-- Bantuan -->
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" 
                href="/bantuan">
                <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <img src="image/bantuan.svg" alt="" width="13px">
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Bantuan</span>
                </a>
            </li>
            <!-- Bantuan end -->

            <!--Logout-->
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="/logout">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <img src="image/logout.svg" alt="" width="12px" height="12px">
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Log Out</span>
                </a>
            </li>
            <!--end Logout-->
        </ul>
    </div>
</aside>


    <!-- Navbar -->
<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
              <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Data Alumni</li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Edit Data Alumni</li>

          </ol>
          <h6 class="mb-0 font-bold capitalize">Data Alumni</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          <div class="flex items-center md:ml-auto md:pr-4">
          </div>
          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <!-- online builder btn  -->
            <!-- <li class="flex items-center">
              <a class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
            </li> -->
            <li class="flex items-center">
              <a class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                <i class="fa fa-user sm:mr-1"></i>
                <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
              </a>
            </li>
            <li class="flex items-center pl-4 xl:hidden">
              <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                </div>
              </a>
            </li>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <!-- Isi Kontent -->
        <!-- Start Kotak Besar -->
        <div class="flex-none w-full max-w-full px-3 mt-6">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border mb-2">
                <div class="p-4 pb-4 mb-0 bg-white rounded-t-2xl">
                    <h6 class="mb-1">Edit Profile</h6>
                </div>
                <!-- Isi Content Lowongan -->

                <form action="{{ url('/updatealumni', $student->id) }}" method="post" class="p-4">
                    {!! csrf_field() !!}
                    </a>

                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">


                        <li
                            class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit">
                            <strong class="text-slate-700">Nama Lengkap</strong> &nbsp;

                            <div
                                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                                <span
                                    class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                    <i class="fas fa-user" aria-hidden="true"></i>
                                </span>
                                <input value="{{ $student->nama }}" name="nama" id="nama" type="text"
                                    class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                    placeholder="Nama Lengkap" />
                            </div>

                        </li>

                        <li
                            class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit">
                            <div class="form-group">
                                <label for="fotoAlumni"><strong class="text-slate-700">Foto Alumni</strong><br>
                                    <small>Max. 300kb; file png, jpg, svg</small>
                                </label>
                                <input value="{{ $student->foto }}" name="foto" type="file"
                                    class="form-control-file" id="foto" accept=".png,.jpg, .svg" max-size="300"
                                    width="600">
                            </div>
                        </li>


                        <li
                            class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                            <strong class="text-slate-700">NPM</strong> &nbsp;

                            <div
                                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                                <span
                                    class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                    <i class="fas fa-id-card" aria-hidden="true"></i>
                                </span>
                                <input value="{{ $student->npm }}" name="npm" id="npm" type="text"
                                    class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                    placeholder="NPM" />
                            </div>


                        </li>

                        <li
                            class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                            <strong class="text-slate-700">Tempat & Tanggal Lahir</strong> &nbsp;

                            <div
                                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                                <span
                                    class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                    <i class="fas fa-user" aria-hidden="true"></i>
                                </span>
                                <input value="{{ $student->tempat_tanggal_lahir }}" name="tempat_tanggal_lahir"
                                    id="tempat_tanggal_lahir" type="text"
                                    class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                    placeholder="Tempat Lahir" />
                            </div>

                        </li>


                        <li
                            class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                            <strong class="text-slate-700">Tahun Masuk</strong> &nbsp;
                            <div
                                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                                <span
                                    class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                    <i class="fas fa-calendar-day" aria-hidden="true"></i>
                                </span>
                                
                                <input value="{{ $student->tahun_masuk }}" name="tahun_masuk" type="number" id="tahun_masuk"
                                            class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-full min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            min="1900" max="2099" step="1"
                                            placeholder="Tahun Masuk" />
                            </div>

                        </li>

                        <li
                            class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                            <strong class="text-slate-700">Tahun Lulus</strong> &nbsp;
                            <div
                                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                                <span
                                    class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                    <i class="fas fa-calendar-day" aria-hidden="true"></i>
                                </span>
                                    <input value="{{ $student->tahun_lulus }}" name="tahun_lulus" type="number" id="tahun_lulus"
                                            class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-full min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            min="1900" max="2099" step="1"
                                            placeholder="Tahun Lulus" />

                            </div>

                        </li>

                        <li
                            class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                            <strong class="text-slate-700">Pekerjaan</strong> &nbsp;

                            <div
                                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                                <span
                                    class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                    <i class="fas fa-briefcase" aria-hidden="true"></i>
                                </span>
                                <input value="{{ $student->pekerjaan }}" name="pekerjaan" id="pekerjaan"
                                    type="text"
                                    class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                    placeholder="Pekerjaan" />
                            </div>
                        </li>

                        <li
                            class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                            <strong class="text-slate-700">Bidang Minat</strong> &nbsp;

                            <div
                                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                                <!-- Tes Awal -->
                                <div class="form-check mb-3">
                                    <input value="{{ $student->bidang_minat }}" class="form-check-input p-4"
                                        type="radio" name="bidang_minat" id="dataMining">
                                    <label class="custom-control-label p-2" for="dataMining">Data Mining & Kecerdasan
                                        Artfisial</label>
                                </div>
                                <div class="form-check ">
                                    <input value="{{ $student->bidang_minat }}" class="form-check-input p-4"
                                        type="radio" name="bidang_minat" id="rpl">
                                    <label class="custom-control-label p-2" for="rpl">Rekayasa Perangkat
                                        Lunak</label>
                                </div>
                                <div class="form-check">
                                    <input value="{{ $student->bidang_minat }}" class="form-check-input p-4"
                                        type="radio" name="bidang_minat" id="jaringan">
                                    <label class="custom-control-label p-2" for="jaringan">Jaringan Komputer dan
                                        Keamanan Siber</label>
                                </div>
                                <div class="form-check">
                                    <input value="{{ $student->bidang_minat }}" class="form-check-input p-4"
                                        type="radio" name="bidang_minat" id="gis">
                                    <label class="custom-control-label p-2" for="gis">GeoSpasial</label>
                                </div>
                                <!-- End tes -->
                            </div>
                        </li>


                        <li
                            class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                            <strong class="text-slate-700">Judul Tugas Akhir</strong> &nbsp;

                            <div
                                class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft form-group">
                                <span
                                    class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                </span>
                                <textarea value="{{ $student->judul_tugas_akhir }}" name="judul_tugas_akhir" id="judul_tugas_akhir"
                                    class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow form-control"
                                    rows="3"></textarea>
                            </div>
                        </li>


                    </ul>


                    <div class="flex items-center justify-center mb-3 mt-2">
                        <input value="update" type="submit"
                            class="btn btn-success inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500"></input>
                        <div class="mt-2"></div>
                    </div>
                </form>


                <!-- End Content  -->
            </div>
        </div>
        </div>
        <!-- End Kotak Besar -->




        <!-- End Konten -->


        <!--Footer-->
        <footer class="pt-4 absolute bottom-5 left-30">
            <div class="w-full px-6 mx-auto">
                <div class="flex items-center justify-between -mx-3">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div
                            class="leading-normal text-center text-sm text-slate-500 lg:text-center whitespace-nowrap font-medium">
                            Copyright © CardDev Team 2023
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->

<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>

</body>
</html>
