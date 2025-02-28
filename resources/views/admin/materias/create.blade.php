@extends('adminlte::page')

@section('content_header')
    <h1><b>Gestiones / Registro de una nueva Materia</b></h1>
@stop

@section('content')

    <div class="row">

        <div class="col-md-6">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">Llene los datos del formulario</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <form action="{{ url('admin/materias/create') }}" method="post">
                        
                        @csrf

                        <!-- Nombre de la Carrera-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre de la Carrera <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <select name="carrera_id" required class="form-control">
                                            <option value="">Seleccione una carrera...</option>
                                            @foreach ($carreras as $carrera)
                                                <option value="{{  $carrera->id }}" {{ old('carrera_id') == $carrera->id ? 'selected' : '' }}>
                                                    {{ $carrera->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div><!-- /.input-group -->
                                    @error('carrera_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                        <!-- Nombre de la Materia -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre de la Materia  <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese el nombre de la materia..." required> 
                                    </div><!-- /.input-group -->
                                    @error('nombre')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                        <!-- Código de la Materia -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Código de la Materia  <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="codigo" value="{{ old('codigo') }}" placeholder="Ingrese el código..." required> 
                                    </div><!-- /.input-group -->
                                    @error('codigo')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                        
                        <hr class="mb-4">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/materias') }}" class="btn btn-secondary">Cancelar</a>
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