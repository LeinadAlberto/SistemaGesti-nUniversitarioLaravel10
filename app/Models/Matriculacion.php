<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriculacion extends Model
{
    use HasFactory;

    public function estudiante() {
        return $this->belongsTo(Estudiante::class);
    }

    public function gestion() {
        return $this->belongsTo(Gestion::class);
    }

    public function nivel() {
        return $this->belongsTo(Nivel::class);
    }

    public function periodo() {
        return $this->belongsTo(Periodo::class);
    }

    public function carrera() {
        return $this->belongsTo(Carrera::class);
    }

    public function asignacionMaterias() {
        return $this->hasMany(AsignacionMateria::class);
    } 
}
