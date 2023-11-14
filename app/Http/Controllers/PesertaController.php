<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Models\BuktiPembayaran;
use Illuminate\Support\Facades\DB;
use App\Models\DeadlinePendaftaran;
use Illuminate\Support\Facades\Auth;
use App\Models\DeadlineUploadProject;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function detail($id)
    {
       
    
        
        $user = User::find($id);
        $dateBerkas = DeadlineUploadProject::find(1);
       
        $tgl = now()->isBefore($dateBerkas->date_limit_upload_project);
        $member = TeamMember::where('user_id',$id)->get();
    
        return view('pages.dashboard.peserta.detail',[
            'member'=>$member,
            'tgl'=>$tgl,
            'user'=>$user,
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function item($id)
    {
       
    
        
        $user = User::find($id);
     
        $memberSatu = TeamMember::where('user_id',$id)->where('member_of',1)->first();
        $memberDua = TeamMember::where('user_id',$id)->where('member_of',2)->first();
     
        return view('pages.dashboard.peserta.edit',[
            'memberSatu'=>$memberSatu,
            'memberDua'=>$memberDua,
            
            'user'=>$user,
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request, $id)
    {     
        $validatedData = $request->validate([
            'nameTeam' => 'required',
            'leadCard' => 'nullable|image',
            'nameSchool' => 'required',
            'phoneMember1' => 'numeric|nullable',
            'phoneMember2' => 'numeric|nullable',
            'phoneMember3' => 'numeric|nullable',
            'cardMember1' => 'nullable|image',
            'cardMember2' => 'nullable|image',
          
            
       
          ],[
          
           'nameTeam.required'=>"Nama Team Harus Di Isi!",
           'nameTeam.unique'=>"Sayangnya, Nama Team ini sudah Diambil Orang lain!",
           'leadCard.image'=>"File harus Berupa Gambar",
           'nameSchool.required'=>"Nama Sekolah Harus Di Isi!",
           'phoneMember1.numeric'=>"Telepon tidak Valid!!",
           'phoneMember2.numeric'=>"Telepon tidak Valid!!",
           'phoneMember3.numeric'=>"Telepon tidak Valid!!",
           'cardMember1.image'=>"File harus Berupa Gambar",
           'cardMember2.image'=>"File harus Berupa Gambar",
          
           
           
          
        ]);
        // dd($request); 
        // $imgname = null;
        
        $user = User::find($id);
        
        // $memberDua = TeamMember::where('user_id',$id)->firstOrNew(array('member_of' =>2));
         if($request->hasFile('leadCard')){
            $desPath='public/images/studentCard';
            $cardImg = $request->file('leadCard');
            $imgname = 'Lead_'.$request->nameTeam.'.'.$cardImg->getClientOriginalExtension();
            $path =  $request->file('leadCard')->storeAs($desPath,$imgname);
            $user->student_card = $imgname;
            
         }
         if($request->hasFile('cardMember1')){
            $desPath='public/images/studentCard';
            $member1 = $request->file('cardMember1');
            $cardmem1 = 'Member_1_'.$request->nameTeam.'.'.$member1->getClientOriginalExtension();
            $path =  $request->file('cardMember1')->storeAs($desPath,$cardmem1);
         }
         if($request->hasFile('cardMember2')){
            $desPath='public/images/studentCard';
            $member2 = $request->file('cardMember2');
            $cardmem2 = 'Member_2_'.$request->nameTeam.'.'.$member2->getClientOriginalExtension();
            $path =  $request->file('cardMember2')->storeAs($desPath,$cardmem2);
         }

         if ($request->nameMember1) {
            # code...

            if(isset($cardmem1)){
                $memberSatu =TeamMember::updateOrCreate(
                   ['user_id' => $id,'member_of' =>1],
                   [
                       'name_member' => 
                       $request->nameMember1,
                       'phone' => $request->phoneMember1,
                       'student_card' => $cardmem1,
                   ]
               );
               
            }else{
                $memberSatu =TeamMember::updateOrCreate(
                   ['user_id' => $id,'member_of' =>1],
                   [
                       'name_member' => 
                       $request->nameMember1,
                       'phone' => $request->phoneMember1,
                   
                       
                   ]
               );
                
            }
            $memberSatu->save();
         }
        if ($request->nameMember2) {
            # code...
            if(isset($cardmem2)){
                $memberDua =TeamMember::updateOrCreate(
                    ['user_id' => $id,'member_of' =>2],
                    [
                        'name_member' => 
                        $request->nameMember2,
                        'phone' => $request->phoneMember2,
                        'student_card' => $cardmem2,
                    ]
                );
            }else{
                $memberDua =TeamMember::updateOrCreate(
                    ['user_id' => $id,'member_of' =>2],
                    [
                        'name_member' => 
                        $request->nameMember2,
                        'phone' => $request->phoneMember2,
                                      ]
                );
            }
            $memberDua->save();
        }
         
         
        //  if($request->nameMember1){
        //     $memberSatu->name_member = $request->nameMember1;
        //     $memberSatu->user_id = $user->id;
           
        //  }
        //  if($request->phoneMember1){
        //     $memberSatu->phone = $request->phoneMember1;
        //  }
        //  if(isset($cardmem1)){
        //     $memberSatu->student_card = $cardmem1;
        //  }
        //  if($request->nameMember2){
        //     $memberDua->name_member = $request->nameMember2;
        //     $memberDua->user_id = $user->id;
        //  }
        //  if($request->phoneMember2){
        //     $memberDua->phone = $request->phoneMember2;
        //  }
        //  if(isset($cardmem2)){
        //     $memberDua->student_card = $cardmem2;
        //  }
        //  if ($request->nameMember1 && !$request->nameMember2) {
        //     DB::table('team_members')->insert([
        //         ['user_id' => $id, 'member_of' =>1, 'name_member' => $request->nameMember1, 'phone' =>  $request->phoneMember1, 'student_card' =>  $cardmem1],
                
        //     ]);
           
        //  }else if ($request->nameMember1 && $request->nameMember2) {
        //     DB::table('team_members')->insert([
        //         ['user_id' => $id, 'member_of' =>1, 'name_member' => $request->nameMember1, 'phone' =>  $request->phoneMember1, 'student_card' =>  $cardmem1],
        //         ['user_id' => $id, 'member_of' => 2, 'name_member' => $request->nameMember2, 'phone' =>  $request->phoneMember2, 'student_card' =>  $cardmem2],
                
        //     ]);
        //  }
        $user->name  = $request->name; 
         $user->name_school  = $request->nameSchool;
         $user->name_team = $request->nameTeam;
         $user->tutor = $request->teamMentor;
         $user->save();
      
 

         
        return redirect()->route('peserta.index')->with('toast_success', 'Data Peserta berhasil di Update');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    
        
        $user = User::find($id);
        $bukti = BuktiPembayaran::where('user_id',$id)->first();
        $date = DeadlinePendaftaran::find(1);
        $tgl=$date->deadline_register_event;
        $deadline = now()->isBefore($date->deadline_register_event);
        return view('pages.dashboard.peserta.index',[
            'deadline'=>$deadline,
            'tgl'=>$tgl,
            'bukti'=>$bukti,
            'user'=>$user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('pages.dashboard.peserta.create',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {     
        $validatedData = $request->validate([
            'nameTeam' => 'required|unique:users,name_team',
            'leadCard' => 'required|image',
            'nameSchool' => 'required',
            'phoneMember1' => 'numeric|nullable',
            'phoneMember2' => 'numeric|nullable',
            'phoneMember3' => 'numeric|nullable',
            'cardMember1' => 'nullable|image',
            'cardMember2' => 'nullable|image',
          
            
       
          ],[
          
           'nameTeam.required'=>"Nama Team Harus Di Isi!",
           'nameTeam.unique'=>"Sayangnya, Nama Team ini sudah Diambil Orang lain!",
           'leadCard.required'=>"Kartu Identitas Harus Di Isi!",
           'leadCard.image'=>"File harus Berupa Gambar",
           'nameSchool.required'=>"Nama Sekolah Harus Di Isi!",
           'phoneMember1.numeric'=>"Telepon tidak Valid!!",
           'phoneMember2.numeric'=>"Telepon tidak Valid!!",
           'phoneMember3.numeric'=>"Telepon tidak Valid!!",
           'cardMember1.image'=>"File harus Berupa Gambar",
           'cardMember2.image'=>"File harus Berupa Gambar",
          
           
           
          
        ]);
        // dd($request); 
        // $imgname = null;
        
        $user = User::find($id);
         if($request->hasFile('leadCard')){
            $desPath='public/images/studentCard';
            $cardImg = $request->file('leadCard');
            $imgname = 'Lead_'.$request->nameTeam.'.'.$cardImg->getClientOriginalExtension();
            $path =  $request->file('leadCard')->storeAs($desPath,$imgname);
            $user->student_card = $imgname;
            
         }
         if($request->hasFile('cardMember1')){
            $desPath='public/images/studentCard';
            $member1 = $request->file('cardMember1');
            $cardmem1 = 'Member_1_'.$request->nameTeam.'.'.$member1->getClientOriginalExtension();
            $path =  $request->file('cardMember1')->storeAs($desPath,$cardmem1);
         }
         if($request->hasFile('cardMember2')){
            $desPath='public/images/studentCard';
            $member2 = $request->file('cardMember2');
            $cardmem2 = 'Member_2_'.$request->nameTeam.'.'.$member2->getClientOriginalExtension();
            $path =  $request->file('cardMember2')->storeAs($desPath,$cardmem2);
         }
         if($request->hasFile('cardMember3')){
            $desPath='public/images/studentCard';
            $member3 = $request->file('cardMember3');
            $cardmem3 = 'Member_3_'.$request->nameTeam.'.'.$member3->getClientOriginalExtension();
            $path =  $request->file('cardMember3')->storeAs($desPath,$cardmem3);
         }
         if ($request->nameMember1 && !$request->nameMember2) {
            DB::table('team_members')->insert([
                ['user_id' => $id, 'member_of' =>1, 'name_member' => $request->nameMember1, 'phone' =>  $request->phoneMember1, 'student_card' =>  $cardmem1],
                
            ]);
           
         }else if ($request->nameMember1 && $request->nameMember2) {
            DB::table('team_members')->insert([
                ['user_id' => $id, 'member_of' =>1, 'name_member' => $request->nameMember1, 'phone' =>  $request->phoneMember1, 'student_card' =>  $cardmem1],
                ['user_id' => $id, 'member_of' => 2, 'name_member' => $request->nameMember2, 'phone' =>  $request->phoneMember2, 'student_card' =>  $cardmem2],
                
            ]);
         }
        
  
         $user->name_school  = $request->nameSchool; 
         $user->name_team = $request->nameTeam;
         $user->tutor = $request->teamMentor;
         $user->save();
        return redirect()->route('peserta.index')->with('toast_success', 'Data peserta berhasil diTambahkan');
    }
    public function editpay($id)
    {
        $data = User::find($id);
     
        $bukti=BuktiPembayaran::where('user_id',$id)->first();
        return view('pages.dashboard.peserta.editpay',['data'=>$data,
        'bukti'=>$bukti]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepay(Request $request, $id)
    {
        $data = User::find($id);
        $proof = BuktiPembayaran::firstOrNew(array('user_id' => $id));
         if($request->hasFile('paymentProof')){
            $desPath='public/images/Payment';
            $cardImg = $request->file('paymentProof');
            $imgname = $data->name_team.'_ProofOfPayment.'.$cardImg->getClientOriginalExtension();
            $path =  $request->file('paymentProof')->storeAs($desPath,$imgname);
            $proof->proof_of_payment = $imgname;
            $proof->user_id = $id;
            $proof->status = 'waiting';
         }
         $proof->save();
        return redirect()->route('peserta',['id'=>$id])->with('toast_success', 'Bukti Bemayaran Berhasi Di simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$no)
    {
        $member = TeamMember::where('user_id',$id)->where('member_of',$no)->first();
        $member->delete();
        return redirect()->back()->with('toast_error', 'Data Peserta berhasil di Update');
    }
}
