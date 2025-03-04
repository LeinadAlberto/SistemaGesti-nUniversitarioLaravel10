@extends('adminlte::page')

@section('content_header')
    <h1><b>Personal Administrativo / Datos del Administrativo</b></h1>
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

                        <!-- Nombres de Administrativo-->
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="">Nombre(s)</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div><!-- /.input-group-prepend -->
                                    <input type="text" class="form-control" name="nombres" value="{{ old('nombres', $administrativo->nombres) }}" readonly>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->

                        </div><!-- /.col-md-3 -->

                        <!-- Apellidos de Administrativo-->
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="">Apellido(s)</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                    </div><!-- /.input-group-prepend -->
                                    <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos', $administrativo->apellidos) }}" readonly>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->

                        </div><!-- /.col-md-3 -->

                        <!-- Rol-->
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="">Rol</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                    </div><!-- /.input-group-prepend -->

                                    <input type="text" class="form-control" name="rol" value="{{ $administrativo->usuario->roles->pluck('name')->implode(', ') }}" readonly>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->

                        </div><!-- /.col-md-3 -->

                        <!-- CI-->
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="ci">Cédula de Identidad</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div><!-- /.input-group-prepend -->
                                    <input type="text" class="form-control" name="ci" value="{{ old('ci', $administrativo->ci) }}" readonly>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->

                        </div><!-- /.col-md-3 -->

                    </div><!-- /.row -->

                    <div class="row">

                        <!-- Dirección -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="direccion">Dirección</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div><!-- /.input-group-prepend -->
                                    <input type="text" class="form-control" name="direccion" value="{{ old('direccion', $administrativo->direccion) }}" readonly>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->

                        </div><!-- /.col-md-6 -->

                        <!-- Correo Electrónico -->
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div><!-- /.input-group-prepend -->
                                    <input type="email" class="form-control" name="email" value="{{ old('email', $administrativo->usuario->email) }}" readonly>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->

                        </div><!-- /.col-md-6 -->

                    </div><!-- /.row -->

                    <div class="row">

                        <!-- Fecha de Nacimiento-->
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div><!-- /.input-group-prepend -->
                                    <input type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $administrativo->fecha_nacimiento) }}" readonly>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->

                        </div><!-- /.col-md-3 -->

                        <!-- Teléfono-->
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="telefono">Teléfono</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div><!-- /.input-group-prepend -->
                                    <input type="text" class="form-control" name="telefono" value="{{ old('telefono', $administrativo->telefono) }}" readonly>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->

                        </div><!-- /.col-md-3 -->

                        <!-- Profesión -->
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="profesion">Profesión</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                    </div><!-- /.input-group-prepend -->
                                    <input type="text" class="form-control" name="profesion" value="{{ old('profesion', $administrativo->profesion) }}" readonly>
                                </div><!-- /.input-group -->
                            </div><!-- /.form-group -->

                        </div><!-- /.col-md-3 -->

                    </div><!-- /.row -->

                    <hr class="mb-4">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('/admin/administrativos') }}" class="btn btn-secondary">Volver</a>
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