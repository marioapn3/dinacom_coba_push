@extends('layouts.app')

@section('title')
    Dinacom 2023 | Finalis
@endsection

@section('content')
    <section id="top">
        <div
            class="section bg-[url('./assets/images/banner_bg.png')] md:h-screen py-36 md:py-0 flex justify-center items-center   ">
            @if ($count == 3)
                <div>
                    <div
                        class="w-[200px] h-[200px] mx-auto flex items-center bg-medgrn/75 border-2 border-textgreen rounded-[25px]">

                        <img src="./assets/images/piala.png" class="w-[100px]  h-auto mx-auto "alt="" srcset="">
                    </div>


                    <h1
                        class="text-textgreen font-extrabold lg:text-7xl md:text-5xl text-4xl md:mx-6 font-bold font-ubuntu text-center mb-2">
                        Congratulations
                    </h1>
                    <h1
                        class="text-white font-extrabold lg:text-6xl md:text-4xl text-3xl md:mx-6 font-bold font-ubuntu text-center mb-2">
                        Kepada Para Pemenang Dinacom 2023
                    </h1>


                </div>
            @else
                @if ($semifinal->count() > 0)
                    <div>



                        <h1
                            class="text-textgreen font-extrabold lg:text-7xl md:text-5xl text-4xl md:mx-6 font-bold font-ubuntu text-center mb-2">
                            Finalis Dinacom 2023
                        </h1>



                    </div>
                @else
                    <div>



                        <h1
                            class="text-textgreen font-extrabold lg:text-7xl md:text-5xl text-4xl md:mx-6 font-bold font-ubuntu text-center mb-2">
                            Pemenang Dinacom 2023 Belum di Umumkan
                        </h1>



                    </div>
                @endif
            @endif

        </div>
    </section>
    @if ($count == 3)
        <section id="mid">
            <div class="section bg-white  pt-36 ">
                <h1
                    class="text-textgreen font-extrabold lg:text-7xl md:text-5xl text-4xl md:mx-6 font-bold font-ubuntu text-center mb-2">
                    Ketegori Apps
                </h1>
                <div class="flex justify-center">

                    <div class="flex items-end podium">
                        <div class="w-[100px] md:w-[200px]" data-aos="fade-up" data-aos-duration="1500">
                            <p class="text-center ">{{ $project2->name_project }}</p>
                            <p class="text-center p-1">{{ $juara2->name_team }}</p>
                            <div
                                class="text-center flex justify-center items-center text-white min-h-[200px] bg-green-700 text-5xl">
                                2</div>
                        </div>
                        <div class="w-[100px] md:w-[200px]" data-aos="fade-up" data-aos-duration="2000">

                            <p class="text-center ">{{ $project1->name_project }}</p>
                            <p class="text-center p-1">{{ $juara1->name_team }}</p>
                            <div
                                class="text-center flex justify-center items-center text-6xl  text-white min-h-[300px] bg-green-500">

                                1
                            </div>

                        </div>
                        <div class="w-[100px] md:w-[200px]" data-aos="fade-up" data-aos-duration="1000">
                            <p class="text-center ">{{ $project3->name_project }}</p>
                            <p class="text-center p-1">{{ $juara3->name_team }}</p>
                            <div
                                class="text-center flex justify-center items-center text-white min-h-[100px] bg-green-900 text-4xl">
                                3</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @else
        @if ($semifinal->count() > 0)
            <section id="mid" class="">
                <div class="section bg-white  pt-36 pb-24 md:h-screen mb-8">
                    <h1
                        class="text-textgreen font-extrabold lg:text-7xl md:text-5xl text-4xl md:mx-6 font-bold font-ubuntu text-center mb-2">
                        Daftar Finalis Dinacom 
                    </h1>
                    <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
                        <div class="grid md:grid-cols-2 gap-4">
                            @foreach ($semifinal as $item)
                            
                              <p class="bg-darkgreen text-white rounded p-10 text-2xl text-center" data-aos="fade-up" data-aos-duration="1000"> {{$item->name_team}}</p>
                            @endforeach
                         
                        
                        </div>
                    
                      </div>

                </div>
                </div>
            </section>
        @endif
    @endif
@endsection
