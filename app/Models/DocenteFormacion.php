<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocenteFormacion extends Model
{
    use HasFactory;

    protected $table = "docente_formacions";

    protected $fillable = [
        'docente_id',
        'titulo',
        'institucion',
        'nivel',
        'ano_graduacion',
        'archivo'
    ];

    public function docente() 
    {
        return $this->belongsTo(Docente::class);
    }
}
