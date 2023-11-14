@extends('layouts.admin')


@section('content')
<div class="flex flex-wrap -mx-3">
  <div class="flex-none w-full max-w-full px-3">
    <div
      class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border"
    >
      <div
        class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
      >
        <h6 class="">List Peserta Penyisihan</h6>
      </div>
      <div class="flex-auto px-0 pt-0 pb-2">
        <div class="p-4 overflow-x-auto">
          <table id="tablepending"
            class="items-center w-full mb-0 align-top border-collapsetext-slate-500"
          >
            <thead class="align-bottom">
              <tr>
                <th
                  class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  #
                </th>
                <th
                  class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Ketua
                </th>
                <th
                  class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Nama Project
                </th>
                <th
                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Nama Tim
                </th>
                
                <th
                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Status
                </th>
                <th
                  class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none  tracking-none whitespace-nowrap text-slate-400 opacity-70"
                ></th>
              </tr>
            </thead>
            <tbody>
             @forelse ($pending as $item)
             <tr>
              <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent text-center" >1</td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <div class="flex px-2 py-1">
                 
                  <div class="flex flex-col justify-center">
                    <h6
                      class="mb-0 text-sm leading-normal "
                    >
                     {{$item->name}}
                    </h6>
                    <p
                      class="mb-0 text-xs leading-tight  text-slate-400"
                    >
                    {{$item->email}}
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <p
                  class="mb-0 text-xs font-semibold leading-tight  "
                >
                {{-- {{$item->$berkas->id}} --}}
                {{$item->berkasproject->name_project??'Belum Upload'}}  
              </p>
            
              </td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <p
                  class="mb-0 text-xs font-semibold leading-tight  "
                >
                 {{$item->name_team ??'Belum Upload'}}
                </p>
            
              </td>
             
              <td
                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <span
                  class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"
                  >{{$item->status_contest}}</span
                >
              </td>
              
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <a
                  href="{{route('admin.team.edit',['id'=>$item->id])}}"
                  class="text-xs font-semibold leading-tight  text-slate-400"
                >
                  Edit Peringkat
                </a>
              </td>
            </tr>
             @empty
             <tr>
              <td colspan="5" class="p-2 font-bold align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent text-center" >Data Tidak ada</td>
       
            </tr>
             @endforelse
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-none w-full max-w-full px-3">
    <div
      class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border"
    >
      <div
        class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
      >
        <h6 class="">List Peserta Lolos Penyisihan</h6>
      </div>
      <div class="flex-auto px-0 pt-0 pb-2">
        <div class="p-4 overflow-x-auto">
          <table id="tablepenyisihan"
            class="items-center w-full mb-0 align-top border-collapsetext-slate-500"
          >
            <thead class="align-bottom">
              <tr>
                <th
                  class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  #
                </th>
                <th
                  class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Ketua
                </th>
                <th
                  class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Nama Project
                </th>
                <th
                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Nama Tim
                </th>
                
                <th
                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Status
                </th>
                <th
                  class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none  tracking-none whitespace-nowrap text-slate-400 opacity-70"
                ></th>
              </tr>
            </thead>
            <tbody>
             @forelse ($penyisihan as $item)
             <tr>
              <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent text-center" >1</td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <div class="flex px-2 py-1">
                 
                  <div class="flex flex-col justify-center">
                    <h6
                      class="mb-0 text-sm leading-normal "
                    >
                     {{$item->name}}
                    </h6>
                    <p
                      class="mb-0 text-xs leading-tight  text-slate-400"
                    >
                    {{$item->email}}
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <p
                  class="mb-0 text-xs font-semibold leading-tight  "
                >
                {{-- {{$item->$berkas->id}} --}}
                {{$item->berkasproject->name_project??'Belum Upload'}}  
              </p>
            
              </td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <p
                  class="mb-0 text-xs font-semibold leading-tight  "
                >
                 {{$item->name_team??'Belum Upload'}}
                </p>
            
              </td>
             
              <td
                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <span
                  class="bg-gradient-to-tl from-yellow-600 to-yellow-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"
                  >{{$item->status_contest}}</span
                >
              </td>
              
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <a
                  href="{{route('admin.team.edit',['id'=>$item->id])}}"
                  class="text-xs font-semibold leading-tight  text-slate-400"
                >
                  Edit Peringkat
                </a>
              </td>
            </tr>
             @empty
             <tr>
              <td colspan="5" class="p-2 font-bold align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent text-center" >Data Tidak ada</td>
       
            </tr>
             @endforelse
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-none w-full max-w-full px-3">
    <div
      class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border"
    >
      <div
        class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
      >
        <h6 class="">List Peserta Semifinal</h6>
      </div>
      <div class="flex-auto px-0 pt-0 pb-2">
        <div class="p-4 overflow-x-auto">
          <table id="tablesemifinal"
            class="items-center w-full mb-0 align-top border-collapsetext-slate-500"
          >
            <thead class="align-bottom">
              <tr>
                <th
                  class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  #
                </th>
                <th
                  class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Ketua
                </th>
                <th
                  class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Nama Project
                </th>
                <th
                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Nama Tim
                </th>
                
                <th
                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Status
                </th>
                <th
                  class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none  tracking-none whitespace-nowrap text-slate-400 opacity-70"
                ></th>
              </tr>
            </thead>
            <tbody>
             @forelse ($semifinal as $item)
             <tr>
              <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent text-center" >1</td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <div class="flex px-2 py-1">
                 
                  <div class="flex flex-col justify-center">
                    <h6
                      class="mb-0 text-sm leading-normal "
                    >
                     {{$item->name}}
                    </h6>
                    <p
                      class="mb-0 text-xs leading-tight  text-slate-400"
                    >
                    {{$item->email}}
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <p
                  class="mb-0 text-xs font-semibold leading-tight  "
                >
                {{-- {{$item->$berkas->id}} --}}
                {{$item->berkasproject->name_project??'Belum Upload'}}  
              </p>
            
              </td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <p
                  class="mb-0 text-xs font-semibold leading-tight  "
                >
                 {{$item->name_team??'Belum Upload'}}
                </p>
            
              </td>
             
              <td
                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <span
                  class="bg-gradient-to-tl from-blue-600 to-blue-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"
                  >{{$item->status_contest}}</span
                >
              </td>
              
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <a
                  href="{{route('admin.team.edit',['id'=>$item->id])}}"
                  class="text-xs font-semibold leading-tight  text-slate-400"
                >
                  Edit Peringkat
                </a>
              </td>
            </tr>
             @empty
             <tr>
              <td colspan="5" class="p-2 font-bold align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent text-center" >Data Tidak ada</td>
       
            </tr>
             @endforelse
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-none w-full max-w-full px-3">
    <div
      class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border"
    >
      <div
        class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent"
      >
        <h6 class="">List Peserta Final</h6>
      </div>
      <div class="flex-auto px-0 pt-0 pb-2">
        <div class="p-4 overflow-x-auto">
          <table id="tablefinal"
            class="items-center w-full mb-0 align-top border-collapsetext-slate-500"
          >
            <thead class="align-bottom">
              <tr>
                <th
                  class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  #
                </th>
                <th
                  class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Ketua
                </th>
                <th
                  class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Nama Project
                </th>
                <th
                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Nama Tim
                </th>
                
                <th
                  class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"
                >
                  Status
                </th>
                <th
                  class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none  tracking-none whitespace-nowrap text-slate-400 opacity-70"
                ></th>
              </tr>
            </thead>
            <tbody>
             @forelse ($final as $item)
             <tr>
              <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent text-center" >1</td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <div class="flex px-2 py-1">
                 
                  <div class="flex flex-col justify-center">
                    <h6
                      class="mb-0 text-sm leading-normal "
                    >
                     {{$item->name}}
                    </h6>
                    <p
                      class="mb-0 text-xs leading-tight  text-slate-400"
                    >
                    {{$item->email}}
                    </p>
                  </div>
                </div>
              </td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <p
                  class="mb-0 text-xs font-semibold leading-tight  "
                >
                {{-- {{$item->$berkas->id}} --}}
                {{$item->berkasproject->name_project??'Belum Upload'}}  
              </p>
            
              </td>
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <p
                  class="mb-0 text-xs font-semibold leading-tight  "
                >
                 {{$item->name_team??'Belum Upload'}}
                </p>
            
              </td>
             
              <td
                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <span
                  class="bg-gradient-to-tl from-green-600 to-green-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"
                  >{{$item->status_contest}}</span
                >
              </td>
              
              <td
                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent"
              >
                <a
                  href="{{route('admin.team.edit',['id'=>$item->id])}}"
                  class="text-xs font-semibold leading-tight  text-slate-400"
                >
                  Edit Peringkat
                </a>
              </td>
            </tr>
             @empty
             <tr>
              <td colspan="5" class="p-2 font-bold align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent text-center" >Data Tidak ada</td>
       
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