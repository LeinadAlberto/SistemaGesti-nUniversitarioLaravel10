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

                            <div class="col-md-12 d-flex align-items-stretch flex-column">

                                <div class="card bg-light d-flex flex-fill">

                                    <div class="card-header text-muted border-bottom-0 pb-0">
                                        Apellido(s) y Nombre(s)
                                    </div><!-- /.card-header -->

                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b id="nombre_apellido"></b></h2>
                                                <p class="text-muted text-sm">
                                                    <b>Profesión: </b> 
                                                    <span id="profesion"></span>
                                                </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <!-- Cédula de Identidad-->
                                                    <li class="small">
                                                        <span class="fa-li">
                                                            <i class="fas fa-lg fa-id-card"></i>
                                                        </span> 
                                                        <b>CI: </b><span id="ci"></span>
                                                    </li>

                                                    <!-- Fecha de Nacimiento -->
                                                    <li class="small">
                                                        <span class="fa-li">
                                                            <i class="fas fa-lg fa-calendar-alt"></i>
                                                        </span> 
                                                        <b>Fecha de Nacimiento: </b><span id="fecha_nacimiento"></span>
                                                    </li>

                                                    <!-- Teléfono -->
                                                    <li class="small">
                                                        <span class="fa-li">
                                                            <i class="fas fa-lg fa-phone"></i>
                                                        </span> 
                                                        <b>Teléfono: </b><span id="telefono"></span>
                                                    </li>

                                                    <!-- Correo Electrónico -->
                                                    <li class="small">
                                                        <span class="fa-li">
                                                            <i class="fas fa-lg fa-envelope-open"></i>
                                                        </span> 
                                                        <b>Correo Electrónico: </b><span id="email"></span>
                                                    </li>

                                                    <!-- Dirección -->
                                                    <li class="small">
                                                        <span class="fa-li">
                                                            <i class="fas fa-lg fa-building"></i>
                                                        </span> 
                                                        <b>Dirección: </b><span id="direccion"></span>
                                                    </li>
                                                    
                                                    <hr>

                                                    <!-- Número de Referencia -->
                                                    <li class="small">
                                                        <span class="fa-li">
                                                            <i class="fas fa-lg fa-mobile-alt"></i>
                                                        </span> 
                                                        <b>Número de referencia: </b><span id="ref_celular"></span>
                                                    </li>
                                                    
                                                    <!-- Parentesco -->
                                                    <li class="small">
                                                        <span class="fa-li">
                                                            <i class="fas fa-lg fa-user-friends"></i>
                                                        </span> 
                                                        <b>Parentesco: </b><span id="parentesco"></span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-5 text-center">
                                                <img src="" id="foto_estudiante" alt="Foto del estudiante" class="img-circle img-fluid" width="128px" height="128px">
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.card-body -->

                                </div><!-- /.card -->

                            </div><!-- /.col-md-12 -->

                        </div><!-- /.row -->

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
                width: "100%"
            });

            // Enfocar el campo de búsqueda al hacer clic en el select
            $(document).on('select2:open', () => {
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            $('.select2').on('change', function() {
                var id = $(this).val();
                
                if (id) {
                    $.ajax({
                        url: '{{ url('/admin/matriculaciones/buscar_estudiante/') }}' + '/' + id,
                        type: 'GET',
                        success: function(estudiante) {
                            $('#nombre_apellido').html(estudiante.apellidos + ' ' + estudiante.nombres);
                            $('#profesion').html(estudiante.profesion);
                            $('#ci').html(estudiante.ci);
                            $('#fecha_nacimiento').html(estudiante.fecha_nacimiento);
                            $('#telefono').html(estudiante.telefono);
                            $('#direccion').html(estudiante.direccion);
                            $('#email').html(estudiante.usuario.email);
                            $('#ref_celular').html(estudiante.ref_celular);
                            $('#parentesco').html(estudiante.parentesco);
                            $('#foto_estudiante').attr("src", estudiante.foto_url).show();
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