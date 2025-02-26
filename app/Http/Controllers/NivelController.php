<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {
        $niveles = Nivel::all();

        return view("admin.niveles.index", compact("niveles"));
    }

    public function create()
    {
        return view("admin.niveles.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        Nivel::create($request->all());

        return redirect()->route("admin.nivel.index")
            ->with("mensaje", "Nivel creado correctamente")
            ->with("icono", "success");
    }

    public function edit($id)
    {
        $nivel = Nivel::findOrFail($id);

        return view("admin.niveles.edit", compact("nivel"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        $nivel = Nivel::findOrFail($id);

        $nivel->update($request->all());

        return redirect()->route("admin.nivel.index")
            ->with("mensaje", "Nivel actualizado correctamente")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        $nivel = Nivel::findOrFail($id);

        $nivel->delete();

        return redirect()->route("admin.nivel.index")
            ->with("mensaje", "Nivel eliminado correctamente")
            ->with("icono", "success");
    }
}
