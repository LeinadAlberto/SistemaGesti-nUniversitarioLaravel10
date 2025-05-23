<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $table = "carreras";

    protected $fillable = [
        "nombre",
    ];

    // Relación con el modelo Materia
    public function materias(): HasMany
    {
        return $this->hasMany(Materia::class, 'carrera_id');
    }

    public function matriculaciones() {
        return $this->hasMany(Matriculacion::class);
    } 
}
