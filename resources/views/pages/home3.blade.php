<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <script>
        tailwind.config = {
            darkMode: false,
            theme: {
                extend: {
                    fontFamily: {
                        ubuntu: ["Ubuntu Mono"],
                    },
                    colors: {
                        textgreen: "#5FCC9C",
                        btngreen: "#45EBA5",
                        lightgrn: "#ABEDD8",
                        darkgreen: "#005555",
                        medgrn: "#276161",
                    },
                },
            },
        };
    </script>
    <title>Dinacom 2023</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Ubuntu+Mono:wght@700&display=swap");
    </style>
</head>

<body class="font-ubuntu m-0 p-0 overflow-x-hidden w-full bg-darkgreen">
    <nav id="navbar"
        class="fixed flex top-0 w-screen z-40 backdrop-opacity-10 border-gray-200 px-2 sm:px-4 py-2.5 rounded-b md:bg-transparent bg-darkgreen md:h-[150px] duration-300">
        <div class="container flex flex-wrap flex-end justify-end items-center mx-auto">
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-medgrn focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent bg-darkgreen md: bg-darkgreen border-gray-700">
                    <li class="nav-menu">
                        <a href="#header"
                            class="bg-transparent block p-2 px-4 text-[1.5em] rounded text-textgreen md: hover:text-white hover:text-white">Beranda</a>
                    </li>
                    <li class="nav-menu">
                        <a href="#about"
                            class="bg-transparent block p-2 px-4 text-[1.5em] rounded text-textgreen md: hover:text-white hover:text-white">Tentang</a>
                    </li>
                    <li class="nav-menu">
                        <a href="#mitra"
                            class="bg-transparent block p-2 px-4 text-[1.5em] rounded text-textgreen md: hover:text-white hover:text-white">Media
                            & Partner</a>
                    </li>
                    <li class="nav-menu">
                        <a href="#sponsor"
                            class="bg-transparent block p-2 px-4 text-[1.5em] rounded text-textgreen md: hover:text-white hover:text-white">Sponsor</a>
                    </li>
                    <li>
                        <button type="button" data-modal-toggle="authentication-modal"
                            class="bg-btngreen block p-2 px-4 text-[1.5em] rounded hover:bg-gray-100 md:border-2 border-btngreen text-white md: hover:text-white hover:bg-gray-700 hover:text-white md: hover:bg-transparent md:hover:border-btngreen border-2">
                            Daftar
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="min-w-[100vw]">
        <section id="header">
            <div class="section bg-[url('./assets/images/banner_bg.png')] bg-cover md:min-h-[100vh] pt-36 pb-12">
                <div class="grid md:grid-cols-2 gap-4 container mx-auto">
                    <div>
                        <h1 class="text-textgreen font-extrabold lg:text-7xl md:text-5xl text-4xl md:mx-6 font-bold font-ubuntu text-center md:text-left mb-2"
                            id="title_dinacom">

                        </h1>

                        <h1
                            class="text-lightgrn lg:text-6xl md:text-4xl text-3xl font-ubuntu text-center md:mx-6 md:text-left mb-2">
                            Telah Dibuka!!
                        </h1>
                        <p class="text-white xl:text-4xl lg:text-3xl md:text-2xl text-2xl text-justify mx-6 mb-8">
                            Daftarkan dirimu dan tim dalam ajang kompetisi aplikasi
                            bergengsi untuk siswa SMA/SMK. Dan tunjukkanlah kemampuan
                            kerjasama timmu dalam menyelesaikan berbagai topik permasalahan
                            di masyarakat melalui inovasi teknologi aplikasi.
                        </p>
                        <a href=""
                            class="bg-btngreen mx-auto md:mx-6 my-6 w-3/4 block py-4 pr-4 pl-3 lg:text-4xl md:text-2xl text-2xl text-center mt-2 rounded-[20px] md:border-0 text-white md: hover:text-white hover:bg-[#5ECE9F] hover:text-white md: hover:bg-textgreen">Daftar</a>
                        <div class="w-3/4 mx-auto mb-[100px] md:mx-6 flex justify-center md:justify-start">
                            <a href="#" class="text-white text-[2rem] md:text-[4rem] mr-2">
                                <i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white text-[2rem] md:text-[4rem] mr-2">
                                <i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="order-first md:order-last flex justify-center items-center">
                        <img src="https://via.placeholder.com/150" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section data-aos="fade-up">
            <img src="https://via.placeholder.com/350x150" class="w-full max-w-full" alt="" />
        </section>
        <section id="about">
            <div class="section bg-[url('./assets/images/about_bg.png')] bg-cover pt-12 md:pt-36 pb-10">
                <div class="container mx-auto">
                    <div class="mb-[10rem]">
                        <h1 class="text-textgreen font-extrabold lg:text-7xl md:text-5xl text-4xl md:mx-6 font-bold font-ubuntu text-center"
                            data-aos="fade-up">
                            Tentang
                        </h1>
                        <h1 class="text-lightgrn lg:text-6xl md:text-4xl text-3xl font-ubuntu text-center md:mx-6 mb-2"
                            data-aos="fade-down">
                            DINACOM
                        </h1>

                        <p class="text-white xl:text-4xl lg:text-3xl md:text-2xl text-2xl  text-justify mx-6 mb-8"
                            data-aos="fade-right">
                            Dinus Application Competition (DINACOM) adalah sebuah kompetisi
                            di bidang teknologi informasi tingkat nasional yang
                            diselenggarakan oleh Dian Nuswantoro Computer Club (DNCC).
                            Produk yang diperlombakan dalam DINACOM merupakan aplikasi
                            berbasis website, aplikasi mobile, dan aplikasi desktop.
                        </p>
                        <p class="text-white xl:text-4xl lg:text-3xl md:text-2xl text-2xl  text-justify mx-6 mb-8"
                            data-aos="fade-left">
                            Kompetisi ini ditujukan untuk pelajar SMA/SMK. Tujuan
                            diselenggarakannya DINACOM adalah untuk menguji kemampuan dan
                            kreativitas pelajar dalam memecahkan permasalah yang ada di
                            masyarakat melalui inovasi teknologi aplikasi.
                        </p>
                        <a href="" data-aos="fade-down"
                            class="bg-btngreen mx-auto  my-6 w-3/4 block py-4 pr-4 pl-3 lg:text-4xl md:text-2xl text-2xl text-center mt-2 rounded-[20px] md:border-0 text-white md: hover:text-white hover:bg-[#5ECE9F] hover:text-white md: hover:bg-textgreen">Guidebook</a>
                    </div>
                    <div class="mx-auto md:mb-[10rem] mb-[5rem]">
                        <h1 class="text-lightgrn lg:text-6xl md:text-4xl text-3xl font-ubuntu text-center md:mx-6 mb-2 "
                            data-aos="fade-up">
                            Hadiah
                        </h1>

                        <div class="flex flex-wrap  w-11/12 mx-auto items-center gap-2">

                            <div class="mx-auto lg:order-2 order-1 border-4 border-textgreen rounded-lg p-8  duration-1000   transition hover:scale-105 hover:bg-medgrn/75"
                                data-aos="flip-left">
                                <h1 class="text-center text-4xl md:text-5xl text-textgreen rounded-lg">
                                    Juara 1
                                </h1>
                                <hr class="border-2 md:border-4 border-textgreen mx-auto mb-2" />
                                <h1 class="text-center text-4xl md:text-6xl text-white rounded-lg">
                                    2.000.000
                                </h1>
                                <p class="text-left text-2xl md:text-3xl text-white rounded-lg">
                                    <span><i class="fas fa-circle text-lg md:text-xl text-textgreen"></i></span>
                                    Sertifikat
                                </p>
                            </div>
                            <div class="mx-auto lg:order-1 order-2 border-4 border-textgreen rounded-lg p-8  duration-1000   transition hover:scale-105 hover:bg-medgrn/75"
                                data-aos="flip-left">
                                <h1 class="text-center text-4xl md:text-5xl text-textgreen rounded-lg">
                                    Juara 2
                                </h1>
                                <hr class="border-2 md:border-4 border-textgreen mx-auto mb-2" />
                                <h1 class="text-center text-4xl md:text-6xl text-white rounded-lg">
                                    2.000.000
                                </h1>
                                <p class="text-left text-2xl md:text-3xl text-white rounded-lg">
                                    <span><i class="fas fa-circle text-lg md:text-xl text-textgreen"></i></span>
                                    Sertifikat
                                </p>
                            </div>
                            <div class="mx-auto lg:order-3 order-3 border-4 border-textgreen rounded-lg p-8  duration-1000   transition hover:scale-105 hover:bg-medgrn/75"
                                data-aos="flip-left">
                                <h1 class="text-center text-4xl md:text-5xl text-textgreen rounded-lg">
                                    Juara 3
                                </h1>
                                <hr class="border-2 md:border-4 border-textgreen mx-auto mb-2" />
                                <h1 class="text-center text-4xl md:text-6xl text-white rounded-lg">
                                    2.000.000
                                </h1>
                                <p class="text-left text-2xl md:text-3xl text-white rounded-lg">
                                    <span><i class="fas fa-circle text-lg md:text-xl text-textgreen"></i></span>
                                    Sertifikat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto mb-[10rem]">
                        <h1 class="text-lightgrn text-[3rem] md:text-[5rem] font-ubuntu text-center"
                            data-aos="fade-up">
                            Timeline
                        </h1>

                        <div class="container">
                            <div class="flex flex-col md:grid grid-cols-12 text-gray-50 mx-8">
                                <div class="flex md:contents">
                                    <div data-aos="fade-right"
                                        class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                                        <div class="h-full w-6 flex items-center justify-center">
                                            <div class="h-full top-2 w-1 bg-btngreen pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="md:w-[75px] md:h-[75px] w-[50px] h-[50px] absolute bg-darkgreen md:-ml-[25px] -ml-[15px] top-[30px] md:top-[37.25px] md:-mt-[8px] rounded-full border-2 border-btngreen shadow text-center flex items-center justify-center">
                                            <p class="text-[1rem] md:text-[2.5rem]">1</p>
                                        </div>
                                    </div>
                                    <div data-aos="fade-right"
                                        class="bg-btngreen col-start-4 col-end-12 px-2 md:px-4 py-2 rounded-xl my-4 mr-auto shadow-md w-full">
                                        <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem] mb-1 drop-shadow">
                                            Pembukaan Pendaftaran
                                        </h3>
                                        <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                            1 Desember 2022
                                        </p>
                                    </div>
                                </div>
                                <div class="flex md:contents">
                                    <div data-aos="fade-left" class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                                        <div class="h-full w-6 flex items-center justify-center">
                                            <div class="h-full top-2 w-1 bg-btngreen pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="md:w-[75px] md:h-[75px] w-[50px] h-[50px] absolute bg-darkgreen md:-ml-[25px] -ml-[15px] top-[30px] md:top-[37.25px] md:-mt-[8px] rounded-full border-2 border-btngreen shadow text-center flex items-center justify-center">
                                            <p class="text-[1rem] md:text-[2.5rem]">2</p>
                                        </div>
                                    </div>
                                    <div data-aos="fade-left"
                                        class="bg-btngreen col-start-4 col-end-12 px-2 md:px-4 py-2 rounded-xl my-4 mr-auto shadow-md w-full">
                                        <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem] mb-1 drop-shadow">
                                            Penutupan Pendaftaran
                                        </h3>
                                        <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                            1 Desember 2022
                                        </p>
                                    </div>
                                </div>
                                <div class="flex md:contents">
                                    <div data-aos="fade-right"
                                        class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                                        <div class="h-full w-6 flex items-center justify-center">
                                            <div class="h-full top-2 w-1 bg-btngreen pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="md:w-[75px] md:h-[75px] w-[50px] h-[50px] absolute bg-darkgreen md:-ml-[25px] -ml-[15px] top-[30px] md:top-[37.25px] md:-mt-[8px] rounded-full border-2 border-btngreen shadow text-center flex items-center justify-center">
                                            <p class="text-[1rem] md:text-[2.5rem]">3</p>
                                        </div>
                                    </div>
                                    <div data-aos="fade-right"
                                        class="bg-btngreen col-start-4 col-end-12 px-2 md:px-4 py-2 rounded-xl my-4 mr-auto shadow-md w-full">
                                        <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem] mb-1 drop-shadow">
                                            Seleksi Awal
                                        </h3>
                                        <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                            1 Desember 2022
                                        </p>
                                    </div>
                                </div>
                                <div class="flex md:contents">
                                    <div data-aos="fade-left" class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                                        <div class="h-full w-6 flex items-center justify-center">
                                            <div class="h-full top-2 w-1 bg-btngreen pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="md:w-[75px] md:h-[75px] w-[50px] h-[50px] absolute bg-darkgreen md:-ml-[25px] -ml-[15px] top-[30px] md:top-[37.25px] md:-mt-[8px] rounded-full border-2 border-btngreen shadow text-center flex items-center justify-center">
                                            <p class="text-[1rem] md:text-[2.5rem]">4</p>
                                        </div>
                                    </div>
                                    <div data-aos="fade-left"
                                        class="bg-btngreen col-start-4 col-end-12 px-2 md:px-4 py-2 rounded-xl my-4 mr-auto shadow-md w-full">
                                        <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem] mb-1 drop-shadow">
                                            Semi Final
                                        </h3>
                                        <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                            1 Desember 2022
                                        </p>
                                    </div>
                                </div>
                                <div class="flex md:contents">
                                    <div data-aos="fade-right"
                                        class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                                        <div class="h-full w-6 flex items-center justify-center">
                                            <div class="h-full top-2 w-1 bg-btngreen pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="md:w-[75px] md:h-[75px] w-[50px] h-[50px] absolute bg-darkgreen md:-ml-[25px] -ml-[15px] top-[30px] md:top-[37.25px] md:-mt-[8px] rounded-full border-2 border-btngreen shadow text-center flex items-center justify-center">
                                            <p class="text-[1rem] md:text-[2.5rem]">5</p>
                                        </div>
                                    </div>
                                    <div data-aos="fade-right"
                                        class="bg-btngreen col-start-4 col-end-12 px-2 md:px-4 py-2 rounded-xl my-4 mr-auto shadow-md w-full">
                                        <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem] mb-1 drop-shadow">
                                            Final
                                        </h3>
                                        <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                            1 Desember 2022
                                        </p>
                                    </div>
                                </div>
                                <div class="flex md:contents">
                                    <div data-aos="fade-left" class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                                        <div class="h-full w-6 flex items-center justify-center">
                                            <div class="h-full top-2 w-1 bg-btngreen pointer-events-none"></div>
                                        </div>
                                        <div
                                            class="md:w-[75px] md:h-[75px] w-[50px] h-[50px] absolute bg-darkgreen md:-ml-[25px] -ml-[15px] top-[30px] md:top-[37.25px] md:-mt-[8px] rounded-full border-2 border-btngreen shadow text-center flex items-center justify-center">
                                            <p class="text-[1rem] md:text-[2.5rem]">5</p>
                                        </div>
                                    </div>
                                    <div data-aos="fade-left"
                                        class="bg-btngreen col-start-4 col-end-12 px-2 md:px-4 py-2 rounded-xl my-4 mr-auto shadow-md w-full">
                                        <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem] mb-1 drop-shadow">
                                            Webinar & Awarding
                                        </h3>
                                        <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                            1 Desember 2022
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="mitra">
            <div class="section bg-medgrn py-24">
                <div class="container mx-auto">
                    <h1 class="text-textgreen text-center text-[3rem] md:text-[5rem]" data-aos="fade-up">
                        Media & Mitra
                    </h1>
                    <div class="flex flex-wrap justify-center">
                        <div class="medpartImg m-8" data-aos="flip-left">
                            <img src="./assets/images/medpart.png"
                                class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt="" />
                        </div>
                        <div class="medpartImg m-8" data-aos="flip-left">
                            <img src="./assets/images/medpart.png"
                                class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt="" />
                        </div>
                        <div class="medpartImg m-8" data-aos="flip-left">
                            <img src="./assets/images/medpart.png"
                                class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt="" />
                        </div>
                        <div class="medpartImg m-8" data-aos="flip-left">
                            <img src="./assets/images/medpart.png"
                                class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt="" />
                        </div>
                        <div class="medpartImg m-8" data-aos="flip-left">
                            <img src="./assets/images/medpart.png"
                                class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt="" />
                        </div>
                        <div class="medpartImg m-8" data-aos="flip-left">
                            <img src="./assets/images/medpart.png"
                                class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt="" />
                        </div>
                        <div class="medpartImg m-8" data-aos="flip-left">
                            <img src="./assets/images/medpart.png"
                                class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt="" />
                        </div>
                        <div class="medpartImg m-8" data-aos="flip-left">
                            <img src="./assets/images/medpart.png"
                                class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sponsor">
            <div class="section bg-[url('./assets/images/banner_bg.png')] py-12 md:py-24">
                <div class="container mx-6 md:mx-auto">
                    <h1 class="text-textgreen text-center text-[3rem] md:text-[5rem]" data-aos="fade-up">
                        Sponsor
                    </h1>
                    <div class="grid grid-cols-2 gap-2 md:w-8/12 mx-auto mb-4">
                        <div class="spons flex" data-aos="fade-left">
                            <img src="./assets/images/sponsplacehold.png"
                                class="md:w-[3.125rem] md:h-[3.125rem] w-[1.5rem] h-[1.5rem] mr-2" alt="" />
                            <h1 class="text-white md:text-[2.5rem] md:text-[1rem]">
                                Open For Sponsor
                            </h1>
                        </div>
                        <div class="spons flex" data-aos="fade-right">
                            <img src="./assets/images/sponsplacehold.png"
                                class="md:w-[3.125rem] md:h-[3.125rem] w-[1.5rem] h-[1.5rem] mr-2" alt="" />
                            <h1 class="text-white md:text-[2.5rem] md:text-[1rem]">
                                Open For Sponsor
                            </h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2 md:w-8/12 mx-auto">
                        <div class="spons flex" data-aos="fade-left">
                            <img src="./assets/images/sponsplacehold.png"
                                class="md:w-[3.125rem] md:h-[3.125rem] w-[1.5rem] h-[1.5rem] mr-2" alt="" />
                            <h1 class="text-white md:text-[2.5rem] md:text-[1rem]">
                                Open For Sponsor
                            </h1>
                        </div>
                        <div class="spons flex" data-aos="fade-right">
                            <img src="./assets/images/sponsplacehold.png"
                                class="md:w-[3.125rem] md:h-[3.125rem] w-[1.5rem] h-[1.5rem] mr-2" alt="" />
                            <h1 class="text-white md:text-[2.5rem] md:text-[1rem]">
                                Open For Sponsor
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer" data-aos="fade-up">
        <div class="bg-medgrn py-24">
            <div class="container md:mx-auto mx-6">
                <div class="grid md:grid-cols-2 gap-2">
                    <div class="">
                        <h1 class="text-[1.2rem] md:text-[2.5rem] text-white">
                            Info Kontak
                        </h1>
                        <hr class="border-2 md:border-4 mb-4 w-3/4" />
                        <div class="mb-2" data-aos="flip-down">
                            <div class="flex flex-row justify-start">
                                <p
                                    class="bg-darkgreen border-btngreen border-4 mr-5 w-[150px] py-2 block text-[1rem] md:text-[1.5rem] text-center mt-2 rounded-full text-white">
                                    Daftar
                                </p>
                                <ol class="self-center">
                                    <li class="text-white text-[1rem] md:text-[1.5rem]">
                                        1. xxxxxxxxxxxx
                                    </li>
                                    <li class="text-white text-[1rem] md:text-[1.5rem]">
                                        2. xxxxxxxxxxxx
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="mb-2" data-aos="flip-down">
                            <div class="flex flex-row justify-start">
                                <p
                                    class="bg-darkgreen border-btngreen border-4 mr-5 py-1  md:max-w-[200px] w-[150px] block text-[1rem] md:text-[1.5rem] text-center mt-2 rounded-full text-white break-normal">
                                    Media &&nbsp;Mitra
                                </p>
                                <ol class="self-center">
                                    <li class="text-white text-[1rem] md:text-[1.5rem]">
                                        1. xxxxxxxxxxxx
                                    </li>
                                    <li class="text-white text-[1rem] md:text-[1.5rem]">
                                        2. xxxxxxxxxxxx
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="mb-2" data-aos="flip-down">
                            <div class="flex flex-row justify-start">
                                <p
                                    class="bg-darkgreen border-btngreen border-4 mr-5 py-2 md:max-w-[200px] w-[150px] block text-[1rem] md:text-[1.5rem] text-center mt-2 rounded-full text-white">
                                    Sponsor
                                </p>
                                <ol class="self-center">
                                    <li class="text-white text-[1rem] md:text-[1.5rem]">
                                        1. xxxxxxxxxxxx
                                    </li>
                                    <li class="text-white text-[1rem] md:text-[1.5rem]">
                                        2. xxxxxxxxxxxx
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="" data-aos="fade-left">
                        <h1 class="text-[1.2rem] md:text-[2.5rem] text-white">
                            Diorganisir Oleh
                        </h1>
                        <hr class="border-2 md:border-4 mb-4 w-3/4" />
                        <div class="mb-6 md:mb-0 flex justify-start">
                            <a href="http://dncc-semarang.dinus.ac.id/" class="flex items-center">
                                <img src="./assets/images/logodncc.png" class="mr-3 md:h-[200px] h-[150px]" />
                            </a>
                            <a href="https://www.dinus.ac.id/" class="flex items-center">
                                <img src="./assets/images/logoudinus.png" class="mr-3 md:h-[200px] h-[150px]" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-6 bg-darkgreen">
            <p class="text-white text-[1rem] md:text-[2rem]">
                Copyright © 2023 Dinacom 2023, DNCC
            </p>
        </div>
    </footer>




    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-darkgreen rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 right-2.5 text-white bg-transparent hover:bg-gray-800 hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-toggle="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <div class="mb-4 border-b border-gray-200">
                        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200"
                            id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="mr-2">
                                <button data-tabs-target="#login" type="button" role="tab" aria-current="page"
                                    class="aria-selected:text-white aria-selected:bg-textgreen aria-selected:hover:bg-btngreen aria-selected:hover:text-white inline-block p-4 text-white rounded-t-lg active hover:bg-btngreen hover:text-white">
                                    Login
                                </button>
                            </li>
                            <li class="mr-2">
                                <button id="daftar-tab" data-tabs-target="#daftar" type="button" role="tab"
                                    class="aria-selected:text-white aria-selected:bg-textgreen aria-selected:hover:bg-btngreen aria-selected:hover:text-white inline-block p-4 text-white rounded-t-lg active hover:bg-btngreen hover:text-white">
                                    Daftar
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div id="myTabContent">
                        <div class="p-4 bg-medgrn rounded-lg" id="login" role="tabpanel"
                            aria-labelledby="login-tab">
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-white">
                                    Sign in to our platform
                                </h3>
                                <form class="space-y-6" action="#">
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-white">Your
                                            email</label>
                                        <input type="email" name="email" id="email"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            placeholder="name@company.com" required />
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-2 text-sm font-medium text-white">Your
                                            password</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            required />
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="remember" type="checkbox" value=""
                                                    class="w-4 h-4 bg-darkgreen rounded border-2 border-white focus:ring-3 focus:ring-blue-300"
                                                    required />
                                            </div>
                                            <label for="remember" class="ml-2 text-sm font-medium text-white">Remember
                                                me</label>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="w-full text-white bg-btngreen hover:bg-textgreen focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                        Login to your account
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="p-4 bg-medgrn rounded-lg" id="daftar" role="tabpanel"
                            aria-labelledby="daftar-tab">
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-white">
                                    Daftar to our platform
                                </h3>
                                <form class="space-y-6" action="#">
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-white">Your
                                            email</label>
                                        <input type="email" name="email" id="email"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            placeholder="name@company.com" required />
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-2 text-sm font-medium text-white">Your
                                            password</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            required />
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="remember" type="checkbox" value=""
                                                    class="w-4 h-4 bg-darkgreen rounded border-2 border-white focus:ring-3 focus:ring-blue-300"
                                                    required />
                                            </div>
                                            <label for="remember" class="ml-2 text-sm font-medium text-white">Remember
                                                me</label>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="w-full text-white bg-btngreen hover:bg-textgreen focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                        Login to your account
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
    <script>
        new TypeIt("#title_dinacom", {
                speed: 50,
                waitUntilVisible: true,
            })
            .type("DiNa", {
                delay: 300
            })
            .move(-1)
            .delete(1)
            .type("n")
            .move(null, {
                to: "END"
            })
            .type("Com")
            .move(-2)
            .delete(1)
            .type("c")
            .move(null, {
                to: "END"
            })

            .pause(300)

            .type(" 2023")

            .pause(500)

            .go();
    </script>
</body>

</html>
