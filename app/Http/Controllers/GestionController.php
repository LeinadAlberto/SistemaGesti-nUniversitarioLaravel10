<?php

namespace App\Http\Controllers;

use App\Models\Gestion;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function index()
    {
        $gestiones = Gestion::all();

        return view("admin.gestiones.index", compact("gestiones"));
    }

    public function create()
    {
        return view("admin.gestiones.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        Gestion::create($request->all());

        return redirect()->route("admin.gestion.index")
            ->with("mensaje", "Gestión creada correctamente")
            ->with("icono", "success");
    }

    public function edit($id)
    {
        $gestion = Gestion::find($id);

        return view("admin.gestiones.edit", compact("gestion"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        $gestion = Gestion::find($id);

        $gestion->update($request->all());

        return redirect()->route("admin.gestion.index")
            ->with("mensaje", "Gestión actualizada correctamente")
            ->with("icono", "success");

    }

    public function destroy($id)
    {
        $gestion = Gestion::find($id);

        $gestion->delete();

        return redirect()->route("admin.gestion.index")
            ->with("mensaje", "Gestión eliminada correctamente")
            ->with("icono", "success");
    }
}
