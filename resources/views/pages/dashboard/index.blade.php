@extends('layouts.dashboard')


@push('home-style')
    style="background-image: url({{ asset('assets/dashboard/assets/img/timeline_desktop.png') }}); background-size: 100%;
    background-position: center; background-repeat: no-repeat;"
@endpush
@section('content-sm')
    <div class="lg:hidden text-[2.5rem] md:text-5xl mt-12 font-bold leading-[3.3rem] md:leading-[3.6rem] text-center">
        <!-- <h1><span class="text-green-500">WELCOME</span> TO</h1>
                                <h1>DINACOM'S DASHBOARD!</h1> -->
        <h1 class="animate__animated animate__backInDown text-[#005857]">BERANDA</h1>
        <h1 class="animate__animated animate__backInDown">DINACOM 2023</h1>
    </div>
    <!-- Hero End -->

    <!-- Border Line -->
    <div class="lg:hidden w-[93%] mx-auto my-9 border border-slate-400"></div>

    <!-- Profile -->
    <div class="lg:hidden animate__animated animate__backInRight flex items-center justify-end my-9 mr-9">
        <h1 class="mr-4 font-semibold text-black">Welcome, {{ Auth::user()->name }}!
            <br>
            <span class="text-sm">Status Kontes : <span class="text-yellow-500">
                    {{ Auth::user()->status_contest }}</span></span>
        </h1>
        <a href="#"><img src="{{ asset('assets/dashboard/assets/img/profile.png') }}" alt="profile"
                width="50px"></a>
    </div>
    <!-- Profile End -->

    <!-- Content -->
    <div class="animate__animated animate__zoomIn md:hidden lg:hidden rounded-xl mx-auto mb-5 max-w-[400px] h-[950px] "
        style="background-image: url({{ asset('assets/dashboard/assets/img/timeline_mobile.png') }}); background-size: 100%; background-position: center; background-repeat: no-repeat;">
    </div>
    <!-- Content End -->

    <!-- Content md -->
    <div class="animate__animated animate__zoomIn hidden md:block lg:hidden rounded-xl mx-3 mb-5 max-w-[1000px] min-w h-[390px]"
        style="background-image: url({{ asset('assets/dashboard/assets/img/timeline_desktop.png') }}); background-size: 100%; background-position: center; background-repeat: no-repeat;">
    </div>
@endsection

@push('hidden')
    hidden
@endpush
