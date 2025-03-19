@extends('adminlte::page')

@section('content_header')
    <h1><b>Estudiantes / Datos del Estudiante</b></h1>
@stop

@section('content')

    <div class="row">

        <div class="col-md-12">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">Datos Registrados</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-9">

                            <div class="row">
                                <!-- Nombres del Estudiante -->
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="nombres">Nombre(s)</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres', $estudiante->nombres) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-4 -->

                                <!-- Apellidos del Estudiante -->
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="apellidos">Apellido(s)</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ old('apellidos', $estudiante->apellidos) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-4 -->

                                <!-- Rol-->
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Rol</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <select name="rol" class="form-control" readonly>
                                                @foreach ($roles as $rol)
                                                    @if ($rol->name == 'ESTUDIANTE')
                                                        <option value="{{ $rol->name }}" {{ $rol->name == 'ESTUDIANTE' ? 'selected' : '' }}>
                                                            {{ $rol->name }}
                                                        </option>
                                                    @else
                                                        <option value="">No existe el rol ESTUDIANTE</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->

                            <div class="row">

                                <!-- Fecha de Nacimiento-->
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $estudiante->fecha_nacimiento) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-4 -->
    
                                <!-- CI-->
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="ci">Cédula de Identidad</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" id="ci" name="ci" value="{{ old('ci', $estudiante->ci) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-3 -->
    
                                <!-- Profesión -->
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="profesion">Profesión</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" id="profesion" name="profesion" value="{{ old('profesion', $estudiante->profesion) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-4 -->
    
                            </div><!-- /.row -->

                            <div class="row">

                                <!-- Teléfono -->
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="telefono">Teléfono</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $estudiante->telefono) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-4 -->

                                <!-- Referencia del Celular -->
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="ref_celular" title="Número para contactar de algun familiar o amigo, en caso de que el estudiante tenga una emergencia o no pueda ser localizado">Número de referencia</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" id="ref_celular" name="ref_celular" value="{{ old('ref_celular', $estudiante->ref_celular) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-4 -->

                                <!-- Parentesco -->
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label for="parentesco" title="Parentesco con el estudiante">Parentesco</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" id="parentesco" name="parentesco" value="{{ old('parentesco', $estudiante->parentesco) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-4 -->
    
                            </div><!-- /.row -->

                            <div class="row">
                                <!-- Dirección -->
                                <div class="col-md-8">

                                    <div class="form-group">
                                        <label for="direccion">Dirección</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $estudiante->direccion) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-6 -->

                                
                            </div><!-- /.row -->

                            <div class="row">

                                <!-- Correo Electrónico -->
                                <div class="col-md-8">
    
                                    <div class="form-group">
                                        <label for="email">Correo Electrónico</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $estudiante->usuario->email) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-6 -->
    
                            </div><!-- /.row -->

                        </div><!-- /.col-9 -->

                        <div class="col-md-3">
                            <div class="row">
                                <!-- Foto -->
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <label>Foto</label>
                                        
                                        <br>

                                        <output id="list">
                                            <img src="{{ url($estudiante->foto) }}" width="200px" alt="imagen estudiante">
                                        </output>
                                        

                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-3 -->
                            </div><!-- /.row -->
                        </div>

                    </div> 

                    <hr class="mb-4">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('/admin/estudiantes') }}" class="btn btn-secondary">Volver</a>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-8 -->

    </div><!-- /.row -->

@stop

@section('css')
    
@stop


@section('js')
    
@stop