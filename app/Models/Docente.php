<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = "docentes";

    protected $fillable = [
        'usuario_id',
        'nombres',
        'apellidos',
        'ci',
        'fecha_nacimiento',
        'telefono',
        'profesion',
        'direccion',
        'foto'
    ];

    public function usuario() 
    {
        return $this->belongsTo(User::class);
    }

    public function formacion()
    {
        return $this->hasMany(DocenteFormacion::class);
    }
}
