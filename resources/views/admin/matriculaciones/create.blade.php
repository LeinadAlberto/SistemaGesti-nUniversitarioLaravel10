@extends('adminlte::page')

@section('content_header')
    <h1><b>Matriculaciones / Registro de una nueva Matriculación</b></h1>
@stop

@section('content')

    <div class="row">

        <!-- Datos del Estudiante -->
        <div class="col-md-6">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">Datos del Estudiante</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <form action="{{ url('admin/matriculaciones/create') }}" method="post">
                        
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Buscar Estudiante: </label>
                                    <select name="" id="" class="form-control select2">
                                        <option value="">Buscar...</option>
                                        @foreach ($estudiantes as $estudiante)
                                            <option value="{{ $estudiante->id }}">
                                                {{ $estudiante->apellidos . ' ' . $estudiante->nombres . ' - ' . $estudiante->ci }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                        
                        <hr class="mb-4">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/matriculaciones') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-info">Registrar</button>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                    </form>

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-6 -->

        <div class="col-md-6">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">Llene los datos del formulario para la Matriculación</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <form action="{{ url('admin/matriculaciones/create') }}" method="post">
                        
                        @csrf

                        
                        
                        <hr class="mb-4">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/matriculaciones') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-info">Registrar</button>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                    </form>

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-6 -->

    </div><!-- /.row -->

@stop

@section('css')
    <style>
        .select2-container--default .select2-selection--single {
            border: 1px solid #ced4da;
                border-top-color: rgb(206, 212, 218);
                border-right-color: rgb(206, 212, 218);
                border-bottom-color: rgb(206, 212, 218);
                border-left-color: rgb(206, 212, 218);
            padding: .46875rem .75rem;
            height: calc(2.25rem + 2px);
            
        }
    </style>
@stop


@section('js')
    <script>
        $(document).ready(function() {
            $('.select2').select2({});

            // Inicializar select2
            $('.select2').select2({
                placeholder: "Buscar...",
                /* allowClear: true */
            });

            // Enfocar el campo de búsqueda al hacer clic en el select
            $(document).on('select2:open', () => {
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            $('.select2').on('change', function() {
                var id = $(this).val();
                
                if ($id) {
                    $.ajax({
                        url: '{{ url('/admin/matriculaciones/buscar_estudiante/') }}' + '/' +id,
                        type: 'GET',
                        success: function(estudiante) {

                        }, 
                        error: function() {
                            alert('No se pudo obtener la información del Estudiante');
                        }
                    });



                }
            });
        });
    </script>
@stop