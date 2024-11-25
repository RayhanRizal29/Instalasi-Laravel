<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class carsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  
        DB::table("cars")->insert(
            [
            ['namamobil'=> 'King','harga'=>'9000000'],
            ['namamobil'=> 'Avant','harga'=>'8000000'],
            ['namamobil'=> 'Kijang','harga'=>'2000000'],
            ['namamobil'=> 'BMW','harga'=>'9000000'],
            ['namamobil'=> 'Mercedes M3','harga'=>'3000000'],

        ]);
    }   
}
