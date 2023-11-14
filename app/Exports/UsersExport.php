<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class UsersExport implements  WithColumnFormatting,FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return DB::table('users')
        
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
        ->where('c.status','confirmed')
        ->where('users.isAdmin',0)
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
}
