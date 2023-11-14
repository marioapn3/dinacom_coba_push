@extends('layouts.dashboard')

@section('content-lg')

    <div class=" rounded bg-white p-8">

        @if ($user->name_team != null)
            <h1 class="text-center font-extrabold text-2xl lg:text-4xl mb-4">Masukkan Data Anda</h1>
            <h1 class="w-full  font-semibold border-separate border-b-2 text-sm lg:text-xl  mb-2">Batas Akhir Pendaftaran
            </h1>

            <h1 class="w-full bg-gray-100 text-sm lg:text-xl text-green-600 font-bold mb-8">{{ $tgl }}</h1>

            <h1 class="w-full font-semibold  border-separate border-b-2 text-md lg:text-xl mb-2">Data Team Anda</h1>
            <div class="md:grid md:grid-cols-4 gap-5 mb-4">


                <div class="flex col-span-2">
                    <h1 class="w-full  text-sm lg:text-xl mb-2">Status</h1>
                    <h1 class="w-full  text-sm lg:text-xl text-green-600 font-bold mb-8">Sudah Upload</h1>
                </div>
                <div class="flex col-span-1">
                    <h1 class="w-full  text-sm lg:text-xl mb-2">Team Name</h1>
                    <h1 class="w-full  text-sm lg:text-xl text-blue-600 font-bold mb-8">{{ $user->name_team }}</h1>
                </div>
                <div class="flex col-span-1">
                    <a href="{{ route('peserta.detail', ['id' => Auth::user()->id]) }}"
                        class="bg-[#005857] w-full text-center place-self-center text-white text-sm lg:text-lg font-bold rounded-lg px-16 py-3 lg:py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Detail</a>

                </div>
            </div>

            <h1 class="w-full font-semibold  border-separate border-b-2 text-md lg:text-xl mb-2">Status Pembayaran Anda</h1>
            <div class="md:grid md:grid-cols-4 gap-5 mb-4">

                <div class="flex col-span-3">
                    <h1 class="w-full text-sm lg:text-xl mb-2">Status</h1>
                    @if ($bukti)
                        @if ($bukti->status == 'waiting')
                            <div class="w-full text-center">

                                <h1 class="w-full text-sm lg:text-xl text-yellow-600 font-bold mb-8">Waiting For
                                    Confirmation</h1>
                                <a href="https://api.whatsapp.com/send?phone=6285728457496&text=Halo%20kak%20kami%20dari%20team%20*{{ $user->name_team }}*%20ingin%20konfirmasi%20pembayaran%20pendaftaran%20lomba%20Dinacom%202023"
                                    class="font-semibold md:block hidden">Hubungi Panitia
                                    (Affan)</a>
                            </div>
                        @endif
                        @if ($bukti->status == 'confirmed')
                            <h1 class="w-full  text-sm lg:text-xl text-green-600 font-bold mb-8">Confirmed</h1>
                        @endif
                    @else
                        <h1 class="w-full  text-sm lg:text-xl text-red-600 font-bold mb-8">Belum Upload</h1>
                    @endif
                </div>
                @if ($bukti && $bukti->status == 'waiting')
                    <div class="flex">

                        <a href="https://api.whatsapp.com/send?phone=6285728457496&text=Halo%20kak%20kami%20dari%20team%20*{{ $user->name_team }}*%20ingin%20konfirmasi%20pembayaran%20pendaftaran%20lomba%20Dinacom%202023"
                            class="font-semibold md:hidden my-8 text-center w-full">Hubungi Panitia
                            (Affan)</a>
                    </div>
                @endif
                <div class="flex">
                    @if (!$bukti)
                        @if ($user->name_team)
                            <a href="{{ route('peserta.editpay', ['id' => Auth::user()->id]) }}"
                                class="bg-[#005857] w-full text-center place-self-center text-white text-sm lg:text-lg font-bold rounded-lg px-16  py-3 lg:py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Lengkapi</a>
                        @else
                            <button href="" onclick="alert(' Mohon Lengkapi data Anda terlebih Dahulu ')"
                                class="bg-[#005857] w-full text-center place-self-center text-white text-sm lg:text-xl font-bold rounded-lg px-16 py-3 lg:py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Edit
                                Bukti Pembayaran</button>
                        @endif
                    @else
                        @if ($bukti->status == 'waiting')
                            <a href="{{ route('peserta.editpay', ['id' => Auth::user()->id]) }}"
                                class="bg-[#005857] w-full text-center place-self-center text-white text-lg font-bold rounded-lg px-16 py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Edit
                                Bukti Pembayaran</a>
                        @endif
                    @endif

                </div>
            @else
                @if (!$deadline)

                    <div class="p-12 text-center bg-gray-100 text-gray-700">
                        <h2 class="font-semibold text-red-400 text-4xl mb-4">Mohon Maaf, Pendaftaran Dinacom 2023 Sudah Di
                            Tutup</h2>
                        <h4 class="font-semibold text-xl mb-6">Sampai Jumpa Di Dinacom Tahun Depan</h4>

                    </div>
                @else
                    <h1 class="text-center font-extrabold text-4xl mb-4">Masukkan Data Anda</h1>
                    <h1 class="w-full  font-semibold border-separate border-b-2 text-xl mb-2">Batas Akhir Pendaftaran</h1>

                    <h1 class="w-full bg-gray-100 text-xl text-green-600 font-bold mb-8">{{ $tgl }}</h1>

                    <h1 class="w-full font-semibold  border-separate border-b-2 text-xl mb-2">Data Team Anda</h1>
                    <div class="grid md:grid-cols-4 gap-5 mb-4">

                        <div class="flex col-span-3">
                            <h1 class="w-full  text-xl mb-2">Status</h1>
                            <h1 class="w-full  text-xl text-red-600 font-bold mb-8">Belum Upload </h1>
                        </div>
                        <div class="flex">
                            <a href="{{ route('peserta.edit', ['id' => Auth::user()->id]) }}"
                                class="bg-[#005857] w-full text-center place-self-center text-white text-lg font-bold rounded-lg px-16 py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Lengkapi</a>
                        </div>

                    </div>

                    <h1 class="w-full font-semibold  border-separate border-b-2 text-xl mb-2">Status Pembayaran</h1>
                    <div class="grid md:grid-cols-4 gap-5 mb-4">

                        <div class="flex col-span-3">
                            <h1 class="w-full  text-xl mb-2">Status</h1>
                            @if ($bukti)
                                @if ($bukti->status == 'waiting')
                                    <div class="w-full text-center">

                                        <h1 class="w-full  text-xl text-yellow-600 font-bold mb-8">Waiting For Confirmation
                                        </h1>
                                        <a href="https://api.whatsapp.com/send?phone=6285728457496&text=Halo%20kak%20kami%20dari%20team%20*{{ $user->name_team }}*%20ingin%20konfirmasi%20pembayaran%20pendaftaran%20lomba%20Dinacom%202023"
                                            class="font-semibold">Hubungi Panitia
                                            (Affan)</a>
                                    </div>
                                    <a href="{{ route('peserta.editpay', ['id' => Auth::user()->id]) }}"
                                        class="bg-[#005857] w-full text-center place-self-center text-white text-lg font-bold rounded-lg px-16 py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Lengkapi</a>
                                @endif
                                @if ($bukti->status == 'confirmed')
                                    <h1 class="w-full  text-xl text-green-600 font-bold mb-8">Confirmed</h1>
                                @endif
                            @else
                                <h1 class="w-full  text-xl text-red-600 font-bold mb-8">Belum Upload</h1>
                            @endif
                        </div>
                        <div class="flex">
                            @if (!$bukti)
                                @if ($user->name_team)
                                    <a href="{{ route('peserta.editpay', ['id' => Auth::user()->id]) }}"
                                        class="bg-[#005857] w-full text-center place-self-center text-white text-lg font-bold rounded-lg px-16 py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Lengkapi</a>
                                @else
                                    <button href="" onclick="alert(' Mohon Lengkapi data Anda terlebih Dahulu ')"
                                        class="bg-[#005857] w-full text-center place-self-center text-white text-lg font-bold rounded-lg px-16 py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Edit
                                        Bukti Pembayaran</button>
                                @endif
                            @endif
                        </div>
                @endif
        @endif
    </div>
@endsection
