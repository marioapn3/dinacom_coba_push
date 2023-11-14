@extends('layouts.dashboard')

@section('content-lg')
    <div class=" bg-white p-8 h-full">
        @if ($user->name_team != null)
            @if ($deadline)
                @if (!$bukti)
                    <div class="p-12 text-center bg-gray-100 h-full flex items-center justify-center text-gray-700">
                        <h2 class="font-semibold text-black-400 text-4xl mb-4">Mohon Selesaikan Pembayaran Anda / Menunggu
                            Konfirmasi</h2>
                    </div>
                @else
                    <h1 class="text-center font-extrabold text-xl md:text-2xl lg:text-4xl mb-4">Masukkan Data Project Anda
                    </h1>
                    @if (!$berkas)
                        <div class="h-full flex items-center w-full ">

                            <div class="w-full">
                                <div class="flex col-span-3">
                                    <h1 class="w-full  text-xl mb-2">Status</h1>
                                    <h1 class="w-full  text-xl text-red-600 font-bold mb-8">Belum Upload </h1>
                                </div>
                                <div class="flex">
                                    <a href="{{ route('berkas.create', ['id' => Auth::user()->id]) }}"
                                        class="bg-[#005857] w-full text-center place-self-center text-white text-lg font-bold rounded-lg px-16 py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Lengkapi</a>

                                </div>
                            </div>
                        </div>
                    @else
                        <h1 class="w-full  font-semibold border-separate border-b-2 text-large md:text-xl mb-2">Batas Akhir
                            Pengumpulan
                        </h1>
                        <h1 class="w-full bg-gray-100 text-large md:text-xl text-green-600 font-bold mb-8">
                            {{ $tglberkas }}</h1>
                        <div>
                            <h1 class="w-full font-semibold border-separate border-b-2 text-large md:text-xl mb-2">Nama
                                Project</h1>
                            <h1 class="w-full text-large md:text-xl font-bold mb-8">{{ $berkas->name_project }}</h1>
                        </div>
                        <div class="md:grid grid-cols-2 gap-2 flex flex-col">
                            <div class="flex flex-col flex-wrap">
                                <h1 class="w-full  font-semibold border-separate border-b-2 text-large md:text-xl mb-2">URL
                                    Project</h1>
                                <a href="{{ $berkas->url_project }}"
                                    class="text-blue-500 w-full text-large md:text-xl md:text-xl  text-ellipsis overflow-hidden font-normal hover:text-blue-300 mb-8">{{ $berkas->url_project }}</a>
                            </div>
                            <div>
                                <h1 class="w-full  font-semibold border-separate border-b-2 text-large md:text-xl mb-2">URL
                                    Proposal</h1>
                                <a href="{{ $berkas->url_proposal }}"
                                    class="text-blue-500 w-full text-large md:text-xl  font-normal  text-ellipsis overflow-hidden  hover:text-blue-300 mb-8">{{ $berkas->url_proposal }}</a>
                            </div>
                            <a href="{{ route('berkas.show', ['id' => Auth::user()->id]) }}"
                                class="bg-[#005857] w-full h-fit mt-6 text-center place-self-center text-white text-large md:text-xl font-bold rounded-lg px-2 py-3 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Lihat
                                Data</a>
                        </div>
                    @endif
                @endif
            @else
                <div class="p-12 text-center bg-gray-100 h-full flex items-center justify-center text-gray-700">
                    <h2 class="font-semibold text-red-400 text-4xl mb-4">Mohon Maaf, Masa Upload Berkas Sudah Di
                        Tutup</h2>


                </div>
            @endif
        @else
            @if (!$deadlineDaftar)
                <div class="p-12 text-center bg-gray-100 h-full flex items-center justify-center text-gray-700">
                    <h2 class="font-semibold text-red-400 text-4xl mb-4">Mohon Maaf, Pendaftaran Dinacom 2023 Sudah Di
                        Tutup</h2>
                    <h4 class="font-semibold text-xl mb-6">Sampai Jumpa Di Dinacom Tahun Depan</h4>

                </div>
            @else
                <div class="p-12 text-center bg-gray-100 h-full flex items-center justify-center text-gray-700">
                    <h2 class="font-semibold text-black-400 text-4xl mb-4">Mohon Lengkapi Data Team Anda</h2>


                </div>
            @endIf
        @endif

    </div>
@endsection
