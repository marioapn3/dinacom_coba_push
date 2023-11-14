<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Finalis;
use Illuminate\Http\Request;
use App\Models\BerkasProject;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function finalis()
    {
      
        $semifinal = User::where('status_contest','semifinal')->get();
        $finalis=Finalis::all();
        $juara1=Finalis::where('champion',1)->first();
        $juara2=Finalis::where('champion',2)->first();
        $juara3=Finalis::where('champion',3)->first();
        if($juara1){

            $user1 = User::where('name_team',$juara1->name_team)->first()->id;
            $project1 = BerkasProject::where('user_id',$user1)->first();
        }else{
            $project1 =null;

        }
        if($juara2){

            $user2 = User::where('name_team',$juara2->name_team)->first()->id;
            $project2 = BerkasProject::where('user_id',$user2)->first();
        }else{
            $project2 =null;

        }
        
        if($juara3){

            $user3 = User::where('name_team',$juara3->name_team)->first()->id;
            $project3 = BerkasProject::where('user_id',$user3)->first();
        }else{
            $project3 =null;

        }

        $count=Finalis::all()->count();
        return view('pages.finalis',[
        'count'=>$count,
        'finalis'=>$finalis,
        'semifinal'=>$semifinal,
        'juara1'=>$juara1,
        'juara2'=>$juara2,
        'juara3'=>$juara3,
        'project1'=>$project1,
        'project2'=>$project2,
        'project3'=>$project3,
    ]);
    }
}
