<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
        ]);   // \App\Models\User::factory(10)->create();

        DB::table('deadline_pendaftarans')->insert([
            'deadline_register_event' => "1945-01-01",
        ]);
    }
}
