<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
        return 'buku';
    }
    // buat controller dengan parameter
    public function show($nobuku){
        return 'nomor buku ini adalah'. $nobuku;
    }   
    public function store(Request $request){
        $judulbuku = $request->input('judulbuku');
    }
    
}
