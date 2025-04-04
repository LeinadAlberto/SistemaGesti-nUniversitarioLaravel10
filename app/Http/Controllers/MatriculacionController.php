<?php

namespace App\Http\Controllers;

use App\Models\Matriculacion;
use App\Models\Estudiante;
use App\Models\Gestion;
use App\Models\Nivel;
use App\Models\Periodo;
use App\Models\Carrera;
use Illuminate\Http\Request;

class MatriculacionController extends Controller
{
    public function index()
    {
        $matriculaciones = Matriculacion::all();

        return view("admin.matriculaciones.index", compact("matriculaciones"));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        $gestiones = Gestion::all();
        $niveles = Nivel::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();

        return view("admin.matriculaciones.create", compact("estudiantes", "gestiones", "niveles", "periodos", "carreras"));
    }

    public function buscar_estudiante($id) 
    {
        $estudiante = Estudiante::with("usuario", "matriculaciones")->find($id);

        if (!$estudiante) {
            return response()->json(["error" => "Estudiante no encontrado"]);
        }

        $estudiante->foto_url = url($estudiante->foto);

        return response()->json($estudiante);
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos);  */

        $request->validate([
            "estudiante_id" => "required",
            "gestion_id" => "required",
            "nivel_id" => "required",
            "periodo_id" => "required",
            "carrera_id" => "required"
        ]);

        $matriculacion = new Matriculacion();

        $matriculacion->estudiante_id = $request->estudiante_id;
        $matriculacion->gestion_id = $request->gestion_id;
        $matriculacion->nivel_id = $request->nivel_id;
        $matriculacion->periodo_id = $request->periodo_id;
        $matriculacion->carrera_id = $request->carrera_id;
        $matriculacion->fecha_matriculacion = now();

        $matriculacion->save();

        return redirect()->route("admin.matriculacion.index")
            ->with("mensaje", "Matriculación creada correctamente")
            ->with("icono", "success");
    }

    public function show(Matriculacion $matriculacion)
    {
        
    }

    public function edit(Matriculacion $matriculacion)
    {
        
    }

    public function update(Request $request, Matriculacion $matriculacion)
    {
        
    }

    public function destroy(Matriculacion $matriculacion)
    {
        
    }
}
