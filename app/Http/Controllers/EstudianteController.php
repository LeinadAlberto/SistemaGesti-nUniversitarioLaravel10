<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();

        return view('admin.estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.estudiantes.create', compact('roles'));
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */ 

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'ci' => 'required|unique:estudiantes',
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
            'ref_celular' => 'required',
            'parentesco' => 'required',
            'direccion' => 'required',
            'profesion' => 'required',
            'rol' => 'required',
            'email' => 'required|unique:users',
            'foto' => 'required|image'
        ]);

        $usuario = new User();
        $usuario->name = $request->nombres . " " . $request->apellidos;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->ci);
        $usuario->save();

        $usuario->assignRole($request->rol);

        $estudiante = new Estudiante();
        $estudiante->usuario_id = $usuario->id;
        $estudiante->nombres = $request->nombres;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->ci = $request->ci;
        $estudiante->fecha_nacimiento = $request->fecha_nacimiento;
        $estudiante->telefono = $request->telefono;
        $estudiante->ref_celular = $request->ref_celular;
        $estudiante->parentesco = $request->parentesco;
        $estudiante->direccion = $request->direccion;
        $estudiante->profesion = $request->profesion;

        $foto = $request->file("foto");
        $nombreArchivo = time() . "_" . $foto->getClientOriginalName();
        $rutaDestino = public_path("uploads/fotos_estudiantes");
        $foto->move($rutaDestino, $nombreArchivo);
        $fotoPath = "uploads/fotos_estudiantes/" . $nombreArchivo;
        $estudiante->foto = $fotoPath;

        $estudiante->estado = "activo";

        $estudiante->save();

        return redirect()->route("admin.estudiante.index")
            ->with("mensaje", "Estudiante creado correctamente")
            ->with("icono", "success");
    }

    public function show($id)
    {
        $estudiante = Estudiante::find($id);

        $roles = Role::all();

        return view('admin.estudiantes.show', compact('estudiante', 'roles'));
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
