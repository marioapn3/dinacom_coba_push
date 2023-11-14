@extends('layouts.admin')


@section('content')
    <!-- card1 -->


    <!-- cards row 2 -->
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border"
          >
            <div
              class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex flex-row justify-between"
            >
              <h6 class="">Nama Project/Team</h6>
              
              <button
              class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
              type="button"
              data-modal-toggle="paymentModal"
            >
              Ubah Status Pembayaran
            </button>
              <a href="{{route('export.team',['id'=>$peserta->id])}}"
              class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
             
            >
             Export Team
            </a>
            </div>
            <div class="flex-auto pb-2 px-6">
              <div class="bg-white p-3 shadow-sm rounded-sm">
                <div class="text-gray-700">
                  <div class="grid md:grid-cols-2 text-sm">
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Nama Team</div>
                      <div class="px-4 py-2">{{$peserta->name_team??'Belum Di Update'}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Status</div>
                      <div class="px-4 py-2">
                        <span
                          class="bg-gradient-to-tl from-blue-600 to-blue-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"
                          >{{$peserta->status_contest??'Belum Di Update'}}</span
                        >
                      </div>
                      
                    </div>
                  
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Category</div>
                      <div class="px-4 py-2">{{$peserta->contest_category??'Belum Di Update'}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">Status Pembayaran</div>
                        <div class="px-4 py-2">
                          <span
                            class="bg-gradient-to-tl {{$proof?$proof->status=='confirmed'?'from-green-600 to-green-300':'from-yellow-600 to-yellow-300':'from-slate-600 to-slate-300'}}  px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"
                            >{{$proof->status??'Pending'}}</span
                          >
                        </div>
                      </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Asal Sekolah</div>
                      <div class="px-4 py-2">{{$peserta->name_school??'Belum Di Update'}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Nama Ketua</div>
                      <div class="px-4 py-2">{{$peserta->name??'Belum Di Update'}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Email Ketua</div>
                      <div class="px-4 py-2">{{$peserta->email??'Belum Di Update'}}</div>
                    </div>

                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Telepon Ketua</div>
                      <div class="px-4 py-2">{{$peserta->phone_lead??'Belum Di Update'}}</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of about section -->

              <div class="my-4"></div>
              <div class="bg-white p-3 shadow-sm rounded-sm">
                <div
                  class="flex items-center space-x-2 font-semibold text-gray-900 leading-8"
                >
                  <span clas="text-green-500">
                    <svg
                      class="h-5"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                      ></path>
                    </svg>
                  </span>
                  <span class="tracking-wide">About</span>
                </div>
                <div class="text-gray-700">
                  <div class="grid md:grid-cols-2 text-sm">
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Nama Aplikasi</div>
                      <div class="px-4 py-2">{{$project->name_project??'Belum Di Update'}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Pembimbing</div>
                      <div class="px-4 py-2">{{$peserta->tutor??'Belum Di Update'}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Masalah Awal</div>
                      <div class="px-4 py-2">
                        {{$project->problem??'Belum Di Update'}}
                      </div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Solusi</div>
                      <div class="px-4 py-2">
                        {{$project->solution??'Belum Di Update'}}
                      </div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">
                        Sasaran Pengguna
                      </div>
                      <div class="px-4 py-2">{{$project->user_goals??'Belum Di Update'}}</div>
                    </div>

                  
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">
                        Keunikan Produk
                      </div>
                      <div class="px-4 py-2">
                        {{$project->product_uniqueness??'Belum Di Update'}}
                      </div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">Potensi Pasar</div>
                      <div class="px-4 py-2">
                        {{$project->market_potential??'Belum Di Update'}}
                      </div>
                    </div>

                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">
                        Fungsi Dan Fitur
                      </div>
                      <div class="px-4 py-2">
                        {{$project->feature_and_function??'Belum Di Update'}}
                      </div>
                    </div>

                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">
                        Kualitas Produk Dan Metode Pengembangan
                      </div>
                      <div class="px-4 py-2">
                        {{$project->quality_and_method_dev??'Belum Di Update'}}
                      </div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">
                        Biaya Pengeluaran
                      </div>
                      <div class="px-4 py-2">Rp. {{$project->expenses??'Belum Di Update'}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">
                        Biaya Pemasukan
                      </div>
                      <div class="px-4 py-2">Rp. {{$project->entrance_fee??'Belum Di Update'}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">
                        URL Proposal
                      </div>
                      <div class="px-4 py-2">{{$project->url_proposal??'Belum Di Update'}}</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold">
                        URL Project
                      </div>
                      <div class="px-4 py-2">{{$project->url_project??'Belum Di Update'}}</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of about section -->

              <div class="my-4"></div>

              <!-- Experience and education -->
              <div class="bg-white p-3 shadow-sm rounded-sm">
                <div>
                  <div
                    class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3"
                  >
                    <span clas="text-green-500">
                      <svg
                        class="h-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                        ></path>
                      </svg>
                    </span>
                    <span class="tracking-wide">Team Member</span>
                  </div>
                  <div class="grid grid-cols-4 gap-2 mx-auto">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">
                      @if ($peserta->student_card)
                      <img
                      class="w-full max-w-[300px]"
                      src="{{asset('/storage/images/studentCard/'.$peserta->student_card)}}"
                      alt="Sunset in the mountains"
                    />
                      @else
                      <img
                      class="w-full max-w-[300px]"
                      src="{{asset('/assets/images/noimage.png')}}"
                      alt=""
                    />
                      @endif
                       
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">{{$peserta->name}}</div>
                          <div class="text-xl mb-2">Ketua</div>
                          <p class="text-gray-700 text-base">
                            {{$peserta->email}}
                          </p>
                          <p class="text-gray-700 text-base">{{$peserta->phone_lead}}</p>
                        </div>
                      </div>
                    @forelse ($member as $row)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">
                        <img
                          class="w-full max-w-[300px]"
                          src="{{asset('/storage/images/studentCard/'.$row->student_card)}}"
                          alt="Sunset in the mountains"
                        />
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">{{$row->name_member}}</div>
                     
                          <p class="text-gray-700 text-base">{{$row->phone}}</p>
                        </div>
                      </div>
                    @empty
                        member belum Di tentukan
                    @endforelse
                    
                    
                  </div>
                </div>

                <!-- End of Experience and education grid -->
              </div>
              <div class="bg-white p-3 shadow-sm rounded-sm">
                <div>
                
                    <div
                    class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3"
                  >
                    <span clas="text-green-500">
                      <svg
                        class="h-5"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                        ></path>
                      </svg>
                    </span>
                    <span class="tracking-wide">Bukti Pembayaran</span>
                  </div>
                 
                  
                 
                  <div class="flex flex-row flex-wrap gap-2">
                    @if ($proof!=null)
                        
                    <img
                      class="rounded-t-lg w-[400px]"
                      src="{{asset('/storage/images/Payment/'.$proof->proof_of_payment)}}"
                      alt=""
                    />
                    @else
                    <img
                    class="rounded-t-lg w-[400px]"
                    src="{{asset('/assets/images/noimage.png')}}"
                    alt=""
                  />
                    @endif
                  </div>
                </div>

                <!-- End of Experience and education grid -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card 2 -->
      <!-- Button trigger modal -->

      <!-- Modal toggle -->

      <!-- Main modal -->
    

      <div
      id="paymentModal"
      data-modal-backdrop="static"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full"
    >
      <div class="relative w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex justify-between items-start p-4 rounded-t border-b"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Static modal
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
              data-modal-toggle="paymentModal"
            >
              <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
          </div>
          <!-- Modal body -->
          <form action="{{route('admin.paymentUp',['id'=>$peserta->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="p-6 space-y-6">
              <label
                for="countries"
                class="block mb-2 text-sm font-medium text-gray-900 "
                >Ganti Status Pembayaran</label
              >
              <select
                id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="payStat"
              >
                <option selected>Choose a country</option>
                <option value="pending">Pending</option>
                <option value="waiting">Wainting</option>
                <option value="confirmed">Confirmed</option>
                
              </select>
            </div>
            <!-- Modal footer -->
            <div
              class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200"
            >
              <button
                data-modal-toggle="staticModal"
                type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
              >
                submit
              </button>
              <button
                data-modal-toggle="staticModal"
                type="button"
                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10"
              >
                Decline
              </button>
            </div>
          </form>
        </div>
      </div>
      </div>
@endsection
