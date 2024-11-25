<?php

namespace App\Http\Controllers;

use App\Models\Manufaktur;
use Illuminate\Http\Request;

class pabrikanController extends Controller
{
    //
    public function showpabrikan(){
        $Manufaktur = Manufaktur::where('Toyota');
        $Manufaktur->cars_id;
    }
}
