@extends('adminlte::page')

@section('content_header')
    <h1><b>Personal Administrativo / Registro de un nuevo Administrativo</b></h1>
@stop

@section('content')

    <div class="row">

        <div class="col-md-12">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">Llene los datos del formulario</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <form action="{{ url('admin/administrativos/create') }}" method="post">
                        
                        @csrf

                        <div class="row">

                            <!-- Nombres de Administrativo-->
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="">Nombre(s) <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" placeholder="Ingrese nombre(s)..." required>
                                    </div><!-- /.input-group -->
                                    @error('nombres')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-3 -->

                            <!-- Apellidos de Administrativo-->
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="">Apellido(s) <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" placeholder="Ingrese apellido(s)..." required>
                                    </div><!-- /.input-group -->
                                    @error('apellidos')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-3 -->

                            <!-- Rol-->
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="">Rol <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <select name="rol" id="" class="form-control">
                                            <option value="">Seleccione un rol...</option>
                                            @foreach ($roles as $rol)
                                                <option value="{{ $rol->name }}">{{ $rol->name }}</option>
                                            @endforeach
                                        </select>
                                    </div><!-- /.input-group -->
                                    @error('rol')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-3 -->

                            <!-- CI-->
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="ci">Cédula de Identidad <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="ci" value="{{ old('ci') }}" placeholder="Ingrese CI..." required>
                                    </div><!-- /.input-group -->
                                    @error('ci')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-3 -->

                        </div><!-- /.row -->

                        <div class="row">

                            <!-- Dirección -->
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="direccion">Dirección <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" placeholder="Ingrese dirección..." required>
                                    </div><!-- /.input-group -->
                                    @error('direccion')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-6 -->

                            <!-- Correo Electrónico -->
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="email">Correo Electrónico <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingrese correo electrónico..." required>
                                    </div><!-- /.input-group -->
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-6 -->

                        </div><!-- /.row -->

                        <div class="row">

                            <!-- Fecha de Nacimiento-->
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" placeholder="Ingrese nombres..." required>
                                    </div><!-- /.input-group -->
                                    @error('fecha_nacimiento')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-3 -->

                            <!-- Teléfono-->
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="telefono">Teléfono <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" placeholder="Ingrese teléfono..." required>
                                    </div><!-- /.input-group -->
                                    @error('telefono')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-3 -->

                            <!-- Profesión -->
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="profesion">Profesión <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="profesion" value="{{ old('profesion') }}" placeholder="Ingrese profesión..." required>
                                    </div><!-- /.input-group -->
                                    @error('profesion')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-3 -->

                        </div><!-- /.row -->
 
                        <hr class="mb-4">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/administrativos') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-info">Registrar</button>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                    </form>

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-8 -->

    </div><!-- /.row -->

@stop

@section('css')
    
@stop


@section('js')
    
@stop

