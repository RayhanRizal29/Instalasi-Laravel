<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    public function Manufaktur(){
        return $this->hasOne(Manufaktur::class,'id_cars'); //foreignkey harus sesuai ditabel
    }

    public function reviews(){
        return $this->hasMany(reviews::class,'id_cars');
    }

    public function fitur()
    {
        return $this->belongsToMany(fitur::class,'pivotcars','cars_id','fitur_id');
    }
}
