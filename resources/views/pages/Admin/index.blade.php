@extends('layouts.admin')


@section('content')
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl  rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase ">
                                    Jumlah Pendaftar</p>
                                <h5 class="mb-2 font-bold ">{{$countPeserta}}</h5>
                                <p class="mb-0 ">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                                    since yesterday
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl  rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase ">
                                    Menunggu Konfirmasi Pembayaran</p>
                                <h5 class="mb-2 font-bold ">{{$countWaiting}}</h5>
                            
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl  rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase ">Pendaftar
                                    Terkonfirmasi
                                </p>
                                <h5 class="mb-2 font-bold ">{{$countConfirmed}}</h5>
                            
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards row 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 lg:w-6/12 lg:flex-none">
            <div
                class="border-black/12.5  shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                    <h6 class="capitalize font-semibold">Deadline Pendaftaran</h6>

                </div>
                <div class="flex-auto p-4 w-full">
                    <div class="flex gap-2 px-8 justify-between">
                        @if ($batasDaftar)
                            <h1 class=" text-xl mb-2">Batas Pendaftaran : {{ $batasDaftar }}</h1>
                        @else
                            <h1 class=" text-xl mb-2">Deadline Pendaftaaran Belum di tentukan</h1>
                        @endif
                        <a class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2"
                            href="{{ route('admin.deadlinependaf') }}">Edit Deadline</a>
                    </div>
                </div>
          
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                    <h6 class="capitalize font-semibold">Deadline Pengumpulan Project</h6>

                </div>
                <div class="flex-auto p-4 w-full">
                    <div class="flex gap-2 px-8 justify-between">
                        @if ($batasBerkas)
                            <h1 class=" text-xl mb-2">Batas Pengumpulan : {{ $batasBerkas }}</h1>
                        @else
                            <h1 class=" text-xl mb-2">Deadline Pendaftaaran Belum di tentukan</h1>
                        @endif
                        <a class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2"
                            href="{{ route('admin.deadlineberkas') }}">Edit Deadline</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-6/12 lg:flex-none">


            <div
                class="border-black/12.5  shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                    <h6 class="capitalize ">Finalis Dinacom</h6>

                </div>
                <div class="flex-auto p-4 w-full">

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        #
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Nama Team
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Peringkat
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($finalis as $item)
                                    <tr class="bg-white border-b ">
                                        <th scope="row"
                                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                            {{$loop->iteration}}
                                        </th>
                                        <td class="py-4 px-6">
                                           {{ $item->name_team}}
                                        </td>
                                        <td class="py-4 px-6">
                                            Juara {{ $item->champion}}
                                        </td>

                                    </tr>
                                @empty

                                    <tr class="bg-white border-b ">

                                        <td colspan="3" class="py-4 px-6">
                                            Finalis Belum Di u,u,kan </td>


                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>

                </div>


            </div>
        </div>


    </div>
@endsection
