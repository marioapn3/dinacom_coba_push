<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BerkasProject;
use App\Models\BuktiPembayaran;
use Illuminate\Support\Facades\DB;
use App\Models\DeadlinePendaftaran;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Models\DeadlineUploadProject;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dateBerkas = DeadlineUploadProject::find(1);
        $user = User::find(Auth::user()->id);
        $bukti = BuktiPembayaran::where('user_id',Auth::user()->id)->where('status','confirmed')->first();
        $dateDaftar = DeadlinePendaftaran::find(1);
        $tgldaftar=$dateDaftar->deadline_register_event;
        $tglberkas=$dateBerkas->date_limit_upload_project;
        $deadlineDaftar = now()->isBefore($dateDaftar->deadline_register_event);
      
        
        $deadline = now()->isBefore($dateBerkas->date_limit_upload_project);
        $berkas = BerkasProject::where('user_id',Auth::user()->id)->first();
        $Countberkas = BerkasProject::where('user_id',Auth::user()->id)->get()->count();
        return view('pages.dashboard.berkas.index',[
            'berkas'=>$berkas,
            'Countberkas'=>$Countberkas,
            'deadline'=>$deadline,
            'deadlineDaftar'=>$deadlineDaftar,
            'tgldaftar'=>$tgldaftar,
            'tglberkas'=>$tglberkas,
            'bukti'=>$bukti,
            'user'=>$user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('hi');
        return view('pages.dashboard.berkas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        // dd($request);
        $validatedData = $request->validate([
            'namaApp' => 'required',
            'AppProblem' => 'required',
            'solusi' => 'required',
            'market' => 'required',
            'AppUnique' => 'required',
            'AppPotency' => 'required',
            'AppFeatures' => 'required',
            'AppQuality' => 'required',
            'AppExpenses' => 'required|numeric',
            'Appfee' => 'required|numeric',
            'AppURL' => 'required',
            'AppProposal' => 'required',
           
             
          ],[
            'namaApp.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppProblem.required' => 'Kolom ini Tidak Boleh Kosong',
            'solusi.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppUnique.required' => 'Kolom ini Tidak Boleh Kosong',
            'market.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppPotency.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppFeatures.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppQuality.required' => 'Kolom ini Tidak Boleh Kosong',
            'Appfee.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppExpenses.required' => 'Kolom ini Tidak Boleh Kosong',
            'Appfee.numeric' => 'Value Tidak Valid',
            'AppExpenses.numeric' => 'Value Tidak Valid',
            'AppURL.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppProposal.required' => 'Kolom ini Tidak Boleh Kosong',
          
        ]);
        $berkas = new BerkasProject();
        $berkas->user_id=$id;
        $berkas->name_project=$request->namaApp;
        $berkas->problem=$request->AppProblem;
        $berkas->solution=$request->solusi;
        $berkas->user_goals=$request->market;
        $berkas->product_uniqueness=$request->AppUnique;
        $berkas->market_potential=$request->AppPotency;
        $berkas->feature_and_function=$request->AppFeatures;
        $berkas->quality_and_method_dev=$request->AppQuality;
        $berkas->expenses=$request->AppExpenses;
        $berkas->entrance_fee=$request->Appfee;
        $berkas->status=1;
        $berkas->url_project=$request->AppURL;
        $berkas->url_proposal=$request->AppProposal;
        $berkas->save();
        return redirect()->route('berkas')->with('toast_success', 'Data Berhasil Tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dateBerkas = DeadlineUploadProject::find(1);
        $berkas = BerkasProject::where('user_id',Auth::user()->id)->first();
        $deadline = now()->isBefore($dateBerkas->date_limit_upload_project);
        return view('pages.dashboard.berkas.detail',['berkas'=>$berkas,'deadline'=>$deadline]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berkas = BerkasProject::where('user_id',Auth::user()->id)->first();
        return view('pages.dashboard.berkas.edit',['berkas'=>$berkas]);
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
         // dd($request);
         $validatedData = $request->validate([
            'namaApp' => 'required',
            'AppProblem' => 'required',
            'solusi' => 'required',
            'market' => 'required',
            'AppUnique' => 'required',
            'AppPotency' => 'required',
            'AppFeatures' => 'required',
            'AppQuality' => 'required',
            'AppExpenses' => 'required|numeric',
            'Appfee' => 'required|numeric',
            'AppURL' => 'required',
            'AppProposal' => 'required',
           
             
          ],[
            'namaApp.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppProblem.required' => 'Kolom ini Tidak Boleh Kosong',
            'solusi.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppUnique.required' => 'Kolom ini Tidak Boleh Kosong',
            'market.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppPotency.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppFeatures.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppQuality.required' => 'Kolom ini Tidak Boleh Kosong',
            'Appfee.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppExpenses.required' => 'Kolom ini Tidak Boleh Kosong',
            'Appfee.numeric' => 'Value Tidak Valid',
            'AppExpenses.numeric' => 'Value Tidak Valid',
            'AppURL.required' => 'Kolom ini Tidak Boleh Kosong',
            'AppProposal.required' => 'Kolom ini Tidak Boleh Kosong',
          
        ]);
        $berkas = BerkasProject::where('user_id',$id)->first();
        
        $berkas->name_project=$request->namaApp;
        $berkas->problem=$request->AppProblem;
        $berkas->solution=$request->solusi;
        $berkas->user_goals=$request->market;
        $berkas->product_uniqueness=$request->AppUnique;
        $berkas->market_potential=$request->AppPotency;
        $berkas->feature_and_function=$request->AppFeatures;
        $berkas->quality_and_method_dev=$request->AppQuality;
        $berkas->expenses=$request->AppExpenses;
        $berkas->entrance_fee=$request->Appfee;
        $berkas->status=1;
        $berkas->url_project=$request->AppURL;
        $berkas->url_proposal=$request->AppProposal;
        $berkas->save();
        return redirect()->route('berkas')->with('toast_success', 'Data behasil Di Ubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $users = DB::table('users')
        ->select(
            'users.name',
            'users.phone_lead',
            'users.email',
            'users.student_card as Kartu_Ketua',
            'users.name_school',
            'users.name_team',
            'users.tutor', 
            'berkas_projects.name_project', 
            'berkas_projects.problem', 
            'berkas_projects.solution', 
            'berkas_projects.user_goals', 
            'berkas_projects.product_uniqueness', 
            'berkas_projects.market_potential', 
            'berkas_projects.feature_and_function', 
            'berkas_projects.quality_and_method_dev', 
            'berkas_projects.expenses', 
            'berkas_projects.entrance_fee', 
            'berkas_projects.url_proposal', 
            'berkas_projects.url_project', 
            'b.name_member',
            'b.phone',
            'b.student_card',
            'b.member_of',
            )
            ->join('berkas_projects', 'users.id', '=', 'berkas_projects.user_id')
            ->join('team_members as b','users.id', '=', 'b.user_id')
            ->join('bukti_pembayarans as c','users.id','=' ,'c.user_id')
            ->where('c.status','confirmed')
            ->get();
        // $users = DB::table('users')
        // ->select('users.*', 'berkas_projects.*', 'b.*', 'z.*')
        //     ->join('berkas_projects', 'users.id', '=', 'berkas_projects.user_id')
        //     ->join('team_members as z', function ($join) {
        //         $join->on('users.id', '=', 'z.user_id')
        //              ->where('z.member_of', '=', 2);
        //     })
        //     ->join('team_members as b', function ($join) {
        //         $join->on('users.id', '=', 'b.user_id')
        //              ->where('b.member_of', '=', 1);
        //     })
        //     ->get();
// /SELECT * from users LEFT JOIN team_members as b ON users.id = b.user_id and b.member_of = 1 LEFT JOIN team_members as a ON users.id = a.user_id and a.member_of = 2; 
            dd($users);
    }
}
