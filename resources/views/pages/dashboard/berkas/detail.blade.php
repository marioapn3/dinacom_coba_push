@extends('layouts.dashboard')

@section('content-lg')
    <h1 class="w-fit px-4 py-3 rounded-t-lg bg-slate-300 text-black text-2xl font-bold">Berkas Anda</h1>
    <div class=" md:grid md:grid-cols-2 grid-rows-2 gap-5 bg-slate-300 pt-2 px-4 pb-4 rounded-r-lg rounded-bl-lg">
        <!-- Nama Tim -->
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    Nama Project
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->name_project }}</p>
            </div>
        </div>
        <!-- Nama Tim End -->
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    Permasalahan Awal
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->problem }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    Solusi
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden ">{{ $berkas->solution }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    Sasaran Pengguna
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->user_goals }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">

                    Keunikan Produk dibanding Produk yang sejenis

                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->product_uniqueness }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    Potensi Pasar dari aplikasi
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->market_potential }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">

                    Fungsi dan Fitur Aplikasi

                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->feature_and_function }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    Kualitas Produk dan Metode Pengembangan Aplikasi
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->quality_and_method_dev }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    Biaya Pengeluaran
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->expenses }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    Biaya Pemasukan
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->entrance_fee }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    URL Proposal
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->url_proposal }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    URL Project
                </p>
                <p class="block text-lg  w-full px-3  rounded-md bg-white text-ellipsis overflow-hidden">{{ $berkas->url_project }}</p>
            </div>
        </div>

        <!-- Ketua Tim -->

        <!-- Kategori -->

        <!-- Kategori End -->

        <!-- Submit Button -->
        @if ($deadline)
            <a href="{{ route('berkas.edit', ['id' => Auth::user()->id]) }}"
                class="bg-[#005857] w-full mt-4 text-center col-span-2 place-self-center  text-white text-lg font-bold rounded-lg px-2 py-3 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Edit
                Data</a>
        @else
            <button href="" onclick="alert(' Masa Upload data sudah berakhir ')"
                class="bg-[#005857] w-full mt-4 text-center col-span-2 place-self-center text-white text-lg font-bold rounded-lg px-2 py-3 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Edit
                Data</button>
        @endif
        <!-- Submit Button End -->
    </div>
@endsection
