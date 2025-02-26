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

Route::get('/admin/gestiones/{id}', [App\Http\Controllers\GestionController::class, 'show'])
->name('admin.gestion.show')->middleware('auth');

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

Route::get('/admin/carreras/{id}', [App\Http\Controllers\CarreraController::class, 'show'])
->name('admin.carrera.show')->middleware('auth');

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

Route::get('/admin/niveles/{id}', [App\Http\Controllers\NivelController::class, 'show'])
->name('admin.nivel.show')->middleware('auth');

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

Route::get('/admin/turnos/{id}', [App\Http\Controllers\TurnoController::class, 'show'])
->name('admin.turno.show')->middleware('auth');

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

Route::get('/admin/paralelos/{id}', [App\Http\Controllers\ParaleloController::class, 'show'])
->name('admin.paralelo.show')->middleware('auth');

Route::get('/admin/paralelos/{id}/edit', [App\Http\Controllers\ParaleloController::class, 'edit'])
->name('admin.paralelo.edit')->middleware('auth');

Route::put('/admin/paralelos/{id}', [App\Http\Controllers\ParaleloController::class, 'update'])
->name('admin.paralelo.update')->middleware('auth');

Route::delete('/admin/paralelos/{id}', [App\Http\Controllers\ParaleloController::class, 'destroy'])
->name('admin.paralelo.destroy')->middleware('auth'); 