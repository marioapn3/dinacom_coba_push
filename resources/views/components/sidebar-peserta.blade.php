
<!-- Navbar End -->

<!-- Main-Lg -->

<div class=""></div>
<div id="side-Dash"class="fixed lg:flex hidden z-30  flex-col w-[200px] lg:w-[20%] h-[100%] lg:h-[100vh] px-5 bg-slate-200">    
    <!-- Logo -->
    <div class="flex flex-row items-center mt-5 mb-14">
        <img src="{{asset('assets/dashboard/assets/img/logo.png')}}" alt="logo" width="50px" class=" ">
        <h1 class="text-xl font-bold ml-1">DINACOM</h1>
    </div>
    <!-- Logo End -->

    <!-- Beranda -->
    <div class="mb-7">
        <h1 class="mb-2 text-green-500 font-semibold">Beranda</h1>
        <a href="{{route('peserta.index')}}" class="animate__animated  flex items-center w-full px-3 py-2 transition-all duration-300 group hover:bg-green-500 hover:rounded-xl hover:text-white hover:translate-x-4 active:scale-90  {{ set_active_peserta(['peserta.index']) }} ">
            <img src="{{asset('assets/dashboard/assets/logo/home.svg')}}" alt="home" width="25px" class="mr-4 transition-all duration-300 group-hover:invert">
            <h2 class="font-semibold">Beranda</h2>
        </a>
    </div>
    <!-- Beranda End -->

    <div class="w-[93%] mx-auto border border-slate-400"></div>

    <!-- Lomba -->
    <div class="mt-7 h-full">
        <h1 class="mb-2 font-semibold text-green-500">Lomba</h1>

        <!-- Peserta -->
        <a href="{{route('peserta',['id'=>Auth::user()->id])}}" class="animate__animated  flex items-center px-3 py-2 transition-all duration-300 group hover:bg-green-500 hover:rounded-xl hover:text-white hover:translate-x-4  active:scale-90 {{ set_active_peserta(['peserta','peserta.edit','peserta.editpay','peserta.detail','peserta.item']) }}">
            <img src="{{asset('assets/dashboard/assets/logo/peserta.svg')}}" alt="peserta" width="25px" class="mr-4 transition-all duration-300 group-hover:invert">
            <h2 class="font-semibold">Peserta</h2>
        </a>

        <!-- Unggah -->
        <a href="{{route('berkas')}}" class="animate__animated  flex items-center px-3 py-2 mt-2 transition-all duration-300 group hover:bg-green-500 hover:rounded-xl hover:text-white hover:translate-x-4 active:scale-90 {{ set_active_peserta(['berkas','berkas.create','berkas.show','berkas.edit']) }}">
            <img src="{{asset('assets/dashboard/assets/logo/upload.svg')}}" alt="upload" width="25px" class="mr-4 transition-all duration-300 group-hover:invert">
            <h2 class="font-semibold">Unggah</h2>
        </a>
        
    </div>
    <!-- Lomba End -->

    <!-- Logout -->
    <div  class="flex justify-self-end mb-5 px-3 py-2 transition-all duration-300 group hover:bg-green-500 hover:rounded-xl hover:text-white hover:translate-x-4 active:scale-90">
        <img src="{{asset('assets/dashboard/assets/logo/logout.svg')}}" width="25px" alt="logout" class="mr-4 transition-all duration-300 group-hover:invert">
        
        <form action="{{ route('logout') }}" method="post">
            @csrf
            {{-- @method(DELETE) --}}
           <button type="submit" class="font-semibold inline-block"
               >
                Logout
            </button>
            
        </form>
    </div>

</div>
<!-- [Left Side] End -->

<!-- [Right Side] -->
