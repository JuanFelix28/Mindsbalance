<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'name' => 'dr. Leonardi Armando, Sp.KJ',
            'email' => 'Leonardi@gmail.com',
            'image' => 'doctor1.jpg',
            'specialist_id' => 1,
            'phone' => '085867324516',
            'shortDesc' => 'Dr. Leonardi Armando Goenawan is a Psychiatric Medicine Specialist who has 25 years of experience. Currently, Dr. Leonardi Armando practices at Siloam Hospitals Lippo Village. As a doctor, he has received his education at the Indonesian Catholic University Atma Jaya, and the University of Indonesia. Dr. Leonardi Armando Goenawan is a member of the Association of Indonesian Mental Medicine Specialists. The health services he provides include: Consultation regarding mental health.',
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Nauli Aulia Lubis, M.Ked, Sp.KJ',
            'email' => 'Aulia@gmail.com',
            'image' => 'doctor2.jpg',
            'specialist_id' => 1,
            'phone' => '085861324416',
            'shortDesc' => 'Dr. Nauli Aulia Lubis, M.Ked, Sp.KJ is a Psychiatric Doctor. He is registered as a member of the Association of Indonesian Psychiatric Medicine Specialists (PDSKJI). Dr. Nauli Aulia Lubis has completed her Psychiatric Medicine Specialist education at the University of North Sumatra. Apart from that, he can assist with mental health consultation services.',
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Nindya Nisita, Sp.KJ',
            'email' => 'Nisita@gmail.com',
            'image' => 'doctor3.jpg',
            'specialist_id' => 2,
            'phone' => '081723324416',
            'shortDesc' => 'Dr. Nindya Nisita, Sp.KJ is a Psychiatric Doctor. He completed his medical education as a specialist in mental medicine at the University of Indonesia. Dr. Nindya Nisita is a member of the Association of Indonesian Psychiatric Medicine Specialists (PDSKJI). The health services he can provide include mental health consultations.',
        ]);

        DB::table('doctors')->insert([
            'name' => 'dr. Waskita Roan, Sp.KJ',
            'email' => 'WaskitaR@gmail.com',
            'image' => 'doctor4.jpg',
            'specialist_id' => 2,
            'phone' => '085861123416',
            'shortDesc' => 'Dr. Waskita Roan, Sp.KJ is a psychiatric doctor. He completed his specialist education at the University of Indonesia and graduated in 2004, after previously completing his professional education as a General Practitioner at the Atma Jaya Catholic University of Indonesia. Dr. Waskita Roan is part of the members of the Indonesian Doctors Association and the Association of Indonesian Psychiatric Medicine Specialists. The medical services he can provide include: Consultations regarding mental health.',
        ]);


    }
}
