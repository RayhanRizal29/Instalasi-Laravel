<?php

use App\Http\Controllers\carController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\helloController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\numberController;
use App\Http\Controllers\pabrikanController;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello',function(){
//     return('hello');
// });

Route::get('/hello',[helloController::class,'index']);

// Route::get('/number/{number}',function($number){ //PERKLIAN URL
//     return $number*2;
// });

Route::get('/number/{number}',[numberController::class,'number']);

Route::post('/penjumlahan',[numberController::class,'penjumlahan']);

Route::get('/showcar',[carController::class,'showcar']);

Route::get('/showpabrikan',[carController::class,'showcar']);

Route::get('/showreviews',[carController::class,'reviews']);

Route::get('/pivotcars',[carController::class,'pivotcars']);

// Route::get('/reviews/{}',[CarController::class,'reviews']);

