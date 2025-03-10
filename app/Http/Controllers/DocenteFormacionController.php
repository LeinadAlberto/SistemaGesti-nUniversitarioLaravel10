<?php

namespace App\Http\Controllers;

use App\Models\DocenteFormacion;
use Illuminate\Http\Request;

class DocenteFormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            'titulo' => 'required',
            'intitucion' => 'required',
            'nivel' => 'required',
            'ano_graduacion' => 'required',
            'archivo' => 'required'
        ]);

        $formacion = new DocenteFormacion();

        $formacion->docente_id = $id;
        $formacion->titulo = $request->titulo;
        $formacion->intitucion = $request->intitucion;
        $formacion->nivel = $request->nivel;
        $formacion->ano_graduacion = $request->ano_graduacion;

        $archivo = $request->file("archivo");
        $nombreArchivo = time() . "_" . $archivo->getClientOriginalName();
        $rutaDestino = public_path("uploads/archivos_docente");
        $archivo->move($rutaDestino, $nombreArchivo);
        $archivoPath = "uploads/archivos_docente/" . $nombreArchivo;
        
        $formacion->archivo = $archivoPath;

        $formacion->save();

        return redirect()->back()
            ->with("mensaje", "Formación creada correctamente")
            ->with("icono", "success");
    }

    /**
     * Display the specified resource.
     */
    public function show(DocenteFormacion $docenteFormacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocenteFormacion $docenteFormacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocenteFormacion $docenteFormacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocenteFormacion $docenteFormacion)
    {
        //
    }
}
