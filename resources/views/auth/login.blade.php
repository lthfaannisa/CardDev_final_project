@extends('layouts.app')

@section('body')
class="bg-cover bg-center h-screen" style="background-image: url('image/mipa.jpg')"
@endsection

@section('content')
<!-- This is the login form -->
<div class="flex flex-col min-h-screen">
    <div class="flex flex-1 bg-gray-100 bg-no-repeat bg-cover justify-center items-center" style="background-image: url('image/mipa.jpg')">
        <div class="container mx-auto max-w-8xl">
            <div class="flex justify-center px-6 my-14">
                <div class="w-full xl:w-3/4 lg:w-11/12 flex h-full">
                    <div class="w-full h-auto hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-color: #A3A47F;">
                        <div class="flex items-center justify-center w-full h-full">
                            <div class="text-white font-bold text-2xl flex flex-col items-center justify-center ">
                                <img src="image/logo-removebg-preview(1).png" alt="Logo" class="w-26 h-28 mx-10">
                                <div class="text-2xl font-bold content-center">SIMBA</div>
                                <div class="text-sm font-semibold">Sistem Informasi Biodata Alumni</div>
                                <div class="text-sm font-semibold">Universitas Syiah Kuala</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 p-5 rounded-lg lg:rounded-l-none shadow-blur bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
                        <h3 class="pt-4 text-2xl text-center">Silahkan login untuk masuk</h3>
                        <form class="px-8 pt-6 pb-8 mb-4" method="POST" action="/login">
                            @csrf
                            <form class="space-y-6" action="#" method="POST">
                                <div class="mb-4 relative">
                                    <div class="pb-2 mt-1">
                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                            <i class="far fa-user absolute left-3 top-10"></i>
                                            NIP/NPM</label>
                                        <input id="email" name="email" required class="block w-full px-10 py-2 text-gray-900 placeholder-gray-400 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Masukkan username Anda">
                                    </div>
                                </div>

                                <div class="mb-4 relative">
                                    <div class="pb-4 mt-1">
                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                            <i class="fas fa-lock absolute left-3 top-10"></i>
                                            Password</label>
                                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-10 py-2 text-gray-900 placeholder-gray-400 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Masukkan password Anda">
                                    </div>

                                    <div class="mb-4 md:mt-3 text-center">
                                        <button class="w-full px-4 py-2 font-bold text-white rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" style="background-color: #A3A47F;" type="submit">
                                            Masuk
                                        </button>
                                    </div>

                                    <div class="mb-1 text-center text-sm">
                                        <p class="text-black">
                                            Belum memiliki akun?
                                            <a href="/register" style="color:#0077FF">Daftar sekarang</a>

                                        </p>
                                    </div>
                                </div>


                            </form>
                            @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>