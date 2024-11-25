<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Cars;
use Illuminate\Http\Request;

class carController extends Controller
{
    //
    public function showcar()
    {
        // ambil dari tabel Cars
        $cars = Cars::find(1);

// mengambil data mobil kemudian ambil data tabel manufaktur
        $cars->manufaktur;

        return $cars;
    }   
    public function reviews()
    {
        // ambil data dari table Cars
        $cars = Cars::find(1);
        $cars->reviews;

        return $cars;
    }

    public function pivotcars(){
        $cars = Cars::find(1);
        $fitur = $cars->fitur;

        return $fitur;
    }
}
