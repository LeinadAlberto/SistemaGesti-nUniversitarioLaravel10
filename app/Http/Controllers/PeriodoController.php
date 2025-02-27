<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    public function index()
    {
        $periodos = Periodo::all();

        return view("admin.periodos.index", compact("periodos"));
    }

    public function create()
    {
        return view("admin.periodos.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        Periodo::create($request->all());

        return redirect()->route("admin.periodo.index")
            ->with("mensaje", "Periodo creado correctamente")
            ->with("icono", "success");
    }

    public function edit($id)
    {
        $periodo = Periodo::findOrFail($id);

        return view("admin.periodos.edit", compact("periodo"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        $periodo = Periodo::findOrFail($id);

        $periodo->update($request->all());

        return redirect()->route("admin.periodo.index")
            ->with("mensaje", "Periodo actualizado correctamente")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        $periodo = Periodo::findOrFail($id);

        $periodo->delete();

        return redirect()->route("admin.periodo.index")
            ->with("mensaje", "Periodo eliminado correctamente")
            ->with("icono", "success");
    }
}
