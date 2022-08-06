<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = "libro";
    protected $guarded = ['id'];

    public function category(){
        return $this->hasOne(Editorial::class,'id', 'editorial_id');
    }
}
