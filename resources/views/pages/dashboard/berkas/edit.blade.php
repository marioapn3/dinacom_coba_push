@extends('layouts.dashboard')

@section('content-lg')
<form action="{{ route('berkas.update', ['id' => Auth::user()->id]) }}" method="POST">
    @method('put')
    @csrf
    <h1 class="w-fit px-4 py-3 rounded-t-lg bg-slate-300 text-black text-2xl font-bold">Kelengkapan
        Berkas</h1>
    <div class="form-grid md:grid md:grid-cols-2 grid-rows-5 gap-5 bg-slate-300 pt-2 px-4 pb-4 rounded-r-lg rounded-bl-lg">
        <!-- Nama Tim -->
        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="namaApp" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Nama
                        Project</span>
                </label>
             
                <input type="text" name="namaApp" value="{{ old('namaApp')??$berkas->name_project }}" id="namaApp"
                    placeholder="Nama Project"
                    class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-32">
                    @error('namaApp')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span> </p>
                    @enderror
            </div>
        </div>
        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="AppProblem" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Permasalahan Awal</span>
                </label>
                <textarea name="AppProblem" id="AppProblem" placeholder="Permasalahan Awal" class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all resize-none placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-48" cols="30" rows="2">{{ old('AppProblem') ??$berkas->problem }}</textarea>
                @error('AppProblem')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                        class="font-medium">{{ $message }}</span> </p>
            @enderror
              
            </div>
        </div>

        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="solusi" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Solusi</span>
                </label>
                <textarea name="solusi" id="solusi" placeholder="Solusi" class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all resize-none placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-48" cols="30" rows="2">{{ old('solusi')??$berkas->solution }}</textarea>
                @error('solusi')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                        class="font-medium">{{ $message }}</span> </p>
            @enderror
            </div>
        </div>

        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="market" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Sasaran Pengguna</span>
                </label>
                <textarea name="market" id="market" placeholder="Sasaran Pengguna" class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all resize-none placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-48" cols="30" rows="2">{{ old('market')??$berkas->user_goals }}</textarea>
                @error('market')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                        class="font-medium">{{ $message }}</span> </p>
            @enderror
            </div>
        </div>

        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="AppUnique" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Keunikan Produk dibanding Produk yang sejenis</span>
                </label>
                <textarea name="AppUnique" id="AppUnique" placeholder="Keunikan Produk dibanding Produk yang sejenis" class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all resize-none placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-48" cols="30" rows="2">{{ old('AppUnique')??$berkas->product_uniqueness }}</textarea>
                @error('AppUnique')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                        class="font-medium">{{ $message }}</span> </p>
            @enderror
            </div>
        </div>

        
        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="AppPotency" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Potensi Pasar dari aplikasi</span>
                </label>
                <textarea name="AppPotency" id="AppPotency" placeholder="Potensi Pasar dari aplikasi" class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all resize-none placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-48" cols="30" rows="2">{{ old('AppPotency')??$berkas->market_potential }}</textarea>
                @error('AppPotency')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                        class="font-medium">{{ $message }}</span> </p>
            @enderror
            </div>
        </div>

        
        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="AppFeatures" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Fungsi dan Fitur Aplikasi</span>
                </label>
                <textarea name="AppFeatures" id="AppFeatures" placeholder="Fungsi dan Fitur Aplikasi" class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all resize-none placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-48" cols="30" rows="2">{{ old('AppFeatures') ??$berkas->feature_and_function }}</textarea>
                @error('AppFeatures')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                        class="font-medium">{{ $message }}</span> </p>
            @enderror
            </div>
        </div>

        
        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="AppQuality" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">	Kualitas Produk dan Metode Pengembangan Aplikasi</span>
                </label>
                <textarea name="AppQuality" id="AppQuality" placeholder="	Kualitas Produk dan Metode Pengembangan Aplikasi" class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all resize-none placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-48" cols="30" rows="2">{{ old('AppQuality') ??$berkas->quality_and_method_dev}}</textarea>
                @error('AppQuality')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                        class="font-medium">{{ $message }}</span> </p>
            @enderror
            </div>
        </div>

        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="AppExpenses" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Biaya Pengeluaran</span>
                </label>
             
                <input type="text" name="AppExpenses" value="{{ old('AppExpenses') ??$berkas->expenses}}" id="AppExpenses"
                    placeholder="Biaya Pengeluaran"
                    class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-32">
                    @error('AppExpenses')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span> </p>
                @enderror
            </div>
        </div>

        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="Appfee" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">Biaya Pemasukan</span>
                </label>
             
                <input type="text" name="Appfee" value="{{ old('Appfee') ??$berkas->entrance_fee}}" id="Appfee"
                    placeholder="Biaya Pemasukan"
                    class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-32">
                    @error('Appfee')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span> </p>
                @enderror
            </div>
        </div>

        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="AppURL" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">URL Project</span>
                </label>
             
                <input type="text" name="AppURL" value="{{ old('AppURL') ?? $berkas->url_project}}" id="AppURL"
                    placeholder="URL Project"
                    class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-32">
                    @error('AppURL')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span> </p>
                @enderror
            </div>
        </div>
    
        <div class="flex items-center mb-5">
            <div class="flex flex-col w-full group">
                <label for="AppProposal" class="w-fit">
                    <span
                        class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5 group group-focus:text-green-400">URL Proposal</span>
                </label>
             
                <input type="text" name="AppProposal" value="{{ old('AppProposal') ??$berkas->url_proposal}}" id="AppProposal"
                    placeholder="URL Project"
                    class="block bg-slate-100 w-full mt-1 px-3 py-2 border-0 rounded-md transition-all duration-[0.8s] placeholder:text-slate-400 placeholder:transition-all placeholder:duration-1000 focus:w-full focus:outline-0 focus:border focus:border-green-500 focus:shadow-lg focus:placeholder:-translate-x-32">
                    @error('AppProposal')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span> </p>
                @enderror
            </div>
        </div>
        <!-- Nama Tim End -->

        


        <!-- Submit Button -->
        <button type="submit"
            class="bg-[#005857] col-span-2 w-full h-fit place-self-center text-white text-xl font-bold rounded-lg px-16 py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Submit</button>
        <!-- Submit Button End -->
    </div>
</form>
 
@endsection

