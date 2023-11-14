@extends('layouts.dashboard')

@section('content-lg')
    <!-- Form Berkas -->
    <form action="{{ route('peserta.updatepay', ['id' => Auth::user()->id]) }}" method="post"enctype="multipart/form-data">
        @csrf
        <h1 class="w-fit px-4 py-3 rounded-t-lg bg-slate-300 text-black text-2xl font-bold">Bukti Pembayaran</h1>
        <div class=" bg-slate-300 p-4">
            <div class="bg-white p-4 rounded font-semibold text-sm">
                <p>Pembayaran Bisa Dilakukan Dengan Melalui transfer</p>
                <p>Bank-Jateng</p>
                <p>a/n Kemahasiswaan Udinus</p>
                <p>No. Rekening : <span class="font-bold">3-099-07026-8</span></p>
                <br>
                <p class="text-red-600 font-bold">Cantumkan Kode pada Dua Digit Terakhir Jumlah Yang akan Di transferkan </p>
                <p class="text-red-600 font-bold">Kode unik untuk Dinacom 2023 : 01</p>
                <p class="text-red-600 font-bold">Nominal Pembayaran menjadi :</p>
                <p class="text-red-600 font-bold">Rp. 50.001</p>
            </div>
        </div>
        <div class="form-grid grid grid-cols-1 gap-5 bg-slate-300 pt-2 px-4 pb-4 rounded-r-lg rounded-bl-lg">
            <!-- Nama Tim -->
            <!-- KI Ketua -->
            <div class="flex items-center mb-5">
                {{-- <img src="../assets/logo/identity_member.svg" width="30px" alt="" class="mr-3"> --}}
                <div class="flex flex-col w-full">
                    <label for="kiketua" class="w-fit mb-1">
                        <span class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Bukti
                            Pembayaran</span>
                    </label>
                    <input id="kiketua" type="file" name="paymentProof"
                        class="block w-full text-md font-medium text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                        required>
                </div>
            </div>
            <!-- KI Ketua End-->
            <button type="submit"
                class="bg-[#005857] w-fit h-fit place-self-center text-white text-xl font-bold rounded-lg px-16 py-4 transition-all duration-300 hover:bg-opacity-90 hover:-translate-y-2 active:scale-90">Submit</button>
            <!-- Submit Button End -->
            @isset($bukti)
                <p class="text-slate-500 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Bukti Pembayaran
                    Anda</p>
                <img src="{{ asset('storage/images/Payment/' . $bukti->proof_of_payment) }}" class="w-1/2 rounded"
                    alt="">
            @endisset
        </div>
    </form>
    <!-- Form Berkas End -->
@endsection
