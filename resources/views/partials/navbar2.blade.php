<!-- repair this code -->
<header class="relative inset-x-0 bottom-0">
    <div class="flex inset-x-0 relative w-auto justify-between bg-blue-400 shadow-xl">
        <div class="px-4">
            <ul class="block lg:flex ">
                <li>
                    <a href="/dashboard" class="font-bold text-lg text-primary block py-1">
                        <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-20">

                    </a>
                </li>
                <li>
                    <div class=" my-6 font-semibold text-white">Universitas Syiah Kuala</div>
                </li>

            </ul>

        </div>
        <div class="flex items-center px-4 ">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden ">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav id="nav-menu"
                class="hidden relative inset-x-0 w-auto py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none  ">
                <ul class="block lg:flex ">



                    <li class="group">
                        <a href="/login" class="text-base text-white py-2 mx-8 flex group-hover:text-primary">Login</a>
                    </li>
                    <li class="group">
                        <a href="/register"
                            class="text-base text-white py-2 mx-8 flex group-hover:text-primary ">Register</a>
                    </li>



                </ul>
            </nav>

        </div>
    </div>
    </div>

    </div>
</header>
