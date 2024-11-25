<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufaktur extends Model
{
    use HasFactory;

    protected $table ='manufaktur';

    public function Cars()
    {
        return $this->belongsTo(Cars::class,'id_cars');
    }
}
