@extends('layouts.dashboard')

@section('content-lg')
    <!-- Form Berkas -->
    <form action="{{ route('peserta.save', ['id' => Auth::user()->id]) }}" method="post"enctype="multipart/form-data">
        @csrf
        @method('put')
        <h1 class="w-fit px-4 py-3 rounded-t-lg bg-slate-300 text-black text:xl lg:text-2xl font-bold">Kelengkapan
            Berkas</h1>
        <div
            class="form-grid md:grid md:grid-cols-2 grid-rows-5 gap-5 bg-slate-300 pt-2 px-4 pb-4 rounded-r-lg rounded-bl-lg">
            <!-- Nama Tim -->
            <div class="flex items-center mb-5 col-span-2">
                <img src="{{ asset('/assets/dashboard/assets/logo/team.svg') }}" width="30px" alt="" class="mr-3">
                <div class="flex flex-col w-full group">
                    <label for="ntim" class="w-fit">
                        <span
                            class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Nama
                            Tim</span>
                    </label>
                    <input type="text" name="nameTeam" value="{{ old('nameTeam') ?? $user->name_team }}" id="ntim"
                        placeholder="Nama Tim"
                        class="block bg-slate-100 w-full text-sm md:text-lg mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-32">
                    @error('nameTeam')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span> </p>
                    @enderror
                </div>
            </div>
            <!-- Nama Tim End -->

            <!-- Ketua Tim -->
            <div class="flex items-center mb-5">
                <img src="{{ asset('/assets/dashboard/assets/logo/leader.svg') }}" width="30px" alt=""
                    class="mr-3">
                <div class="flex flex-col w-full">
                    <label for="ktim" class="w-fit">
                        <span
                            class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Nama
                            Ketua Tim</span>
                    </label>
                    <input type="text" name="name" value="{{ old('name') ?? Auth::user()->name }}" id="ktim"
                        placeholder="Nama Ketua Tim"
                        class="block bg-slate-100 w-full text-sm md:text-lg mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500  focus:shadow-lg focus:placeholder:-translate-x-36 ">
                </div>
            </div>
            <!-- Ketua Tim End-->

            <!-- KI Ketua -->
            <div class="flex items-center mb-5">
                <img src="{{ asset('/assets/dashboard/assets/logo/identity_member.svg') }}" width="30px" alt=""
                    class="mr-3">
                <div class="flex flex-col w-full">
                    <label for="kiketua" class="w-fit mb-1">
                        <span
                            class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Kartu
                            Identitas Ketua (KTM, Kartu Pelajar)</span>
                    </label>
                    <input id="kianggota1" type="file" name="leadCard" value="{{ old('leadCard') }}"
                        class="block w-full text-md text-sm md:text-lg font-medium text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                    @error('leadCard')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span> </p>
                    @enderror
                </div>
            </div>
            <!-- KI Ketua End-->

            <!-- Nama Sekolah-->
            <div class="flex items-center mb-5">
                <img src="{{ asset('/assets/dashboard/assets/logo/school.svg') }}" width="30px" alt=""
                    class="mr-3">
                <div class="flex flex-col w-full">
                    <label for="sklh" class="w-fit">
                        <span
                            class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Asal
                            Sekolah</span>
                    </label>
                    <input type="text" name="nameSchool" value="{{ old('nameSchool') ?? $user->name_school }}"
                        id="sklh" placeholder="Asal Sekolah"
                        class="block bg-slate-100 w-full text-sm md:text-lg mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500  focus:shadow-lg focus:placeholder:-translate-x-36 ">

                    @error('nameSchool')
                        <p class="text-sm md:text-lg mt-2 text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span> </p>
                    @enderror
                </div>
            </div>

            <!-- Nama Sekolah End -->

            <!-- Nama Mentor-->
            <div class="flex items-center mb-5">
                <img src="{{ asset('/assets/dashboard/assets/logo/mentor.svg') }}" width="30px" alt=""
                    class="mr-3">
                <div class="flex flex-col w-full">
                    <label for="sklh" class="w-fit">
                        <span
                            class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Pembimbing
                            Team</span>
                    </label>
                    <input type="text" name="teamMentor" value="{{ old('teamMentor') ?? $user->tutor }}" id="sklh"
                        placeholder="Pembimbing Team"
                        class="block bg-slate-100 w-full text-sm md:text-lg mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500  focus:shadow-lg focus:placeholder:-translate-x-36 ">
                    @error('teamMentor')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span> </p>
                    @enderror
                </div>
            </div>

            <!-- Nama Mentor End -->
            <div class="flex items-center justify-between mb-5 gap-2 col-span-2">
                <div class="md:grid md:grid-cols-3 gap-4 w-full">
                    <!-- Nama Anggota 1 -->
                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/member.svg') }}" width="30px" alt=""
                            class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for=atim1" class="w-fit">
                                <span
                                    class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Nama
                                    Anggota 1</span>
                            </label>
                            <input type="text" name="nameMember1"
                                value="{{ old('nameMember1') ?? ($memberSatu->name_member ?? '') }}" id=atim1"
                                placeholder="Nama Anggota 1"
                                class="block bg-slate-100 w-full text-sm md:text-lg mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-36 ">
                        </div>
                    </div>

                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/phone.svg') }}" width="30px" alt=""
                            class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for=atim1" class="w-fit">
                                <span
                                    class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Telepon
                                    Anggota 1</span>
                            </label>
                            <input type="text" name="phoneMember1"
                                value="{{ old('phoneMember1') ?? ($memberSatu->phone ?? '') }}" id=atim1"
                                placeholder="Telepon Anggota 1"
                                class="block bg-slate-100 w-full text-sm md:text-lg mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-36 ">
                            @error('phoneMember1')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span> </p>
                            @enderror
                        </div>
                    </div>
                    <!-- Nama Anggota 1 End-->

                    <!-- KI Anggota 1 -->
                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/identity_member.svg') }}" width="30px"
                            alt="" class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for="kianggota1" class="w-fit mb-1">
                                <span
                                    class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Kartu
                                    Identitas Anggota 1</span>
                            </label>
                            <input id="kianggota1" type="file" name="cardMember1" value="{{ old('cardMember1') }}"
                                class="block w-full text-md font-medium text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                            @error('cardMember1')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span> </p>
                            @enderror
                        </div>
                    </div>
                    <!-- KI Anggota 1 End-->
                    @if ($memberSatu)
                        <button
                            class="bg-red-500 w-full col-span-3 h-fit place-self-center text-white text-md lg:text-xl font-bold rounded-lg px-10 lg:px-16 py-3 lg:py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90"
                            type="button" data-modal-toggle="deleteModal-1">
                            Hapus Anggota 1
                        </button>
                    @endif
                </div>
            </div>

            <div class="flex items-center w-full justify-between mb-5 gap-2 col-span-2">
                <div class="md:grid md:grid-cols-3 gap-4 w-full">
                    <!-- Nama Anggota 2 -->
                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/member.svg') }}" width="30px" alt=""
                            class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for=atim2" class="w-fit">
                                <span
                                    class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Nama
                                    Anggota 2</span>
                            </label>
                            <input type="text" name="nameMember2"
                                value="{{ old('nameMember2') ?? ($memberDua->name_member ?? '') }}" id=atim2"
                                placeholder="Nama Anggota 2"
                                class="block bg-slate-100 w-full text-sm md:text-lg mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-36 ">
                        </div>
                    </div>

                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/phone.svg') }}" width="30px" alt=""
                            class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for=ptim2" class="w-fit">
                                <span
                                    class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Telepon
                                    Anggota 2</span>
                            </label>
                            <input type="text" name="phoneMember2"
                                value="{{ old('phoneMember2') ?? ($memberDua->phone ?? '') }}" id=ptim2"
                                placeholder="Telepon Anggota 2"
                                class="block bg-slate-100 w-full text-sm md:text-lg mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-36 ">
                            @error('phoneMember2')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span> </p>
                            @enderror
                        </div>
                    </div>
                    <!-- Nama Anggota 2 End-->

                    <!-- KI Anggota 2 -->
                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/identity_member.svg') }}" width="30px"
                            alt="" class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for="kianggota2" class="w-fit mb-1">
                                <span
                                    class="text-slate-500 text-sm lg:text-lg font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Kartu
                                    Identitas Anggota 2</span>
                            </label>
                            <input id="kianggota2" type="file" name="cardMember2" value="{{ old('cardMember2') }}"
                                class="block w-full text-md font-medium text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                            @error('cardMember2')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span> </p>
                            @enderror
                        </div>
                    </div>
                    <!-- KI Anggota 2 End-->

                    @if ($memberDua)
                        <button
                            class="bg-red-500 w-full col-span-3 h-fit place-self-center text-white text-md lg:text-xl font-bold rounded-lg px-10 lg:px-16 py-3 lg:py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90"
                            type="button" data-modal-toggle="deleteModal-2">
                            Hapus Anggota 2
                        </button>
                    @endif
                </div>
            </div>


            <!-- Kategori -->
            {{-- <div class="flex items-center">
                <img src="../assets/logo/category.svg" width="30px" alt="" class="mr-3">
                <div class="flex flex-col w-full">
                    <h1
                        class="mb-1 text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">
                        Kategori Bidang</h1>
                    <!-- Radio -->
                    <div class="divide-y-2 divide-slate-500 rounded-xl">
                        <!-- Aplikasi -->
                        <div
                            class="flex items-center bg-slate-100 pl-4 transition-all duration-300 cursor-pointer rounded-t-xl hover:bg-[#1f2937] group">
                            <input id="aplikasi" type="radio" value="" name="bordered-radio"
                                class="w-4 h-4 text-[#005857] bg-slate-300 border-gray-300 focus:ring-[#005857] transition-all duration-300 border">
                            <label for="aplikasi"
                                class="py-4 ml-2 w-full text-md font-semibold text-gray-900 cursor-pointer group-hover:text-white">Aplikasi</label>
                        </div>
                        <!-- Aplikasi End -->

                        <!-- UI/UX -->
                        <div
                            class="flex items-center bg-slate-100 pl-4 transition-all duration-300 cursor-pointer rounded-b-xl hover:bg-[#1f2937] group">
                            <input id="uiux" type="radio" value="" name="bordered-radio"
                                class="w-4 h-4 text-[#005857] bg-slate-300 border-gray-300 focus:ring-[#005857] transition-all duration-300 border">
                            <label for="uiux"
                                class="py-4 ml-2 w-full text-md font-semibold text-gray-900 cursor-pointer group-hover:text-white">UI/UX</label>
                        </div>
                        <!-- UI/UX End -->
                    </div>
                    <!-- Radio End -->
                </div>
            </div> --}}
            <!-- Kategori End -->

            <!-- Submit Button -->
            <button type="submit"
                class="bg-[#005857] w-full col-span-2 h-fit place-self-center text-white text-md lg:text-xl font-bold rounded-lg px-10 lg:px-16 py-3 lg:py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Submit</button>
            <!-- Submit Button End -->




        </div>
    </form>
    <!-- Form Berkas End -->
    <form action="{{ route('peserta.delete', ['id' => Auth::user()->id, 'no' => 1]) }}" id="form-delete-1"
        method="post" class="">
        @csrf
        @method('delete')
    </form>
    <!-- Form Berkas End -->
    <form action="{{ route('peserta.delete', ['id' => Auth::user()->id, 'no' => 2]) }}" id="form-delete-2"
        method="post" class="">
        @csrf
        @method('delete')
    </form>
@endsection
@push('modal')
    <div id="deleteModal-1" tabindex="-1"
        class="fixed top-0 left-0 right-0  hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full z-50">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="deleteModal-1">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apa Kamu Yakin Ingin Menghapus
                        Anggota Team Anda?</h3>
                    <a class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                        href="#"
                        onclick="event.preventDefault();
  document.getElementById('form-delete-1').submit();">
                        Yes, I'm sure
                    </a>

                    <button data-modal-toggle="deleteModal-1" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div id="deleteModal-2" tabindex="-1"
        class="fixed top-0 left-0 right-0  hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full z-50">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="deleteModal-2">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apa Kamu Yakin Ingin Menghapus
                        Anggota 2 Team Anda?</h3>
                    <a class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                        href="#"
                        onclick="event.preventDefault();
  document.getElementById('form-delete-2').submit();">
                        Yes, I'm sure
                    </a>

                    <button data-modal-toggle="deleteModal-2" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>
@endpush
