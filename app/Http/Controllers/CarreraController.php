<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();

        return view("admin.carreras.index", compact("carreras"));
    }

    public function create()
    {
        return view("admin.carreras.create");
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */
        
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        Carrera::create($request->all());

        return redirect()->route("admin.carrera.index")
            ->with("mensaje", "Carrera creada correctamente")
            ->with("icono", "success");
    }

    public function edit($id)
    {
        $carrera = Carrera::findOrFail($id);

        return view("admin.carreras.edit", compact("carrera"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        $carrera = Carrera::findOrFail($id);

        $carrera->update($request->all());

        return redirect()->route("admin.carrera.index")
            ->with("mensaje", "Carrera actualizada correctamente")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        $carrera = Carrera::findOrFail($id);

        $carrera->delete();

        return redirect()->route("admin.carrera.index")
            ->with("mensaje", "Carrera eliminada correctamente")
            ->with("icono", "success");
    }
}
