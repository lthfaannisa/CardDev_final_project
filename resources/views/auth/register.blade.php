@extends('layouts.app')


@section('body')
class="bg-cover bg-center h-screen" style="background-image: url('image/mipa.jpg')"
@endsection

@section('content')
<!-- Register form that includes the name, npm, password  using tailwind css -->
<div class="flex flex-col justify-center min-h-screen pb-8">


    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form action="/register" method="POST">
                @csrf
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class="mt-6 text-3xl font-bold text-center text-gray-900">
                        Sign-Up
                    </h2>

                </div>
                <br>

                <!-- Name -->
                <div>
                    <div class="pb-2 mt-1">
                        <input id="name" name="name" required class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Name" required>
                    </div>

                    <!-- Email -->
                    <div>
                        </label>
                        <div class="pb-2 mt-1">
                            <input id="email" name="email" required class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="NPM" required>
                        </div>
                    </div>

                    <div>
                        <div class="pb-4 mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Password" required>
                        </div>
                    </div>

                    <!-- make button for login -->
                    <div>
                        <button type="submit" class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md group hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <!-- Heroicon name: solid/lock-closed -->

                            </span>
                            Register
                        </button>
                    </div>
                    <div class="pt-3 text-center">
                        <p> Already have an account? <a href="/login">Login</a></p>
                    </div>
            </form>
        </div>
    </div>

</div>
@endsection