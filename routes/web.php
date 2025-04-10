<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin/');
});

Auth::routes();

Route::get('/register', function() {
    abort(403, 'Registro no permitido');
})->name('register');

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index.home')->middleware('auth');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

// Rutas para Configuraciones
Route::get('/admin/configuraciones', [App\Http\Controllers\ConfiguracionController::class, 'index'])
->name('admin.configuracion.index')->middleware('auth');

Route::post('/admin/configuraciones/create', [App\Http\Controllers\ConfiguracionController::class, 'store'])
->name('admin.configuracion.store')->middleware('auth');

// Rutas para Gestiones
Route::get('/admin/gestiones', [App\Http\Controllers\GestionController::class, 'index'])
->name('admin.gestion.index')->middleware('auth');

Route::get('/admin/gestiones/create', [App\Http\Controllers\GestionController::class, 'create'])
->name('admin.gestion.create')->middleware('auth');

Route::post('/admin/gestiones/create', [App\Http\Controllers\GestionController::class, 'store'])
->name('admin.gestion.store')->middleware('auth');

Route::get('/admin/gestiones/{id}/edit', [App\Http\Controllers\GestionController::class, 'edit'])
->name('admin.gestion.edit')->middleware('auth');

Route::put('/admin/gestiones/{id}', [App\Http\Controllers\GestionController::class, 'update'])
->name('admin.gestion.update')->middleware('auth');

Route::delete('/admin/gestiones/{id}', [App\Http\Controllers\GestionController::class, 'destroy'])
->name('admin.gestion.destroy')->middleware('auth'); 

// Rutas para Carreras
Route::get('/admin/carreras', [App\Http\Controllers\CarreraController::class, 'index'])
->name('admin.carrera.index')->middleware('auth');

Route::get('/admin/carreras/create', [App\Http\Controllers\CarreraController::class, 'create'])
->name('admin.carrera.create')->middleware('auth');

Route::post('/admin/carreras/create', [App\Http\Controllers\CarreraController::class, 'store'])
->name('admin.carrera.store')->middleware('auth');

Route::get('/admin/carreras/{id}/edit', [App\Http\Controllers\CarreraController::class, 'edit'])
->name('admin.carrera.edit')->middleware('auth');

Route::put('/admin/carreras/{id}', [App\Http\Controllers\CarreraController::class, 'update'])
->name('admin.carrera.update')->middleware('auth');

Route::delete('/admin/carreras/{id}', [App\Http\Controllers\CarreraController::class, 'destroy'])
->name('admin.carrera.destroy')->middleware('auth'); 

// Rutas para Niveles
Route::get('/admin/niveles', [App\Http\Controllers\NivelController::class, 'index'])
->name('admin.nivel.index')->middleware('auth');

Route::get('/admin/niveles/create', [App\Http\Controllers\NivelController::class, 'create'])
->name('admin.nivel.create')->middleware('auth');

Route::post('/admin/niveles/create', [App\Http\Controllers\NivelController::class, 'store'])
->name('admin.nivel.store')->middleware('auth');

Route::get('/admin/niveles/{id}/edit', [App\Http\Controllers\NivelController::class, 'edit'])
->name('admin.nivel.edit')->middleware('auth');

Route::put('/admin/niveles/{id}', [App\Http\Controllers\NivelController::class, 'update'])
->name('admin.nivel.update')->middleware('auth');

Route::delete('/admin/niveles/{id}', [App\Http\Controllers\NivelController::class, 'destroy'])
->name('admin.nivel.destroy')->middleware('auth'); 

// Rutas para Turnos
Route::get('/admin/turnos', [App\Http\Controllers\TurnoController::class, 'index'])
->name('admin.turno.index')->middleware('auth');

Route::get('/admin/turnos/create', [App\Http\Controllers\TurnoController::class, 'create'])
->name('admin.turno.create')->middleware('auth');

Route::post('/admin/turnos/create', [App\Http\Controllers\TurnoController::class, 'store'])
->name('admin.turno.store')->middleware('auth');

Route::get('/admin/turnos/{id}/edit', [App\Http\Controllers\TurnoController::class, 'edit'])
->name('admin.turno.edit')->middleware('auth');

Route::put('/admin/turnos/{id}', [App\Http\Controllers\TurnoController::class, 'update'])
->name('admin.turno.update')->middleware('auth');

Route::delete('/admin/turnos/{id}', [App\Http\Controllers\TurnoController::class, 'destroy'])
->name('admin.turno.destroy')->middleware('auth'); 

// Rutas para Paralelos
Route::get('/admin/paralelos', [App\Http\Controllers\ParaleloController::class, 'index'])
->name('admin.paralelo.index')->middleware('auth');

Route::get('/admin/paralelos/create', [App\Http\Controllers\ParaleloController::class, 'create'])
->name('admin.paralelo.create')->middleware('auth');

Route::post('/admin/paralelos/create', [App\Http\Controllers\ParaleloController::class, 'store'])
->name('admin.paralelo.store')->middleware('auth');

Route::get('/admin/paralelos/{id}/edit', [App\Http\Controllers\ParaleloController::class, 'edit'])
->name('admin.paralelo.edit')->middleware('auth');

Route::put('/admin/paralelos/{id}', [App\Http\Controllers\ParaleloController::class, 'update'])
->name('admin.paralelo.update')->middleware('auth');

Route::delete('/admin/paralelos/{id}', [App\Http\Controllers\ParaleloController::class, 'destroy'])
->name('admin.paralelo.destroy')->middleware('auth'); 

// Rutas para Periodos
Route::get('/admin/periodos', [App\Http\Controllers\PeriodoController::class, 'index'])
->name('admin.periodo.index')->middleware('auth');

Route::get('/admin/periodos/create', [App\Http\Controllers\PeriodoController::class, 'create'])
->name('admin.periodo.create')->middleware('auth');

Route::post('/admin/periodos/create', [App\Http\Controllers\PeriodoController::class, 'store'])
->name('admin.periodo.store')->middleware('auth');

Route::get('/admin/periodos/{id}/edit', [App\Http\Controllers\PeriodoController::class, 'edit'])
->name('admin.periodo.edit')->middleware('auth');

Route::put('/admin/periodos/{id}', [App\Http\Controllers\PeriodoController::class, 'update'])
->name('admin.periodo.update')->middleware('auth');

Route::delete('/admin/periodos/{id}', [App\Http\Controllers\PeriodoController::class, 'destroy'])
->name('admin.periodo.destroy')->middleware('auth'); 

// Rutas para Materias
Route::get('/admin/materias', [App\Http\Controllers\MateriaController::class, 'index'])
->name('admin.materia.index')->middleware('auth');

Route::get('/admin/materias/create', [App\Http\Controllers\MateriaController::class, 'create'])
->name('admin.materia.create')->middleware('auth');

Route::post('/admin/materias/create', [App\Http\Controllers\MateriaController::class, 'store'])
->name('admin.materia.store')->middleware('auth');

Route::get('/admin/materias/{id}/edit', [App\Http\Controllers\MateriaController::class, 'edit'])
->name('admin.materia.edit')->middleware('auth');

Route::put('/admin/materias/{id}', [App\Http\Controllers\MateriaController::class, 'update'])
->name('admin.materia.update')->middleware('auth');

Route::delete('/admin/materias/{id}', [App\Http\Controllers\MateriaController::class, 'destroy'])
->name('admin.materia.destroy')->middleware('auth'); 

// Rutas para Roles
Route::get('/admin/roles', [App\Http\Controllers\RoleController::class, 'index'])
->name('admin.role.index')->middleware('auth');

Route::get('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'create'])
->name('admin.role.create')->middleware('auth');

Route::post('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'store'])
->name('admin.role.store')->middleware('auth');

Route::get('/admin/roles/{id}/edit', [App\Http\Controllers\RoleController::class, 'edit'])
->name('admin.role.edit')->middleware('auth');

Route::put('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'update'])
->name('admin.role.update')->middleware('auth');

Route::delete('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])
->name('admin.role.destroy')->middleware('auth'); 

// Rutas para Administrativos
Route::get('/admin/administrativos', [App\Http\Controllers\AdministrativoController::class, 'index'])
->name('admin.administrativo.index')->middleware('auth');

Route::get('/admin/administrativos/create', [App\Http\Controllers\AdministrativoController::class, 'create'])
->name('admin.administrativo.create')->middleware('auth');

Route::post('/admin/administrativos/create', [App\Http\Controllers\AdministrativoController::class, 'store'])
->name('admin.administrativo.store')->middleware('auth');

Route::get('/admin/administrativos/{id}', [App\Http\Controllers\AdministrativoController::class, 'show'])
->name('admin.administrativo.show')->middleware('auth');

Route::get('/admin/administrativos/{id}/edit', [App\Http\Controllers\AdministrativoController::class, 'edit'])
->name('admin.administrativo.edit')->middleware('auth');

Route::put('/admin/administrativos/{id}', [App\Http\Controllers\AdministrativoController::class, 'update'])
->name('admin.administrativo.update')->middleware('auth');

Route::delete('/admin/administrativos/{id}', [App\Http\Controllers\AdministrativoController::class, 'destroy'])
->name('admin.administrativo.destroy')->middleware('auth'); 

// Rutas para Docentes
Route::get('/admin/docentes', [App\Http\Controllers\DocenteController::class, 'index'])
->name('admin.docente.index')->middleware('auth');

Route::get('/admin/docentes/create', [App\Http\Controllers\DocenteController::class, 'create'])
->name('admin.docente.create')->middleware('auth');

Route::post('/admin/docentes/create', [App\Http\Controllers\DocenteController::class, 'store'])
->name('admin.docente.store')->middleware('auth');

Route::get('/admin/docentes/{id}', [App\Http\Controllers\DocenteController::class, 'show'])
->name('admin.docente.show')->middleware('auth');

Route::get('/admin/docentes/{id}/edit', [App\Http\Controllers\DocenteController::class, 'edit'])
->name('admin.docente.edit')->middleware('auth');

Route::put('/admin/docentes/{id}', [App\Http\Controllers\DocenteController::class, 'update'])
->name('admin.docente.update')->middleware('auth');

Route::delete('/admin/docentes/{id}', [App\Http\Controllers\DocenteController::class, 'destroy'])
->name('admin.docente.destroy')->middleware('auth'); 

// Rutas para Docente Formación
Route::post('/admin/docentes/createformacion/{id}', [App\Http\Controllers\DocenteFormacionController::class, 'store'])
->name('admin.docenteformacion.store')->middleware('auth');

Route::delete('/admin/docentes/formacion/{id}', [App\Http\Controllers\DocenteFormacionController::class, 'destroy'])
->name('admin.docenteformacion.destroy')->middleware('auth'); 

// Rutas para Estudiantes
Route::get('/admin/estudiantes', [App\Http\Controllers\EstudianteController::class, 'index'])
->name('admin.estudiante.index')->middleware('auth');

Route::get('/admin/estudiantes/create', [App\Http\Controllers\EstudianteController::class, 'create'])
->name('admin.estudiante.create')->middleware('auth');

Route::post('/admin/estudiantes/create', [App\Http\Controllers\EstudianteController::class, 'store'])
->name('admin.estudiante.store')->middleware('auth');

Route::get('/admin/estudiantes/{id}', [App\Http\Controllers\EstudianteController::class, 'show'])
->name('admin.estudiante.show')->middleware('auth');

Route::get('/admin/estudiantes/{id}/edit', [App\Http\Controllers\EstudianteController::class, 'edit'])
->name('admin.estudiante.edit')->middleware('auth');

Route::put('/admin/estudiantes/{id}', [App\Http\Controllers\EstudianteController::class, 'update'])
->name('admin.estudiante.update')->middleware('auth');

Route::delete('/admin/estudiantes/{id}', [App\Http\Controllers\EstudianteController::class, 'destroy'])
->name('admin.estudiante.destroy')->middleware('auth'); 

// Rutas para Matriculaciones
Route::get('/admin/matriculaciones', [App\Http\Controllers\MatriculacionController::class, 'index'])
->name('admin.matriculacion.index')->middleware('auth');

Route::get('/admin/matriculaciones/create', [App\Http\Controllers\MatriculacionController::class, 'create'])
->name('admin.matriculacion.create')->middleware('auth');

Route::post('/admin/matriculaciones/create', [App\Http\Controllers\MatriculacionController::class, 'store'])
->name('admin.matriculacion.store')->middleware('auth');

Route::get('/admin/matriculaciones/{id}', [App\Http\Controllers\MatriculacionController::class, 'show'])
->name('admin.matriculacion.show')->middleware('auth');

Route::get('/admin/matriculaciones/pdf/{id}', [App\Http\Controllers\MatriculacionController::class, 'pdf_matricula'])
->name('admin.matriculacion.pdf_matricula')->middleware('auth');

Route::get('/admin/matriculaciones/{id}/edit', [App\Http\Controllers\MatriculacionController::class, 'edit'])
->name('admin.matriculacion.edit')->middleware('auth');

Route::put('/admin/matriculaciones/{id}', [App\Http\Controllers\MatriculacionController::class, 'update'])
->name('admin.matriculacion.update')->middleware('auth');

Route::delete('/admin/matriculaciones/{id}', [App\Http\Controllers\MatriculacionController::class, 'destroy'])
->name('admin.matriculacion.destroy')->middleware('auth'); 

Route::get('/admin/matriculaciones/buscar_estudiante/{id}', [App\Http\Controllers\MatriculacionController::class, 'buscar_estudiante'])->name('admin.matriculacion.buscar_estudiante')->middleware('auth'); 

// Rutas para Asignación de Materias
Route::post('/admin/matriculaciones/asignar_materia/create', [App\Http\Controllers\AsignacionMateriaController::class, 'store'])
->name('admin.asignar_materia.store')->middleware('auth');

Route::delete('/admin/matriculaciones/asignar_materia/{id}', [App\Http\Controllers\AsignacionMateriaController::class, 'destroy'])
->name('admin.asignar_materia.destroy')->middleware('auth');