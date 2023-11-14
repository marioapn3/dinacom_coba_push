<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'phone_lead'=>'0898867867',
            'student_card'=>'Admin',
            'contest_category'=>'Admin',
            'name_school'=>'UDINUS',
            'name_team'=>'DNCC',
            'email' =>'admin@gmail.com',
            'password' => Hash::make('12133611'),
            'isAdmin'=> 1
        ]);
    }
}
