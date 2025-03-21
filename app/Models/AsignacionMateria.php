<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionMateria extends Model
{
    use HasFactory;

    public function matriculacion() {
        return $this->belongsTo(Matriculacion::class);
    }

    public function materia() {
        return $this->belongsTo(Materia::class);
    }

    public function turno() {
        return $this->belongsTo(Turno::class);
    }

    public function paralelo() {
        return $this->belongsTo(Paralelo::class);
    }
}
