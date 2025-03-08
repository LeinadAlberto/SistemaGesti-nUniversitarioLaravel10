<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();

        return view('admin.docentes.index', compact('docentes'));
    }

    public function create()
    {
        $docentes = Docente::all();

        return view('admin.docentes.index', compact('docentes'));
    }

    public function store(Request $request)
    {
        $docentes = Docente::all();

        return view('admin.docentes.index', compact('docentes'));
    }

    public function show(Docente $docente)
    {
        $docentes = Docente::all();

        return view('admin.docentes.index', compact('docentes'));
    }

    public function edit(Docente $docente)
    {
        $docentes = Docente::all();

        return view('admin.docentes.index', compact('docentes'));
    }

    public function update(Request $request, Docente $docente)
    {
        $docentes = Docente::all();

        return view('admin.docentes.index', compact('docentes'));
    }

    public function destroy(Docente $docente)
    {
        $docentes = Docente::all();

        return view('admin.docentes.index', compact('docentes'));
    }
}
