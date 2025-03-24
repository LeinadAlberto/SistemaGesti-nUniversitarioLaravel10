<?php

namespace App\Http\Controllers;

use App\Models\Matriculacion;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class MatriculacionController extends Controller
{
    public function index()
    {
        $matriculaciones = Matriculacion::all();

        return view('admin.matriculaciones.index', compact('matriculaciones'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();

        return view('admin.matriculaciones.create', compact('estudiantes'));
    }

    public function store(Request $request)
    {
        
    }

    public function show(Matriculacion $matriculacion)
    {
        
    }

    public function edit(Matriculacion $matriculacion)
    {
        
    }

    public function update(Request $request, Matriculacion $matriculacion)
    {
        
    }

    public function destroy(Matriculacion $matriculacion)
    {
        
    }
}
