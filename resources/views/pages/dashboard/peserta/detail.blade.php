@extends('layouts.dashboard')

@section('content-lg')
    <h1 class="w-fit px-4 py-3 rounded-t-lg bg-slate-300 text-black text-lg lg:text-2xl font-bold">Berkas Anda</h1>
    <div class=" md:grid md:grid-cols-2 grid-rows-2 gap-5 bg-slate-300 pt-2 px-4 pb-4 rounded-r-lg rounded-bl-lg">
        <!-- Nama Tim -->
        <div class="flex items-center mb-5 col-span-2 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">
            <img src="{{ asset('assets/dashboard/assets/logo/team.svg') }}" width="30px" alt="" class="mr-3">
            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold text-sm lg:text-lg group group-focus:text-green-400">
                    Nama Tim
                </p>
                <p class="block text-sm lg:text-lg  w-full px-3 font-bold rounded-md bg-white">{{ $user->name_team }}</p>
            </div>
        </div>
        <!-- Nama Tim End -->

        <!-- Ketua Tim -->
        <div class="flex items-center mb-5  border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">
            <img src="{{ asset('assets/dashboard/assets/logo/team.svg') }}" width="30px" alt="" class="mr-3">
            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold text-sm lg:text-lg group group-focus:text-green-400">
                    Nama Ketua
                </p>
                <p class="block text-sm lg:text-lg  w-full px-3 font-bold rounded-md bg-white">{{ $user->name }}</p>
            </div>
        </div>
        <!-- Ketua Tim End-->

        <!-- KI Ketua -->
        <div class="flex items-center mb-5  border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">
            <img src="{{ asset('assets/dashboard/assets/logo/phone.svg') }}" width="30px" alt="" class="mr-3">
            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 text-sm lg:text-lg font-semibold  group group-focus:text-green-400">
                    Telepon Ketua
                </p>
                <p class="block text-sm lg:text-lg  w-full px-3 font-bold rounded-md bg-white">{{ $user->phone_lead }}</p>
            </div>
        </div>
        <!-- KI Ketua End-->
        <div class="flex items-center mb-5  border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">
            <img src="{{ asset('assets/dashboard/assets/logo/school.svg') }}" width="30px" alt="" class="mr-3">
            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold text-sm lg:text-lg group group-focus:text-green-400">
                    Nama Sekolah Asal
                </p>
                <p class="block text-sm lg:text-lg  w-full px-3 font-bold rounded-md bg-white">{{ $user->name_school }}</p>
            </div>
        </div>
        <div class="flex items-center mb-5  border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">
            <img src="{{ asset('assets/dashboard/assets/logo/team.svg') }}" width="30px" alt="" class="mr-3">
            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold text-sm lg:text-lg group group-focus:text-green-400">
                    Nama Pembimbing
                </p>
                <p class="block text-sm lg:text-lg w-full px-3 font-bold rounded-md bg-white">{{ $user->tutor }}</p>
            </div>
        </div>
        <div
            class="flex items-center mb-5  col-span-2 w-full md:w-1/5 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">
            {{-- <img src="{{asset('assets/dashboard/assets/logo/team.svg')}}" width="30px" alt="" class="mr-3"> --}}
            <div class="flex flex-col w-full group">
                <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                    Kartu Identitas
                </p>
                @if ($user->student_card)
                    <img src="{{ asset('storage/images/studentCard/' . $user->student_card) }}" alt=""
                        class="hover:scale-[2.5] relative hover:left-80 left-0 ease-in-out duration-300 rounded mx-auto">
                @else
                    <img src="{{ asset('assets/images/noimage.png') }}" alt=""
                        class="hover:scale-[2.5] relative hover:left-80 left-0 ease-in-out duration-300 rounded mx-auto">
                @endif
                {{-- <p class="block text-lg  w-full px-3 font-bold rounded-md bg-white">Affan</p>    --}}
            </div>
        </div>
        <div class="flex items-center mb-5 col-span-2 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">

            <div class="flex flex-col w-full group">
                <p
                    class="w-full text-slate-700 text-lg lg:text-2xl text-center font-semibold  group group-focus:text-green-400">
                    Anggota Team
                </p>

            </div>
        </div>
        @forelse ($member as $item)
            <div>
                <div class="flex items-center mb-5 col-span-1 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">
                    <img src="{{ asset('assets/dashboard/assets/logo/team.svg') }}" width="30px" alt=""
                        class="mr-3">
                    <div class="flex flex-col w-full group">
                        <p class="w-fit text-slate-700 text-sm lg:text-lg font-semibold  group group-focus:text-green-400">
                            Nama Anggota Tim {{ $loop->iteration }}
                        </p>
                        <p class="block text-sm lg:text-lg  w-full px-3 font-bold rounded-md bg-white">
                            {{ $item->name_member }}</p>
                    </div>
                </div>
                <div class="flex items-center mb-5 col-span-1 border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">
                    <img src="{{ asset('assets/dashboard/assets/logo/team.svg') }}" width="30px" alt=""
                        class="mr-3">
                    <div class="flex flex-col w-full group">
                        <p class="w-fit text-sm lg:text-lg text-slate-700 font-semibold group group-focus:text-green-400">
                            Telepon Anggota Tim {{ $loop->iteration }}
                        </p>
                        <p class="block text-sm lg:text-lg  w-full px-3 font-bold rounded-md bg-white"> {{ $item->phone }}
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center mb-5  col-span-2 w-full border-b-8 rounded-md border-slate-500 bg-slate-400 p-2">
                    {{-- <img src="{{asset('assets/dashboard/assets/logo/team.svg')}}" width="30px" alt="" class="mr-3"> --}}
                    <div class="flex flex-col w-full max-h-[300px] group">
                        <p class="w-fit text-slate-700 font-semibold  group group-focus:text-green-400">
                            Kartu Identitas Anggota Tim {{ $loop->iteration }}
                        </p>
                        <img src="{{ asset('storage/images/studentCard/' . $item->student_card) }}" alt=""
                            class="hover:scale-[2.5] object-cover hover:object-contain w-[400px] h-[200px] relative  left-0 ease-in-out duration-300 rounded mx-auto">
                        {{-- <p class="block text-lg  w-full px-3 font-bold rounded-md bg-white">Affan</p>    --}}
                    </div>
                </div>
            </div>

        @empty
        @endforelse


        <!-- Kategori -->

        <!-- Kategori End -->

        <!-- Submit Button -->

        <div class="w-full ">

            <a href="{{ $tgl ? route('peserta.item', ['id' => Auth::user()->id]) : '' }}"
                @if (!$tgl) onclick="alert('Masa Upload data sudah berakhir')" @endif
                class="bg-[#005857] text-center place-self-center text-white text-sm lg:text-lg font-bold rounded-lg px-10 lg:px-16 py-3 lg:py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Edit
                Data</a>

        </div>
        <!-- Submit Button End -->
    </div>
@endsection
