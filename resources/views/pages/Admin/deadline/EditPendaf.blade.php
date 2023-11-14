@extends('layouts.admin')


@section('content')

    <!-- card1 -->
  

<!-- cards row 2 -->
<div class="flex flex-wrap mt-6 -mx-3 h-screen">
    <div class="w-full max-w-full px-3 mt-0  lg:flex-none">
        <div
            class="border-black/12.5  shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                <h6 class="capitalize ">Deadline Pendaftaran</h6>
              
            </div>
            <div class="flex-auto p-4">
               <form method ="POST" action="{{route('admin.deadlinependaf.store')}}">
                @method('PUT')
                @csrf
                <div class="relative">
                    <input type="date" name="deadlinePendaf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mb-4" value="{{old('deadlinePendaf')??$batasDaftar}}" id="">
                
                    <button class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 mb-2"type="submit">Submit</button>
                     </div>
           
               </form>
            </div>
        </div>
    </div>
    
   
</div>

@endsection