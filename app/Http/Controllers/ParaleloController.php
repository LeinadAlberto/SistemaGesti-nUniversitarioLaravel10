<?php

namespace App\Http\Controllers;

use App\Models\Paralelo;
use Illuminate\Http\Request;

class ParaleloController extends Controller
{
    public function index()
    {
        $paralelos = Paralelo::all();

        return view("admin.paralelos.index", compact("paralelos"));
    }

    public function create()
    {
        return view("admin.paralelos.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        Paralelo::create($request->all());

        return redirect()->route("admin.paralelo.index")
            ->with("mensaje", "Paralelo creado correctamente")
            ->with("icono", "success");
    }

    public function edit($id)
    {
        $paralelo = Paralelo::findOrFail($id);

        return view("admin.paralelos.edit", compact("paralelo"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => "required|string|max:255"
        ]);

        $paralelo = Paralelo::findOrFail($id);

        $paralelo->update($request->all());

        return redirect()->route("admin.paralelo.index")
            ->with("mensaje", "Paralelo actualizado correctamente")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        $paralelo = Paralelo::findOrFail($id);

        $paralelo->delete();

        return redirect()->route("admin.paralelo.index")
            ->with("mensaje", "Paralelo eliminado correctamente")
            ->with("icono", "success");
    }
}
