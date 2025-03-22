<?php

namespace Database\Seeders;

use App\Models\Gestion;
use App\Models\User;
use App\Models\Carrera;
use App\Models\Nivel;
use App\Models\Turno;
use App\Models\Paralelo;
use App\Models\Periodo;
use App\Models\Materia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'ADMINISTRADOR']);
        Role::create(['name' => 'DOCENTE']);
        Role::create(['name' => 'ESTUDIANTE']);
    
        User::create([
            'name' => 'Daniel Canaviri',
            'email' => 'daniel@gmail.com',
            'password' => Hash::make('12345678')
        ])->assignRole('ADMINISTRADOR');

        Gestion::create(['nombre' => 'I/2025']);
        Gestion::create(['nombre' => 'II/2025']);

        Carrera::create(['nombre' => 'INFORMÁTICA']);
        Carrera::create(['nombre' => 'DERECHO']);
        Carrera::create(['nombre' => 'ADMINISTRACIÓN DE EMPRESAS']);
        Carrera::create(['nombre' => 'CIENCIAS DE LA EDUCACIÓN']);
       
        Nivel::create(['nombre' => 'LICENCIATURA']);
        Nivel::create(['nombre' => 'POSTGRADO']);
        Nivel::create(['nombre' => 'TÉCNICO SUPERIOR']);

        Turno::create(['nombre' => 'MAÑANA']);
        Turno::create(['nombre' => 'TARDE']);
        Turno::create(['nombre' => 'NOCHE']);

        Paralelo::create(['nombre' => 'A']);
        Paralelo::create(['nombre' => 'B']);
        Paralelo::create(['nombre' => 'C']);
        Paralelo::create(['nombre' => 'D']);
        Paralelo::create(['nombre' => 'E']);
        Paralelo::create(['nombre' => 'F']);
        
        Periodo::create(['nombre' => 'PRIMER SEMESTRE']);
        Periodo::create(['nombre' => 'SEGUNDO SEMESTRE']);
        Periodo::create(['nombre' => 'TERCER SEMESTRE']);
        Periodo::create(['nombre' => 'CUARTO SEMESTRE']);
        Periodo::create(['nombre' => 'QUINTO SEMESTRE']);
        Periodo::create(['nombre' => 'SEXTO SEMESTRE']);
        Periodo::create(['nombre' => 'SEPTIMO SEMESTRE']);
        Periodo::create(['nombre' => 'OCTAVO SEMESTRE']);
        Periodo::create(['nombre' => 'NOVENO SEMESTRE']);
        Periodo::create(['nombre' => 'DECIMO SEMESTRE']);
        
        Materia::create([
            'carrera_id' => '1',
            'nombre' => 'PROGRAMACIÓN I',
            'codigo' => 'INFO-PRO-1'
        ]);

        Materia::create([
            'carrera_id' => '1',
            'nombre' => 'BASE DE DATOS I',
            'codigo' => 'INFO-BD-1'
        ]);

        Materia::create([
            'carrera_id' => '1',
            'nombre' => 'FUNDAMENTOS DE PROGRAMACION',
            'codigo' => 'INFO-FP-1'
        ]);
    }
}
