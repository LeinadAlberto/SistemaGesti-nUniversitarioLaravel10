<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Carrera;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();

        return view('admin.materias.index', compact('materias'));
    }

    public function create()
    {
        $carreras = Carrera::all();

        return view('admin.materias.create', compact('carreras'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'carrera_id' => 'required|exists:carreras,id',
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50'
        ]);

        Materia::create($request->all());

        return redirect()->route("admin.materia.index")
            ->with("mensaje", "Materia creada correctamente")
            ->with("icono", "success");
    }

    public function edit($id)
    {
        $materia = Materia::find($id);

        $carreras = Carrera::all();

        return view('admin.materias.edit', compact('materia', 'carreras'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'carrera_id' => 'required|exists:carreras,id',
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50'
        ]);
        
        $materia = Materia::find($id);

        $materia->update($request->all());

        return redirect()->route("admin.materia.index")
            ->with("mensaje", "Materia actualizada correctamente")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        $materia = Materia::find($id);

        $materia->delete();

        return redirect()->route("admin.materia.index")
            ->with("mensaje", "Materia eliminada correctamente")
            ->with("icono", "success");
    }
}
