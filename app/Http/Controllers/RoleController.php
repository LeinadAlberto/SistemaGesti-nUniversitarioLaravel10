<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|unique:roles"
        ]);

        $rol = new Role();
        $rol->name = $request->name;
        $rol->save();

        return redirect()->route("admin.role.index")
            ->with("mensaje", "Rol creado correctamente")
            ->with("icono", "success");
    }

    public function edit($id)
    {
        $role = Role::find($id);

        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|unique:roles,name," . $id
        ]);

        $rol = Role::find($id);
        $rol->name = $request->name;
        $rol->save();

        return redirect()->route("admin.role.index")
            ->with("mensaje", "Rol actualizado correctamente")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        Role::destroy($id);

        return redirect()->route("admin.role.index")
            ->with("mensaje", "Rol eliminado correctamente")
            ->with("icono", "success");
    }
}
