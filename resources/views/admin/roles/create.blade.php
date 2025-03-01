@extends('adminlte::page')

@section('content_header')
    <h1><b>Roles / Registro de un nuevo Rol</b></h1>
@stop

@section('content')

    <div class="row">

        <div class="col-md-6">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">Llene los datos del formulario</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <form action="{{ url('admin/roles/create') }}" method="post">
                        
                        @csrf

                        <div class="row">

                            <div class="col-md-12">
                                <!-- Nombre del Rol-->
                                <div class="form-group">
                                    <label for="">Nombre del Rol <span class="text-danger">*</span></label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                        </div><!-- /.input-group-prepend -->
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Escriba aqui..." required>
                                    </div><!-- /.input-group -->
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div><!-- /.form-group -->

                            </div><!-- /.col-md-12 -->

                        </div><!-- /.row -->
                        
                        <hr class="mb-4">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/roles') }}" class="btn btn-secondary">Cancelar</a>
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