@extends('layouts.dashboard')

@section('content-lg')
    <!-- Form Berkas -->
    <form action="{{ route('peserta.update', ['id' => Auth::user()->id]) }}" method="post"enctype="multipart/form-data">
        @csrf
        <h1 class="w-fit px-4 py-3 rounded-t-lg bg-slate-300 text-black text-2xl font-bold">Kelengkapan
            Berkas</h1>
        <div
            class="form-grid md:grid  md:grid-cols-2 grid-rows-5 gap-5 bg-slate-300 pt-2 px-4 pb-4 rounded-r-lg rounded-bl-lg">
            <!-- Nama Tim -->
            <div class="flex items-center mb-5 md:col-span-2">
                <img src="{{ asset('/assets/dashboard/assets/logo/team.svg') }}" width="30px" alt="" class="mr-3">
                <div class="flex flex-col w-full group">
                    <label for="ntim" class="w-fit">
                        <span
                            class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Nama
                            Tim</span>
                    </label>
                    <input type="text" name="nameTeam" value="{{ old('nameTeam') }}" id="ntim"
                        placeholder="Nama Tim"
                        class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-32">
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
                        <span class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Nama
                            Ketua Tim</span>
                    </label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" disabled id="ktim"
                        placeholder="Nama Ketua Tim"
                        class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500  focus:shadow-lg focus:placeholder:-translate-x-36 ">
                </div>
            </div>
            <!-- Ketua Tim End-->

            <!-- KI Ketua -->
            <div class="flex items-center mb-5">
                <img src="{{ asset('/assets/dashboard/assets/logo/identity_member.svg') }}" width="30px" alt=""
                    class="mr-3">
                <div class="flex flex-col w-full">
                    <label for="kiketua" class="w-fit mb-1">
                        <span class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Kartu
                            Identitas Ketua (KTM, Kartu Pelajar)</span>
                    </label>
                    <input id="kianggota1" type="file" name="leadCard" value="{{ old('leadCard') }}"
                        class="block w-full text-md font-medium text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
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
                        @if (Auth::user()->level_category == 'SMA/SMK')
                            <span
                                class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Asal
                                Sekolah</span>
                        @else
                            <span
                                class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Asal
                                Universitas</span>
                        @endif

                    </label>
                    <input type="text" name="nameSchool" value="{{ old('nameSchool') }}" id="sklh"
                        placeholder="Asal Sekolah"
                        class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500  focus:shadow-lg focus:placeholder:-translate-x-36 ">

                    @error('nameSchool')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
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
                            class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Pembimbing
                            Team</span>
                    </label>
                    <input type="text" name="teamMentor" value="{{ old('teamMentor') }}" id="sklh"
                        placeholder="Pembimbing Team"
                        class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500  focus:shadow-lg focus:placeholder:-translate-x-36 ">
                    @error('teamMentor')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span> </p>
                    @enderror
                </div>
            </div>

            <!-- Nama Mentor End -->
            <div class="flex items-center justify-between mb-5 gap-2 col-span-2">
                <div class="md:grid md:grid-cols-3 gap-4 w-full mt-4">
                    <!-- Nama Anggota 1 -->
                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/member.svg') }}" width="30px" alt=""
                            class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for=atim1" class="w-fit">
                                <span
                                    class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Nama
                                    Anggota 1</span>
                            </label>
                            <input type="text" name="nameMember1" value="{{ old('nameMember1') }}" id=atim1"
                                placeholder="Nama Anggota 1"
                                class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-36 ">
                        </div>
                    </div>

                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/phone.svg') }}" width="30px" alt=""
                            class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for=atim1" class="w-fit">
                                <span
                                    class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Telepon
                                    Anggota 1</span>
                            </label>
                            <input type="text" name="phoneMember1" value="{{ old('phoneMember1') }}" id=atim1"
                                placeholder="Telepon Anggota 1"
                                class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-36 ">
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
                                    class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Kartu
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


                </div>
            </div>

            <div class="flex items-center w-full justify-between mb-5 gap-2 col-span-2">
                <div class="md:grid md:grid-cols-3 gap-4 w-full mt-4">
                    <!-- Nama Anggota 2 -->
                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/member.svg') }}" width="30px" alt=""
                            class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for=atim2" class="w-fit">
                                <span
                                    class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Nama
                                    Anggota 2</span>
                            </label>
                            <input type="text" name="nameMember2" value="{{ old('nameMember2') }}" id=atim2"
                                placeholder="Nama Anggota 2"
                                class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-36 ">
                        </div>
                    </div>

                    <div class="flex items-center mb-5">
                        <img src="{{ asset('/assets/dashboard/assets/logo/phone.svg') }}" width="30px" alt=""
                            class="mr-3">
                        <div class="flex flex-col w-full">
                            <label for=ptim2" class="w-fit">
                                <span
                                    class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Telepon
                                    Anggota 2</span>
                            </label>
                            <input type="text" name="phoneMember2" value="{{ old('phoneMember2') }}" id=ptim2"
                                placeholder="Telepon Anggota 2"
                                class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-36 ">
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
                                    class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Kartu
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
                class="bg-[#005857] col-span-2  h-fit place-self-center text-white w-full text-xl font-bold rounded-lg px-16 py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Submit</button>
            <!-- Submit Button End -->
        </div>
    </form>
    <!-- Form Berkas End -->
@endsection
