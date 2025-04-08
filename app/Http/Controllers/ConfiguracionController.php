<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfiguracionController extends Controller
{
    public function index()
    {
        $configuracion = Configuracion::first();

        return view("admin.configuraciones.index", compact("configuracion"));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            "nombre" => "required|string|max:255",
            "descripcion" => "required|string|max:255",
            "direccion" => "required|string|max:255",
            "telefono" => "required|string|max:20",
            "email" => "required|email|max:255",
            "web" => "nullable|url|max:255",
            "logo" => "image|mimes:jpeg,png,jpg"
        ]);

        // Buscar si existe un registro
        $configuracion = Configuracion::first();

        // Si hay un archivo de logo, lo procesamos
        if ($request->hasFile("logo")) {
            $logo = $request->file("logo");
            $nombreArchivo = time() . "_" . $logo->getClientOriginalName();
            $rutaDestino = public_path("uploads/logos");
            $logo->move($rutaDestino, $nombreArchivo);
            $logoPath = "uploads/logos/" . $nombreArchivo;
        } else {
            // Si no se sube un nuevo logo, mantener el actual
            $logoPath = $configuracion->logo ?? null;
        }

        if ($configuracion) {
            // Si existe actualizar
            $configuracion->update([
                "nombre" => $request->nombre,
                "descripcion" => $request->descripcion,
                "direccion" => $request->direccion,
                "telefono" => $request->telefono,
                "email" => $request->email,
                "web" => $request->web,
                "logo" => $logoPath
            ]);
        } else {
            // Si no existe crear uno nuevo
            Configuracion::create([
                "nombre" => $request->nombre,
                "descripcion" => $request->descripcion,
                "direccion" => $request->direccion,
                "telefono" => $request->telefono,
                "email" => $request->email,
                "web" => $request->web,
                "logo" => $logoPath
            ]);
        }

        return redirect()->back()
            ->with("mensaje", "Configuración guardada correctamente")
            ->with("icono", "success");
    }

    public function show(Configuracion $configuracion)
    {
        
    }

    public function edit(Configuracion $configuracion)
    {
        
    }

    public function update(Request $request, Configuracion $configuracion)
    {
        
    }

    public function destroy(Configuracion $configuracion)
    {
        
    }
}
