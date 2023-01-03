<?php

namespace Database\Seeders;

use Faker\Provider\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            'player_id' => 1,
            'reporter' => 2,
            'event_time' => now(),
            'violations' => json_encode([1,3,4])
        ]);
    }
}
