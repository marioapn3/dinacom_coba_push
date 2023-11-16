<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
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
                <div class="mb-4 border-b border-white">
                    <ul class="flex flex-wrap text-sm font-medium text-center text-white border-b border-white"
                        id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2 hover:text-white">
                            <button data-tabs-target="#login" type="button" role="tab" aria-current="page"
                                class="tabbtn aria-selected:text-white aria-selected:bg-textgreen aria-selected:border-white aria-selected:hover:bg-textgreenaria-selected:hover:text-white inline-block p-4 text-white rounded-t-lg active hover:bg-textgreen hover:text-white">
                                Masuk
                            </button>
                        </li>
                        <li class="mr-2">
                            <button id="daftar-tab" data-tabs-target="#daftar" type="button" role="tab"
                                class="tabbtn aria-selected:text-white aria-selected:bg-textgreen  aria-selected:border-white aria-selected:hover:bg-textgreen aria-selected:hover:text-white inline-block p-4 text-white rounded-t-lg active hover:bg-textgreen hover:text-white">
                                Daftar
                            </button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent">
                    <div class="p-4 bg-medgrn rounded-lg" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-white">
                                Masuk ke dalam platform
                            </h3>
                            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-white">Your
                                        email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                                        required autofocus
                                        class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                        placeholder="name@company.com" required />

                                    @error('email')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                class="font-medium">{{ $message }}</span> </p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-white">Your
                                        password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                        required />

                                    @error('password')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                class="font-medium">{{ $message }}</span> </p>
                                    @enderror
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="remember" type="checkbox" name="remember"
                                                class="w-4 h-4 bg-darkgreen rounded border-2 border-white focus:ring-3 focus:ring-blue-300" />
                                        </div>
                                        <label for="remember" class="ml-2 text-sm font-medium text-white">Remember
                                            me</label>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-btngreen hover:bg-textgreen focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Masuk Sekarang!
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="p-4 bg-medgrn rounded-lg" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                        @if ($tgl)
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-white">
                                    Daftar Sekarang !
                                </h3>
                                <div class="flex p-3 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-small">Pendaftaran akan dikenakan biaya sebesar 50K
                                            -/TIM</span>
                                    </div>
                                </div>
                                <form class="space-y-6 lg:grid grid-cols-2 gap-3" action="{{ route('register') }}"
                                    method="POST">
                                    @csrf
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-white">Leader
                                            Name</label>
                                        <input type="text" name="name" id="name"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            placeholder="Your lead of team" required />
                                        @error('name')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                    class="font-medium">{{ $message }}</span> </p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="phone_lead"
                                            class="block mb-2 text-sm font-medium text-white">Phone
                                            Number (Whatsapp)</label>
                                        <input type="number" name="phone_lead" id="phone_lead"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            placeholder="Your phone " required />
                                        @error('phone_lead')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                    class="font-medium">{{ $message }}</span> </p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="level_category"
                                            class="block mb-2 text-sm font-medium text-white">Category Level</label>
                                        <select name="level_category" id="level_category"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            placeholder="Your school name " required>
                                            <option value="SMA/SMK">SMA/SMK</option>
                                            <option value="Mahasiswa">Mahasiswa</option>
                                        </select>
                                    </div>
                                    {{-- <div>
                                    <label for="name_school"
                                        class="block mb-2 text-sm font-medium text-white">School</label>
                                    <input type="text" name="name_school" id="name_school"
                                        class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                        placeholder="Your school name " required />
                                </div> --}}
                                    <div>
                                        <label for="email_regis"
                                            class="block mb-2 text-sm font-medium text-white">Your
                                            email</label>
                                        <input type="email" name="email_regis" id="email_regis"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            placeholder="name@company.com" required />
                                        @error('email_regis')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                    class="font-medium">{{ $message }}</span> </p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="password_regis"
                                            class="block mb-2 text-sm font-medium text-white">Your
                                            password</label>
                                        <input type="password" name="password_regis" id="password_regis"
                                            placeholder="••••••••"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            required />
                                        @error('password_regis')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                    class="font-medium">{{ $message }}</span> </p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="password_regis_confirmation"
                                            class="block mb-2 text-sm font-medium text-white">Repeat your
                                            password</label>
                                        <input type="password" name="password_regis_confirmation"
                                            id="password_regis_confirmation" placeholder="••••••••"
                                            class="bg-darkgreen border-2 border-white text-white text-sm rounded-lg focus:ring-lightgrn focus:border-lightgrn block w-full p-2.5"
                                            required />
                                    </div>
                                    <button type="submit"
                                        class="col-span-2 w-full text-white bg-btngreen hover:bg-textgreen focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                        Daftar Sekarang!
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="py-6 px-6 lg:px-8 h-[600px] flex items-center justify-center">
                                <h3 class="mb-4 text-xl font-medium text-white">
                                    Pendaftaran Sudah Ditutup
                                </h3>

                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
