<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjumlahanController extends Controller
{
    //
    public function tambah(Request $request){
        $input->validate($request[
            'angka1' => 'required|numeric',
            'angka2' => 'required|numeric',
        ]);

        return view('tambah',['data'=> $request]);
                
    }   
}
