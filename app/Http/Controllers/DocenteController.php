<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\User;
use App\Models\DocenteFormacion;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();

        return view('admin.docentes.index', compact('docentes'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.docentes.create', compact('roles'));
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */ 

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'ci' => 'required|unique:docentes',
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
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

        $docente = new Docente();
        $docente->usuario_id = $usuario->id;
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->ci = $request->ci;
        $docente->fecha_nacimiento = $request->fecha_nacimiento;
        $docente->telefono = $request->telefono;
        $docente->direccion = $request->direccion;
        $docente->profesion = $request->profesion;

        $foto = $request->file("foto");
        $nombreArchivo = time() . "_" . $foto->getClientOriginalName();
        $rutaDestino = public_path("uploads/fotos_docente");
        $foto->move($rutaDestino, $nombreArchivo);
        $fotoPath = "uploads/fotos_docente/" . $nombreArchivo;
        $docente->foto = $fotoPath;

        $docente->save();

        return redirect()->route("admin.docente.index")
            ->with("mensaje", "Docente creado correctamente")
            ->with("icono", "success");
    }

    public function show($id)
    {   
        $roles = Role::all();

        $formaciones = DocenteFormacion::where('docente_id', $id)->get();

        $docente = Docente::find($id);

        return view('admin.docentes.show', compact('docente', 'roles', 'formaciones'));
    }

    public function edit($id)
    {
        $docente = Docente::find($id);

        $roles = Role::all();

        return view('admin.docentes.edit', compact('docente', 'roles'));
    }

    public function update(Request $request, $id)
    {

        $docente = Docente::find($id);

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'ci' => 'required|unique:docentes,ci,' . $id,
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'nombres' => 'required',
            'profesion' => 'required',
            'rol' => 'required',
            'email' => 'required|unique:users,email,' . $docente->usuario->id,
            'foto' => 'nullable|image'
        ]);

        $usuario = User::find($docente->usuario_id);
        $usuario->name = $request->nombres . " " . $request->apellidos;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->ci);
        $usuario->save();

        $usuario->syncRoles($request->rol);

        $docente->usuario_id = $usuario->id;
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->ci = $request->ci;
        $docente->fecha_nacimiento = $request->fecha_nacimiento;
        $docente->telefono = $request->telefono;
        $docente->direccion = $request->direccion;
        $docente->profesion = $request->profesion;

        if ($request->hasfile('foto')) {

            if (file_exists(public_path($docente->foto))) {
                unlink(public_path($docente->foto));
            }

            $foto = $request->file("foto");
            $nombreArchivo = time() . "_" . $foto->getClientOriginalName();
            $rutaDestino = public_path("uploads/fotos_docente");
            $foto->move($rutaDestino, $nombreArchivo);
            $fotoPath = "uploads/fotos_docente/" . $nombreArchivo;
            $docente->foto = $fotoPath;
        }

        $docente->save();

        return redirect()->route("admin.docente.index")
            ->with("mensaje", "Docente actualizado correctamente")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        $docente = Docente::find($id);

        $usuario = User::find($docente->usuario_id);

        if ($docente->foto && file_exists(public_path($docente->foto))) {
            unlink(public_path($docente->foto));
        }

        $docente->delete();

        $usuario->delete();

        return redirect()->route("admin.docente.index")
            ->with("mensaje", "Docente eliminado correctamente")
            ->with("icono", "success");
    }
}
