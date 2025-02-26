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