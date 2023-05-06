@extends('layouts.app')


@section('body')
class="bg-cover bg-center h-screen" style="background-image: url('image/mipa.jpg')"
@endsection

@section('content')
<!-- This is the login form -->

<form action="/login" method="POST">
    @csrf
    <div class="flex flex-col justify-center min-h-screen pt-2 mt-2 ">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
        </div>

        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white shadow sm:rounded-sm sm:px-10">
                <h2 class="mt-2 text-3xl font-bold font-serif text-center text-gray-900">
                    Sign In
                </h2>
                <br>
                <form class="space-y-6" action="#" method="POST">
                    <div>
                        <div class="pb-2 mt-1">
                            <input id="email" name="email" required class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="NPM">
                        </div>
                    </div>

                    <div>
                        <div class="pb-4 mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Password">
                        </div>
                    </div>

                    <!-- make button for login -->
                    <div>
                        <button type="submit" class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-full group hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Login
                        </button>
                    </div>


                </form>
                @endsection