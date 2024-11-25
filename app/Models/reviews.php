<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;

    public function Cars()
    {
        return $this->belongsTo(reviews::class,'id_cars');
    }
}
