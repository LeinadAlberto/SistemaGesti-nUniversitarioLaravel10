<?php

namespace App\Http\Controllers;

use App\Models\Administrativo;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdministrativoController extends Controller
{
    public function index()
    {
        $administrativos = Administrativo::all();

        return view('admin.administrativos.index', compact('administrativos'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.administrativos.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $datos = request()->all();

        return response()->json($datos); 

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'ci' => 'required|unique:administrativos',
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'nombres' => 'required',
            'profesion' => 'required',
            'rol' => 'required'
        ]);
    }

    public function show(Administrativo $administrativo)
    {
        
    }

    public function edit(Administrativo $administrativo)
    {
        
    }

    public function update(Request $request, Administrativo $administrativo)
    {
        
    }

    public function destroy(Administrativo $administrativo)
    {
        
    }
}
