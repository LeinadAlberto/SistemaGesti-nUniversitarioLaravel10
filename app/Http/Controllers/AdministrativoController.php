<?php

namespace App\Http\Controllers;

use App\Models\Administrativo;
use Illuminate\Http\Request;

class AdministrativoController extends Controller
{
    public function index()
    {
        $administrativos = Administrativo::all();

        return view('admin.administrativos.index', compact('administrativos'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
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
