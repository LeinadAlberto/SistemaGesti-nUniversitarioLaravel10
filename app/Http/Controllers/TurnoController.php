<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function index()
    {
        $turnos = Turno::all();

        return view("admin.turnos.index", compact("turnos"));
    }

    public function create()
    {
        return view("admin.turnos.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        Turno::create($request->all());

        return redirect()->route("admin.turno.index")
            ->with("mensaje", "Turno creado correctamente")
            ->with("icono", "success");
    }

    public function edit($id)
    {
        $turno = Turno::findOrFail($id);

        return view("admin.turnos.edit", compact("turno"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        $turno = Turno::findOrFail($id);

        $turno->update($request->all());

        return redirect()->route("admin.turno.index")
            ->with("mensaje", "Turno actualizado correctamente")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        $turno = Turno::findOrFail($id);

        $turno->delete();

        return redirect()->route("admin.turno.index")
            ->with("mensaje", "Turno eliminado correctamente")
            ->with("icono", "success");
    }
}
