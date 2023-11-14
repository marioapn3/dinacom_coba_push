<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Finalis;
use App\Models\TeamMember;
use App\Exports\TeamExport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Models\BerkasProject;
use App\Models\BuktiPembayaran;
use App\Models\DeadlinePendaftaran;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\DeadlineUploadProject;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $batasDaftar = null;
        $batasBerkas = null;
        $deadlineBerkas = DeadlineUploadProject::find(1);
        if ($deadlineBerkas) {
            $batasBerkas = $deadlineBerkas->first()->date_limit_upload_project;
        }
        $deadlineDaftar = DeadlinePendaftaran::find(1);
        // dd( $deadlineDaftar
        if ($deadlineDaftar) {
            $batasDaftar = $deadlineDaftar->first()->deadline_register_event;
        }
        $countPeserta = User::where('isAdmin', 0)->get()->count();
        $countConfirmed = BuktiPembayaran::where('status', 'confirmed')->get()->count();
        $countWaiting = BuktiPembayaran::where('status', 'waiting')->get()->count();

        $finalis = Finalis::all();
        return view('pages.Admin.index', [
            'batasBerkas' => $batasBerkas,
            'batasDaftar' => $batasDaftar,
            'finalis' => $finalis,
            'countPeserta' => $countPeserta,
            'countConfirmed' => $countConfirmed,
            'countWaiting' => $countWaiting,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function editPendaf()
    {
        $batasDaftar = null;
        $deadlineDaftar = DeadlinePendaftaran::find(1);
        if ($deadlineDaftar) {
            $batasDaftar = $deadlineDaftar->first()->deadline_register_event;
        }
        return view('pages.Admin.deadline.EditPendaf', ['batasDaftar' => $batasDaftar]);
    }
    public function editBerkas()
    {
        $batasBerkas = null;
        $deadlineBerkas = DeadlineUploadProject::find(1);
        if ($deadlineBerkas) {
            $batasBerkas = $deadlineBerkas->first()->date_limit_upload_project;
        }
        return view('pages.Admin.deadline.editBerkas', ['batasBerkas' => $batasBerkas]);
    }


    //datapeserta
    public function dataPeserta()
    {

        $peserta = User::where('isAdmin', 0)->get();
        $finalis = Finalis::all();
        
        return view('pages.Admin.peserta.index', ['peserta' => $peserta, 'finalis' => $finalis]);
    }


    public function statusPeserta($id)
    {
        $peserta = User::where('id', $id)->first();
        $finalis = Finalis::all();
        $member = TeamMember::where('user_id', $id)->get();
        $project = BerkasProject::where('user_id', $id)->first();
        $proof = BuktiPembayaran::where('user_id', $id)->first();
        return view('pages.Admin.peserta.edit', [
            'peserta' => $peserta,
            'proof' => $proof,
            'member' => $member,
            'project' => $project,
        ]);
    }


    public function finalis()
    {
        $peserta = User::with(['berkasproject'])->where('status_contest', 'final')->get();

        $finalis = Finalis::all();


        return view('pages.Admin.finalis.index', ['peserta' => $peserta, 'finalis' => $finalis]);
    }

    public function editfinalis($id)
    {
        $peserta = User::where('id', $id)->first();
        $finalis = Finalis::all();

        return view('pages.Admin.finalis.edit', ['peserta' => $peserta, 'finalis' => $finalis]);
    }

    public function updatePayment(Request $request, $id)
    {
        // dd($request);
        $proof = BuktiPembayaran::where('user_id', $id)->first();
        // dd($deadline);
        $proof->status = $request->payStat;
        $proof->save();
        return redirect()->back();
    }

    public function storefinalis(Request $request)
    {
        // dd($request);
        $finalist = Finalis::firstOrNew(array('name_team' => $request->team_name));
        // dd($deadline);
        $finalist->champion = $request->podium;
        $finalist->save();
        return redirect()->route('admin');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDaftar(Request $request)
    {
        $deadline = DeadlinePendaftaran::firstOrNew(array('id' => 1));
        // dd($deadline);
        $deadline->deadline_register_event = $request->deadlinePendaf;
        $deadline->save();
        return redirect()->route('admin');
    }
    public function storeBerkas(Request $request)
    {
        $deadline = DeadlineUploadProject::firstOrNew(array('id' => 1));
        // dd($deadline);
        $deadline->date_limit_upload_project = $request->deadlineBerkas;
        $deadline->save();
        return redirect()->route('admin');
    }


    public function teamStatus()
    {
        $final = User::where('status_contest', 'final')->where('isAdmin', 0)->get();
        $pending = User::where('status_contest', 'pending')->where('isAdmin', 0)->get();
        $penyisihan = User::where('status_contest', 'penyisihan')->where('isAdmin', 0)->get();
        $semifinal = User::where('status_contest', 'semifinal')->where('isAdmin', 0)->get();


        return view('pages.Admin.TeamStatus.index', [
            'final' => $final,
            'pending' => $pending,
            'penyisihan' => $penyisihan,
            'semifinal' => $semifinal,
        ]);
    }
    public function teamEdit($id)
    {
        $data = User::find($id);



        return view('pages.Admin.TeamStatus.edit', [
            'data' => $data,

        ]);
    }
    public function teamUpdate(Request $request, $id)
    {
        // dd($request);
        $team = User::find($id);
        // dd($deadline);
        $team->status_contest = $request->team_status;
        $team->save();
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function Teamexport($id)
    {
        $user=User::find($id);
        return Excel::download(new TeamExport($id), $user->name_team.'_users.xlsx');
    }
}
