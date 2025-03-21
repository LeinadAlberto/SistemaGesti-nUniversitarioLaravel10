<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materia extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional, si sigue la convención de nombres de Laravel)
    protected $table = 'materias';

    // Campos asignables masivamente (opcional)
    protected $fillable = ['carrera_id', 'nombre', 'codigo'];

    // Relación con el modelo Carrera
    public function carrera(): BelongsTo
    {
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }

    public function asignacionMaterias() {
        return $this->hasMany(AsignacionMateria::class);
    } 
}
