<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('fitur')->insert([
            ['fitur'=>'Keyless','id_cars'=> '1'],
            ['fitur'=>'Smart Navigation','id_cars'=> '2'],
            ['fitur'=>'Irit bahan bakar','id_cars'=> '3'],
            ['fitur'=>'Dahsboard Camera','id_cars'=> '4'],
            ['fitur'=>'Alarm Parking','id_cars'=> '5'],

        ]);
    }
}
