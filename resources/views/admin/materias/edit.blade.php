@extends('adminlte::page')

@section('content_header')
    <h1><b>Editar Materia</b></h1>
@stop

@section('content')

    <div class="row">

        <div class="col-md-6">

            <div class="card card-success">

                <div class="card-header">
                    <h3 class="card-title">Editar Materia</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <form action="{{ url('admin/materias/' . $materia->id) }}" method="post">
                        
                        @csrf

                        @method('PUT')

                        <!-- Nombre de la Carrera-->
                        <div class="form-group">
                            <label for="carrera_id">Nombre de la Carrera <span class="text-danger">*</span></label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                </div><!-- /.input-group-prepend -->
                                <select name="carrera_id" required class="form-control">
                                    <option value="">Seleccione una carrera...</option>
                                    @foreach ($carreras as $carrera)
                                        <option value="{{  $carrera->id }}" {{ old('carrera_id', $materia->carrera_id) == $carrera->id ? 'selected' : '' }}>
                                            {{ $carrera->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div><!-- /.input-group -->
                            @error('carrera_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div><!-- /.form-group -->

                        <!-- Nombre de la Materia -->
                        <div class="form-group">
                            <label for="nombre">Nombre de la Materia  <span class="text-danger">*</span></label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-book"></i></span>
                                </div><!-- /.input-group-prepend -->
                                <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $materia->nombre) }}" placeholder="Escriba el nombre de la materia..." required> 
                            </div><!-- /.input-group -->
                            @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div><!-- /.form-group -->
                            
                        <!-- Código de la Materia -->
                        <div class="form-group">
                            <label for="nombre">Código de la Materia  <span class="text-danger">*</span></label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                                </div><!-- /.input-group-prepend -->
                                <input type="text" class="form-control" name="codigo" value="{{ old('codigo', $materia->codigo) }}" placeholder="Ingrese el código..." required> 
                            </div><!-- /.input-group -->
                            @error('codigo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div><!-- /.form-group -->
                           
                        <hr class="mb-4">

                        <div class="form-group">
                            <a href="{{ url('/admin/materias') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-info">Actualizar Materia</button>
                        </div><!-- /.form-group -->
                            
                    </form>

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-6 -->

    </div><!-- /.row -->

@stop

@section('css')
    
@stop


@section('js')
    
@stop