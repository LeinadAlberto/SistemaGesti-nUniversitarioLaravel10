<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    public function usuario() 
    {
        return $this->belongsTo(User::class);
    }

    public function matriculaciones() {
        return $this->hasMany(Matriculacion::class);
    } 
}
