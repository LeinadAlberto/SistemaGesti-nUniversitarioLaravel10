<?php

namespace App\Http\Controllers;

use App\Models\Administrativo;
use App\Models\Gestion;
use App\Models\Carrera;
use App\Models\Nivel;
use App\Models\Turno;
use App\Models\Paralelo;
use App\Models\Periodo;
use App\Models\Materia;
use App\Models\Docente;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
        $total_gestiones = Gestion::count();
        $total_carreras = Carrera::count();
        $total_niveles = Nivel::count();
        $total_turnos = Turno::count();
        $total_paralelos = Paralelo::count();
        $total_periodos = Periodo::count();
        $total_materias = Materia::count();
        $total_roles = Role::count();
        $total_administrativos = Administrativo::count();
        $total_docentes = Docente::count();
        $total_estudiantes = Estudiante::count();

        return view("admin.index", compact( 'total_gestiones', 
                                            'total_carreras', 
                                            'total_niveles', 
                                            'total_turnos', 
                                            'total_paralelos', 
                                            'total_periodos', 
                                            'total_materias',
                                            'total_roles',
                                            'total_administrativos',
                                            'total_docentes',
                                            'total_estudiantes'));
    }
}
