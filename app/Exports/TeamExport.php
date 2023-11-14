<?php

namespace App\Exports;

use App\Models\User;
use App\Models\TeamMember;
use App\Models\BuktiPembayaran;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class TeamExport implements WithColumnFormatting,FromCollection,WithHeadings,ShouldAutoSize,WithDrawings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;
    
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    public function collection()
    {
        return DB::table('users')->where('users.id',$this->id)
        
        ->leftJoin('berkas_projects', 'users.id', '=', 'berkas_projects.user_id')
        ->leftJoin('team_members as b','users.id', '=', 'b.user_id')
        ->leftJoin('bukti_pembayarans as c','users.id','=' ,'c.user_id')->select(
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
        ->get();
    }
    
  
    public function columnFormats(): array
    {
        return [
            'P' => NumberFormat::FORMAT_NUMBER,
            'Q' => NumberFormat::FORMAT_NUMBER,
        ];
    }
    public function headings(): array
    {
        return [
            'Nama Ketua',
            'Telepon Ketua',
            'Email Ketua',
            'File KP Ketua',
            'Asal Sekolah',
            'Nama Team',
            'Nama Pembimbing Team',
            'Nama Aplikasi',
            'Maslah Awal',
            'Solusi',
            'Target Pasar',
            'Keunikan Produk',
            'Potensi Aplikasi',
            'Fitur dan Fungsi Aplikasi',
            'Kualitas Dan metode Pengembangan',
            'Biaya Pengeluaran',
            'Biaya Pemasukan',
            'URL Proposal',
            'URL Project',
            'Nama Member',
            'Telepon Member',
            'File KP Member',
            'No Member',
         
            
        ];
    }
    public function drawings()
    {
        $user= User::find($this->id);
        $member1= TeamMember::where('user_id',$this->id)->where('member_of',1)->first();
        // dd($member1);
        if ($member1!=null) {
            # code...
            $drawing = new Drawing();
            $drawing->setName('KP_member1_'.$user->name_team);
            $drawing->setDescription('Kartu Identitas');
            $drawing->setPath(public_path('/storage/images/studentCard/'.$member1->student_card));
            $drawing->setHeight(300);
            $drawing->setCoordinates('E6');
        }
        $member2= TeamMember::where('user_id',$this->id)->where('member_of',2)->first();
        // dd($member2);
        if ($member2!=null) {
            # code...
            $drawing2 = new Drawing();
            $drawing2->setName('KP_member2_'.$user->name_team);
            $drawing2->setDescription('Kartu Identitas');
            $drawing2->setPath(public_path('/storage/images/studentCard/'.$member2->student_card));
            $drawing2->setHeight(300);
            $drawing2->setCoordinates('I6');
        }
        $bukti = BuktiPembayaran::where('user_id',$this->id)->first();
        $drawing3 = new Drawing();
            $drawing3->setName('Bukti_TF_'.$user->name_team);
            $drawing3->setDescription('Bukti Pembayaran');
            $drawing3->setPath(public_path('/storage/images/Payment/'.$bukti->proof_of_payment));
            $drawing3->setHeight(300);
            $drawing3->setCoordinates('M6');

           
            $drawing4 = new Drawing();
            $drawing4->setName('KP_Ketua_'.$user->name_team);
            $drawing4->setDescription('Kartu Identitas');
            $drawing4->setPath(public_path('/storage/images/studentCard/'.$user->student_card));
            $drawing4->setHeight(300);
            $drawing4->setCoordinates('A6');

        if ($member1!=null&&$member2==null) {
            # code...
            return [$drawing,$drawing3,$drawing4];
        }elseif ($member1  != null && $member2 != null) {
            return [$drawing,$drawing2,$drawing3,$drawing4];
            # code...
        }else{
            return [$drawing3,$drawing4];
        }

    }
}
