<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Comfortaa:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/dashboard/assets/img/logo2.png') }}" type="image/x-icon">
    <title>Dashboard | Dinus Application Competition 2023</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/css/scroll.css') }}">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        bai: ['Bai Jamjuree']
                    },
                    color: {
                        'baseColor': '#5FCC9C',
                    },
                    gridTemplateColumns: {
                        'main-grid': '1fr 2fr'
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        /* Syntax CSS Here */
        .main-lg {
            grid-template-columns: 0.5fr 2fr;
        }
    </style>
</head>

<body class="font-bai bg-slate-200">
    @include('sweetalert::alert')
    <!-- Super Container -->
    <div class="mx-auto w-full lg:h-[100vh]">
        <!-- Navbar -->
        <div class="lg:hidden bg-black flex items-center justify-between py-2">
            <div class="flex flex-row items-center">
                <a href="{{ route('home') }}" class="ml-3"><img
                        src="{{ asset('/assets/dashboard/assets/img/logo2.png') }}" width="50px" alt="logo"></a>
                <h1 class="text-white text-xl font-bold ml-2">DINACOM</h1>
            </div>

            <!-- Nav Menu -->
            <div class="bg-white w-13 h-13 mr-3 rounded-lg overflow-hidden lg:hidden">
                <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                    class="bg-slate-200 w-full h-full  px-4 py-2.5 text-center inline-flex items-center" type="button">
                    <img src="{{ asset('/assets/dashboard/assets/logo/humberger.svg') }}" width="" alt="">
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownDivider"
                    class="hidden z-10  text-lg bg-slate-200 rounded divide-y divide-gray-400  text-center shadow w-screen">
                    <div class="py-1">
                        <a href="{{ route('peserta.index') }}"
                            class="block py-2 px-4  text-gray-700 hover:bg-gray-100 ">Beranda</a>
                    </div>
                    <ul class="py-1  text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                        <li class="w-full">
                            <a href="{{ route('peserta', ['id' => Auth::user()->id]) }}"
                                class="block py-2 px-4 hover:bg-gray-100 ">Peserta</a>
                        </li>
                        <li class="w-full">
                            <a href="{{ route('berkas') }}" class="block py-2 px-4 hover:bg-gray-100 ">Unggah</a>
                        </li>
                        <li class="w-full">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                {{-- @method(DELETE) --}}
                                <button type="submit" class="block py-2 px-4 text-center w-full hover:bg-gray-100 ">
                                    Logout
                                </button>

                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown Menu End -->
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Main-Lg -->
        <div class="main-lg @stack('hidden')  lg:grid h-full">
            <!-- [Left Side] -->
            @include('components.sidebar-peserta')
            <div class="flex flex-col mx-3 my-3 rounded-xl bg-[#005857]">
                <!-- Profile -->
                <div class="flex items-center justify-end mt-4 mr-9">

                    <h1 class="mr-4 font-semibold text-white">Welcome, {{ Auth::user()->name }}
                        <br>
                        <span class="text-sm">Status Kontes : <span class="text-yellow-500">
                                {{ Auth::user()->status_contest }}</span></span>
                    </h1>
                    <img src="{{ asset('assets/dashboard/assets/img/profile.png') }}" alt="profile" width="50px">
                </div>
                <!-- Profile End -->

                <!-- Greeting -->

                <div class="text-4xl mt-3  ml-8 font-bold leading-[3.6rem]">
                    <h1 class="hidden md:block text-white animate__animated animate__backInRight"><span
                            class="text-[#5FCC9C]">DASH</span>BOARD | DINACOM 2023</h1>
                    <h1 class="md:hidden text-white animate__animated animate__backInRight"><span
                            class="text-[#5FCC9C]">DASH</span>BOARD</h1>
                    <h1 class="md:hidden text-white animate__animated animate__backInRight">DINACOM 2023</h1>
                </div>

                <!-- Border Line -->
                <div class="w-[93%] mx-auto my-9 border border-slate-400"></div>

                <!-- Content -->
                @yield('content-home')
                <div class="animate__animated animate__zoomIn bg-slate-200 mx-8 md:p-8 mb-5 h-full rounded-xl"
                    @stack('home-style')>
                    @yield('content-lg')

                </div>
                <!-- Content End-->
            </div>
            <!-- [Right Side] End -->
        </div>
        <!-- Main-Lg End -->

        <!-- Main-Sm-Md -->
        <!-- Hero -->
        @yield('content-sm')
        <!-- Content End -->
    </div>
    <!-- Super Container End -->

    @stack('modal')
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>
