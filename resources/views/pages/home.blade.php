@extends('layouts.app')

@section('title')
    Dinacom 2023 | Dinus Application Competition 2023
@endsection

@section('content')
    {{-- landing page --}}
    <section id="header">
        <div class="section bg-[url('./assets/images/banner_bg.webp')] bg-cover md:min-h-[100vh] pt-36 pb-12">
            <div class="grid md:grid-cols-2 gap-4 container mx-auto">
                <div class="mt-10">
                    <h1 class="text-textgreen font-extrabold lg:text-7xl md:text-6xl text-5xl md:mx-6 font-bold font-ubuntu text-center md:text-left mb-2"
                        id="title_dinacom">

                    </h1>

                    <h1
                        class="text-lightgrn lg:text-4xl md:text-3xl text-3xl font-ubuntu text-center md:mx-6 md:text-left mb-2">
                        The Light of Technology for Future Economy
                    </h1>
                    <p
                        class="text-white xl:text-3xl lg:text-2xl md:text-2xl text-xl xl:text-justify lg:text-justify md:text-center text-center mx-6 mb-8 mt-14">
                        Daftarkan dirimu dan tim dalam ajang kompetisi aplikasi
                        bergengsi untuk siswa SMA/SMK. Dan tunjukkanlah kemampuan
                        kerjasama timmu dalam menyelesaikan berbagai topik permasalahan
                        di masyarakat melalui inovasi teknologi aplikasi.
                    </p>
                    @if (!Auth::user())
                        <button type="submit" data-modal-toggle="authentication-modal"
                            class="bg-btngreen mx-auto md:mx-6 my-6 w-1/2 block py-4 pr-4 pl-3 lg:text-4xl md:text-2xl text-2xl text-center mt-2 rounded-[20px] md:border-0 text-white md: hover:text-white hover:bg-[#5ECE9F] hover:text-white md: hover:bg-textgreen">Daftar</button>
                    @endif
                    <div class="w-3/4 mx-auto mb-[100px] md:mx-6 flex justify-center md:justify-start">
                        <a href="https://www.instagram.com/dinacom_official" target="blank"
                            class="text-white text-[2rem] md:text-[4rem] mr-2">
                            <i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCbGj3OU4Qq8KOgaY9zuyZsA" target="blank"
                            class="text-white text-[2rem] md:text-[4rem] mr-2">
                            <i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="order-first md:order-last flex justify-center items-center">
                    <img src="{{ asset('assets/images/mascot.webp') }}" class="w-[43rem]"
                        style="animation: float 6s ease-in-out infinite;" alt="Maskot Dinacom 2023" />
                </div>
            </div>
        </div>
    </section>
    <section data-aos="fade-up">
        <img src="{{ asset('assets/images/Aqua.webp') }}"
            class="w-full lg:h-[900px] md:h-[800px] h-[500px] object-cover max-w-full" alt="" />
    </section>
    <section id="about">
        <div class="section bg-[url('./assets/images/about_bg.webp')] bg-cover pt-12 md:pt-36 pb-10">
            <div class="container mx-auto">
                <div class="mb-[10rem]">
                    <h1 class="text-textgreen lg:text-7xl md:text-5xl text-4xl md:mx-6 font-bold font-ubuntu text-center"
                        data-aos="fade-up">
                        Tentang
                    </h1>
                    <h1 class="text-lightgrn lg:text-6xl md:text-4xl text-3xl font-ubuntu text-center md:mx-6 mb-2"
                        data-aos="fade-down">
                        DINACOM
                    </h1>

                    <p class="text-white xl:text-3xl lg:text-2xl md:text-2xl text-xl  text-center mx-6 mb-8 mt-8"
                        data-aos="fade-right">
                        Dinus Application Competition (DINACOM) adalah sebuah kompetisi
                        di bidang teknologi informasi tingkat nasional yang
                        diselenggarakan oleh Dian Nuswantoro Computer Club (DNCC).
                        Produk yang diperlombakan dalam DINACOM merupakan aplikasi
                        berbasis website, aplikasi mobile, dan aplikasi desktop.
                    </p>
                    <p class="text-white xl:text-3xl lg:text-2xl md:text-2xl text-xl  text-center mx-6 mb-8"
                        data-aos="fade-left">
                        Kompetisi ini ditujukan untuk pelajar SMA/SMK. Tujuan
                        diselenggarakannya DINACOM adalah untuk menguji kemampuan dan
                        kreativitas pelajar dalam memecahkan permasalah yang ada di
                        masyarakat melalui inovasi teknologi aplikasi.
                    </p>
                    <a href="{{ asset('docs/GuideBook Dinacom 2023.pdf') }}" download="GuideBook Dinacom 2023"
                        data-aos="fade-down"
                        class="bg-btngreen mx-auto  my-6 w-3/4 block py-4 pr-4 pl-3 lg:text-4xl md:text-2xl text-2xl text-center mt-2 rounded-[20px] md:border-0 text-white md: hover:text-white hover:bg-[#5ECE9F] hover:text-white md: hover:bg-textgreen">Guidebook</a>
                </div>
                <div class="mx-auto md:mb-[10rem] mb-[5rem]">
                    <h1 class="text-lightgrn lg:text-6xl md:text-4xl text-3xl mb-10 font-ubuntu text-center md:mx-6 mb-2 "
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
                            <p class="text-left text-2xl md:text-3xl text-white rounded-lg mt-2">
                                <span><i class="fas fa-circle text-lg md:text-xl text-textgreen"></i></span>
                                Sertifikat
                            </p>
                            <p class="text-left text-2xl md:text-3xl text-white rounded-lg">
                                <span><i class="fas fa-circle text-lg md:text-xl text-textgreen"></i></span>
                                Beasiswa Udinus
                            </p>
                        </div>
                        <div class="mx-auto lg:order-1 order-2 border-4 border-textgreen rounded-lg p-8  duration-1000   transition hover:scale-105 hover:bg-medgrn/75"
                            data-aos="flip-left">
                            <h1 class="text-center text-4xl md:text-5xl text-textgreen rounded-lg">
                                Juara 2
                            </h1>
                            <hr class="border-2 md:border-4 border-textgreen mx-auto mb-2" />
                            <h1 class="text-center text-4xl md:text-6xl text-white rounded-lg">
                                1.500.000
                            </h1>
                            <p class="text-left text-2xl md:text-3xl text-white rounded-lg mt-2">
                                <span><i class="fas fa-circle text-lg md:text-xl text-textgreen"></i></span>
                                Sertifikat
                            </p>
                            <p class="text-left text-2xl md:text-3xl text-white rounded-lg">
                                <span><i class="fas fa-circle text-lg md:text-xl text-textgreen"></i></span>
                                Beasiswa Udinus
                            </p>
                        </div>
                        <div class="mx-auto lg:order-3 order-3 border-4 border-textgreen rounded-lg p-8  duration-1000   transition hover:scale-105 hover:bg-medgrn/75"
                            data-aos="flip-left">
                            <h1 class="text-center text-4xl md:text-5xl text-textgreen rounded-lg">
                                Juara 3
                            </h1>
                            <hr class="border-2 md:border-4 border-textgreen mx-auto mb-2" />
                            <h1 class="text-center text-4xl md:text-6xl text-white rounded-lg">
                                1.000.000
                            </h1>
                            <p class="text-left text-2xl md:text-3xl text-white rounded-lg mt-2">
                                <span><i class="fas fa-circle text-lg md:text-xl text-textgreen"></i></span>
                                Sertifikat
                            </p>
                            <p class="text-left text-2xl md:text-3xl text-white rounded-lg">
                                <span><i class="fas fa-circle text-lg md:text-xl text-textgreen"></i></span>
                                Beasiswa Udinus
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mx-auto mb-[10rem]">
                    <h1 class="text-lightgrn lg:text-6xl md:text-4xl text-3xl mb-10 font-ubuntu text-center"
                        data-aos="fade-up">
                        Timeline
                    </h1>

                    <div class="container">
                        <div class="flex flex-col md:grid grid-cols-12 text-gray-50 mx-8">
                            <div class="flex md:contents">
                                <div data-aos="fade-right" class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
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
                                    <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem]  drop-shadow">
                                        Pembukaan Pendaftaran

                                    </h3>
                                    <h4 class="text-slate-900 font-ubuntu text-[1.2rem] md:text-[1.4rem] mb-1"> 50K -/TIM
                                    </h4>
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
                                        31 Desember 2022
                                    </p>
                                </div>
                            </div>
                            <div class="flex md:contents">
                                <div data-aos="fade-right" class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
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
                                        Batas Akhir Pengumpulan Karya
                                    </h3>
                                    <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                        10 Januari 2023
                                    </p>
                                </div>
                            </div>
                            <div class="flex md:contents">
                                <div data-aos="fade-right" class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                                    <div class="h-full w-6 flex items-center justify-center">
                                        <div class="h-full top-2 w-1 bg-btngreen pointer-events-none"></div>
                                    </div>
                                    <div
                                        class="md:w-[75px] md:h-[75px] w-[50px] h-[50px] absolute bg-darkgreen md:-ml-[25px] -ml-[15px] top-[30px] md:top-[37.25px] md:-mt-[8px] rounded-full border-2 border-btngreen shadow text-center flex items-center justify-center">
                                        <p class="text-[1rem] md:text-[2.5rem]">4</p>
                                    </div>
                                </div>
                                <div data-aos="fade-right"
                                    class="bg-btngreen col-start-4 col-end-12 px-2 md:px-4 py-2 rounded-xl my-4 mr-auto shadow-md w-full">
                                    <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem] mb-1 drop-shadow">
                                        Seleksi Awal
                                    </h3>
                                    <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                        11 Januari 2023
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
                                        Pengumuman Semi Final (8 Besar)
                                    </h3>
                                    <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                        13 Januari 2023
                                    </p>
                                </div>
                            </div>
                            <div class="flex md:contents">
                                <div data-aos="fade-right" class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                                    <div class="h-full w-6 flex items-center justify-center">
                                        <div class="h-full top-2 w-1 bg-btngreen pointer-events-none"></div>
                                    </div>
                                    <div
                                        class="md:w-[75px] md:h-[75px] w-[50px] h-[50px] absolute bg-darkgreen md:-ml-[25px] -ml-[15px] top-[30px] md:top-[37.25px] md:-mt-[8px] rounded-full border-2 border-btngreen shadow text-center flex items-center justify-center">
                                        <p class="text-[1rem] md:text-[2.5rem]">6</p>
                                    </div>
                                </div>
                                <div data-aos="fade-right"
                                    class="bg-btngreen col-start-4 col-end-12 px-2 md:px-4 py-2 rounded-xl my-4 mr-auto shadow-md w-full">
                                    <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem] mb-1 drop-shadow">
                                        Final (Offline)
                                    </h3>
                                    <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">
                                        18 Januari 2023
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="flex md:contents">
                                <div data-aos="fade-left" class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                                    <div class="h-full w-6 flex items-center justify-center">
                                        <div class="h-full top-2 w-1 bg-btngreen pointer-events-none"></div>
                                    </div>
                                    <div
                                        class="md:w-[75px] md:h-[75px] w-[50px] h-[50px] absolute bg-darkgreen md:-ml-[25px] -ml-[15px] top-[30px] md:top-[37.25px] md:-mt-[8px] rounded-full border-2 border-btngreen shadow text-center flex items-center justify-center">
                                        <p class="text-[1rem] md:text-[2.5rem]">7</p>
                                    </div>
                                </div>
                                <div data-aos="fade-left"
                                    class="bg-btngreen col-start-4 col-end-12 px-2 md:px-4 py-2 rounded-xl my-4 mr-auto shadow-md w-full">
                                    <h3 class="font-ubuntu text-[1.4rem] md:text-[2rem] mb-1 drop-shadow">
                                        Webinar & Awarding
                                    </h3>
                                    <p class="leading-tight text-[1.2rem] md:text-[1.25rem] text-justify">

                                    </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mitra">
        <div class="section bg-medgrn py-24">
            <div class="container mx-auto">
                <h1 class="text-textgreen text-center lg:text-6xl md:text-4xl text-3xl" data-aos="fade-up">
                    Media & Partner
                </h1>
                <div class="flex flex-wrap justify-center">
                    <div class="medpartImg m-8" data-aos="flip-left">
                        <img src="{{ asset('assets/images/MedPart/Programmer_males.png') }}"
                            class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt=""
                            title="Programmer Males;" />
                    </div>
                    <div class="medpartImg m-8" data-aos="flip-left">
                        <img src="{{ asset('assets/images/MedPart/INFOLOMBA.png') }}"
                            class="md:w-[12.5rem] md:h-[12.5rem] w-[5rem] h-[5rem]" alt="" title="Info Lomba" />
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="sponsor">
        <div class="section bg-[url('./assets/images/banner_bg.png')] py-12 md:py-24">
            <div class="container mx-6 md:mx-auto">
                <h1 class="text-textgreen text-center lg:text-6xl md:text-4xl text-3xl mb-10" data-aos="fade-up">
                    Sponsor
                </h1>
                <div class="grid grid-cols-2 gap-2 md:w-8/12 mx-auto mb-4 place-items-center">
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
                <div class="grid grid-cols-2 gap-2 md:w-8/12 mx-auto place-items-center">
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
@endsection
