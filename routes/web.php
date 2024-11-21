<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PerkalianController;
use App\Http\Controllers\RequestController;
use Illuminate\Http\Request;
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

Route::get('/ping', function () {
    return 'pong';
});

// // ROUTING PARAMETERS
// Route::get('/parameter/{id}', function ($id) {
//     return 'user'. $id;
// });

// ROuting Parameter perkalian
Route::get('/perkalian/{angka}', function ($angka) {
    return 'hasil'. $angka *2;
});

// CONTROLLER buku cont
Route::get('/bookcont', [BookController::class, 'index'] );

// CONTROLLER WITH PARAMETER
// Route::get('/bukuparameter/{nobuku}', [BookController::class,'show'] );

// REQUEST PENJUMLAHAN ANTAR 2 Parameter
Route::get('/tambah',function(Request $request) {
    $validate = $request->validate([
        'angka1'=> 'required|numeric',
        'angka2'=> 'required|numeric',
        
    ]);
    
    $angka1 = $request->query('angka1',0);
    $angka2 = $request->query('angka2',0);

    $hasil  = $angka1 + $angka2;

    return view('tambah',compact('angka1','angka2','hasil'));   
});

// RESPONS SIMPLE
Route::get('respontes',function(){
    return 'hello';
});

// REDIRECT RESPONS
Route::get('/dashboard',function(){
    return redirect('home/dashboard');
});

// VIEWS
Route::get('/hello', function(){
    return view('hello',['name'=>'Rizal']);
});