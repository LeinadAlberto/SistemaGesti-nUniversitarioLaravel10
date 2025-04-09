<?php

namespace App\Http\Controllers;

use App\Models\AsignacionMateria;
use Illuminate\Http\Request;

class AsignacionMateriaController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            "matriculacion_id" => "required",
            "materia_id" => "required",
            "turno_id" => "required",
            "paralelo_id" => "required",
        ]);

        $asignacionExistente = AsignacionMateria::where("matriculacion_id", $request->matriculacion_id)
            ->where("materia_id", $request->materia_id)
            ->first();

        if ($asignacionExistente) {
            return redirect()->route("admin.matriculacion.index")
            ->with("mensaje", "Ya existe una asignacion de esta materia en la matriculación")
            ->with("icono", "error");
        }

        $asignacionMateria = new AsignacionMateria();

        $asignacionMateria->matriculacion_id = $request->matriculacion_id;
        $asignacionMateria->materia_id = $request->materia_id;
        $asignacionMateria->turno_id = $request->turno_id;
        $asignacionMateria->paralelo_id = $request->paralelo_id;
        $asignacionMateria->estado = "activo";
        $asignacionMateria->fecha_asignacion = now();

        $asignacionMateria->save();

        return redirect()->route("admin.matriculacion.index")
            ->with("mensaje", "Asignación creada correctamente")
            ->with("icono", "success");
    }

    public function show(AsignacionMateria $asignacionMateria)
    {
        
    }

    public function edit(AsignacionMateria $asignacionMateria)
    {
        
    }

    public function update(Request $request, AsignacionMateria $asignacionMateria)
    {
        
    }

    public function destroy($id)
    {
        $asignacionMateria = AsignacionMateria::findOrFail($id);

        $asignacionMateria->delete();

        return redirect()->route("admin.matriculacion.index")
            ->with("mensaje", "Asignación eliminada correctamente")
            ->with("icono", "success");
    }
}
