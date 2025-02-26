@extends('adminlte::page')

@section('content_header')
    <h1><b>Turnos / Editar Turno</b></h1>
@stop

@section('content')

    <div class="row">

        <div class="col-md-6">

            <div class="card card-success">

                <div class="card-header">
                    <h3 class="card-title">Llene los datos del formulario</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <form action="{{ url('admin/turnos', $turno->id) }}" method="post">
                        
                        @csrf

                        @method('PUT')

                        <div class="row">

                            <div class="col-md-12">
                                <!-- Nombre Turno-->
                                <div class="form-group">
                                    <label for="">Nombre del Turno <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $turno->nombre) }}" placeholder="Escriba aqui..." required>
                                    </div><!-- /.input-group -->
                                    @error('nombre')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-12 -->

                        </div><!-- /.row -->
                        
                        <hr class="mb-4">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/turnos') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
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