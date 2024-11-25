<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fitur extends Model
{
    use HasFactory;

    // Protected ini WAJIB jika tanpa s
    protected $table = 'fitur';
    protected $fillable = ['fitur'];

    public function Cars(){
        return $this->belongsToMany(Cars::class,'pivotcars','cars_id','fitur_id');
    }
}
