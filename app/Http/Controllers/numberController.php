<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class numberController extends Controller
{
    //
    public function number($number)
    {
        return $number *2;
    }
    public function penjumlahan(Request $request){
        $validate = $request->validate([
            "angka1"=> "required|numeric",
            "angka2"=> "required|numeric",
        ]);

        // ambil data yg divalidasi
        $angka1 = $validate['angka1'];
        $angka2 = $validate['angka2'];

        $result = $angka1 + $angka2;

        return response()->json([
            'result'=> $result
        ]);
    }
}
