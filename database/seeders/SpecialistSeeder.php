<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialists')->insert([
            'name' => 'psikiater'
        ]);

        DB::table('specialists')->insert([
            'name' => 'psikolog'
        ]);
    }
}
