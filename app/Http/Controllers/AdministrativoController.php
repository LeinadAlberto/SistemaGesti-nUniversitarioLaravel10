<?php

namespace App\Http\Controllers;

use App\Models\Administrativo;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

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
        /* $datos = request()->all();

        return response()->json($datos); */ 

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

        $usuario = new User();
        $usuario->name = $request->nombres . " " . $request->apellidos;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->ci);
        $usuario->save();

        $usuario->assignRole($request->rol);

        $administrativo = new Administrativo();
        $administrativo->usuario_id = $usuario->id;
        $administrativo->nombres = $request->nombres;
        $administrativo->apellidos = $request->apellidos;
        $administrativo->ci = $request->ci;
        $administrativo->fecha_nacimiento = $request->fecha_nacimiento;
        $administrativo->telefono = $request->telefono;
        $administrativo->direccion = $request->direccion;
        $administrativo->profesion = $request->profesion;
        $administrativo->save();

        return redirect()->route("admin.administrativo.index")
            ->with("mensaje", "Administrativo creado correctamente")
            ->with("icono", "success");
    }

    public function show($id)
    {
        $roles = Role::all();
        $administrativo = Administrativo::find($id);

        return view('admin.administrativos.show', compact('administrativo', 'roles'));
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
