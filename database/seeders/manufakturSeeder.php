<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class manufakturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("manufaktur")->insert([
            ['pabrikan'=> 'Toyota','negara'=>'Japan','id_cars'=> '1'],
            ['pabrikan'=> 'Porsce','negara'=>'Jerman','id_cars'=> '2'],
            ['pabrikan'=> 'Daihatsu','negara'=>'Japan','id_cars'=> '3'],
            ['pabrikan'=> 'BMW','negara'=>'Germany','id_cars'=> '4'],
            ['pabrikan'=> 'Mercedes Benz','negara'=>'UK','id_cars'=> '5'],

        ]);
    }
}
