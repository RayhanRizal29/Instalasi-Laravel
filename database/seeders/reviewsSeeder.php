<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('reviews')->insert([
                ['namauser'=> 'Ryzen','rating'=>'10','id_cars'=> '1','isi'=> 'Secepat lightning'],
                ['namauser'=> 'Seila','rating'=>'7','id_cars'=> '2','isi'=> 'Peforma baik dan tampilan bagus'],
                ['namauser'=> 'Cindy','rating'=>'3','id_cars'=> '3','isi'=> 'Bensin Boros'],
                ['namauser'=> 'Aulia','rating'=>'9','id_cars'=> '4','isi'=> 'Puas'],
                ['namauser'=> 'Zen','rating'=>'7','id_cars'=> '5','isi'=> 'Standard and normal'],
        ]);

    }
}
