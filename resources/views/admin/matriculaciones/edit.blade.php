@extends('adminlte::page')

@section('content_header')
    <h1><b>Matriculaciones / Editar Matriculación</b></h1>
@stop

@section('content')

    <div class="row">

        <!-- Tarjeta lado Isquierdo - Datos del Estudiante -->
        <div class="col-md-6">

            <div class="card card-success">

                <div class="card-header">
                    <h3 class="card-title">Datos del Estudiante</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Buscar Estudiante: </label>
                                <select name="" id="buscar_estudiante" class="form-control select2">
                                    <option value="">Buscar...</option>
                                    @foreach ($estudiantes as $estudiante)
                                        <option value="{{ $estudiante->id }}" {{ old("buscar_estudiante", $estudiante->id) == $matriculacion->estudiante_id ? "selected" : "" }}>
                                            {{ $estudiante->apellidos . ' ' . $estudiante->nombres . ' - ' . $estudiante->ci }}
                                        </option>
                                    @endforeach
                                </select>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    
                    <hr class="mb-4">

                    <div class="row" id="datos_estudiante" style="display: block;">

                        <div class="col-md-12 d-flex align-items-stretch flex-column">

                            <div class="card bg-light d-flex flex-fill">

                                <div class="card-header text-muted border-bottom-0 pb-0">
                                    Apellido(s) y Nombre(s)
                                </div><!-- /.card-header -->

                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b id="nombre_apellido">{{ $matriculacion->estudiante->apellidos }} {{ $matriculacion->estudiante->nombres }}</b></h2>
                                            <p class="text-muted text-sm">
                                                <b>Profesión: </b> 
                                                <span id="profesion">{{ $matriculacion->estudiante->profesion }}</span>
                                            </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <!-- Cédula de Identidad-->
                                                <li class="small">
                                                    <span class="fa-li">
                                                        <i class="fas fa-lg fa-id-card text-success"></i>
                                                    </span> 
                                                    <b>CI: </b><span id="ci">{{ $matriculacion->estudiante->ci }}</span>
                                                </li>

                                                <!-- Fecha de Nacimiento -->
                                                <li class="small">
                                                    <span class="fa-li">
                                                        <i class="fas fa-lg fa-calendar-alt text-success"></i>
                                                    </span> 
                                                    <b>Fecha de Nacimiento: </b><span id="fecha_nacimiento">{{ $matriculacion->estudiante->fecha_nacimiento }}</span>
                                                </li>

                                                <!-- Teléfono -->
                                                <li class="small">
                                                    <span class="fa-li">
                                                        <i class="fas fa-lg fa-phone text-success"></i>
                                                    </span> 
                                                    <b>Teléfono: </b><span id="telefono">{{ $matriculacion->estudiante->telefono }}</span>
                                                </li>

                                                <!-- Correo Electrónico -->
                                                <li class="small">
                                                    <span class="fa-li">
                                                        <i class="fas fa-lg fa-envelope-open text-success"></i>
                                                    </span> 
                                                    <b>Correo Electrónico: </b><span id="email">{{ $matriculacion->estudiante->usuario->email }}</span>
                                                </li>

                                                <!-- Dirección -->
                                                <li class="small">
                                                    <span class="fa-li">
                                                        <i class="fas fa-lg fa-building text-success"></i>
                                                    </span> 
                                                    <b>Dirección: </b><span id="direccion">{{ $matriculacion->estudiante->direccion }}</span>
                                                </li>
                                                
                                                <hr>

                                                <!-- Número de Referencia -->
                                                <li class="small">
                                                    <span class="fa-li">
                                                        <i class="fas fa-lg fa-mobile-alt text-success"></i>
                                                    </span> 
                                                    <b>Número de referencia: </b><span id="ref_celular">{{ $matriculacion->estudiante->ref_celular }}</span>
                                                </li>
                                                
                                                <!-- Parentesco -->
                                                <li class="small">
                                                    <span class="fa-li">
                                                        <i class="fas fa-lg fa-user-friends text-success"></i>
                                                    </span> 
                                                    <b>Parentesco: </b><span id="parentesco">{{ $matriculacion->estudiante->parentesco }}</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-5 text-center">
                                            <img src="{{ url($matriculacion->estudiante->foto) }}" id="foto_estudiante" alt="Foto del estudiante" class="img-circle img-fluid" width="128px" height="128px">
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.card-body -->

                            </div><!-- /.card -->

                        </div><!-- /.col-md-12 -->

                    </div><!-- /.row -->

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-6 -->

        <!-- Tarjetas lado Derecho - Datos de formulario para Matriculacioón-->
        <div class="col-md-6">
            <!-- Tarjeta Superior Derecha -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success">

                        <div class="card-header">
                            <h3 class="card-title">Llene los datos del formulario para la Matriculación</h3>
                        </div><!-- /.card-header -->
        
                        <div class="card-body">
                            
                            <form action="{{ url('admin/matriculaciones/' . $matriculacion->id) }}" method="post">
        
                                @csrf

                                @method('PUT')
        
                                <div class="row">
        
                                    <!-- ID del Estudiante -->
                                    <input type="text" id="estudiante_id" name="estudiante_id" value="{{ $matriculacion->estudiante_id }}" hidden>
            
                                    <!-- Nombre Gestión Académica-->
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="">Gestión Académica <span class="text-danger">*</span></label>
            
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-book text-success"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <select name="gestion_id" class="form-control select2" required>
                                                    <option value="">Seleccionar Gestión Académica...</option>
                                                    @foreach ($gestiones as $gestion)
                                                        <option value="{{ $gestion->id }}" {{ old("gestion_id", $gestion->id) == $matriculacion->gestion_id ? "selected" : "" }}>
                                                            {{ $gestion->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->
            
                                    </div><!-- /.col-md-6 -->
            
                                    <!-- Nombre Nivel-->
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="">Nivel Académico <span class="text-danger">*</span></label>
            
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-layer-group text-success"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <select name="nivel_id" class="form-control select2" required>
                                                    <option value="">Seleccionar Nivel Académico...</option>
                                                    @foreach ($niveles as $nivel)
                                                        <option value="{{ $nivel->id }}" {{ old("nivel_id", $nivel->id) == $matriculacion->nivel_id ? "selected" : "" }}>
                                                            {{ $nivel->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->
            
                                    </div><!-- /.col-md-6 -->
            
                                </div><!-- /.row -->
            
                                <div class="row">
            
                                    <!-- Nombre Carrera-->
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="">Carrera <span class="text-danger">*</span></label>
            
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-graduation-cap text-success"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <select name="carrera_id" class="form-control select2" required>
                                                    <option value="">Seleccionar Carrera...</option>
                                                    @foreach ($carreras as $carrera)
                                                        <option value="{{ $carrera->id }}" {{ old("carrera_id", $carrera->id) == $matriculacion->carrera_id ? "selected" : "" }}>
                                                            {{ $carrera->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->
            
                                    </div><!-- /.col-md-6 -->
                                    
                                    <!-- Nombre Periodo-->
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="">Periodo Académico <span class="text-danger">*</span></label>
            
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar-alt text-success"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <select name="periodo_id" class="form-control select2" required>
                                                    <option value="">Seleccionar Periodo Académico...</option>
                                                    @foreach ($periodos as $periodo)
                                                        <option value="{{ $periodo->id }}" {{ old("periodo_id", $periodo->id) == $matriculacion->periodo_id ? "selected" : "" }}>
                                                            {{ $periodo->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div><!-- /.input-group -->
                                        </div><!-- /.form-group -->
            
                                    </div><!-- /.col-md-6 -->
            
                                </div><!-- /.row -->
                                    
                                <hr class="mb-4">
            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <a href="{{ url('/admin/matriculaciones') }}" class="btn btn-secondary">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
        
                            </form>
        
        
                        </div><!-- /.card-body --> 
        
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->

            <!-- Tarjeta Inferior Derecha -->
            <div class="row" id="historial_academico" style="display: none;">
                <div class="col-md-12">
                    <div class="card card-success">

                        <div class="card-header">
                            <h3 class="card-title">Historial Académico</h3>
                        </div><!-- /.card-header -->
        
                        <div class="card-body">
                            
                            <div id="tabla_historial">



                            </div><!-- #tabla_historial -->

                        </div><!-- /.card-body --> 
        
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->

            <!-- Tarjeta Inferior Derecha de Editar -->
            <div class="row" id="historial_academico_pre" style="display: block;">
                <div class="col-md-12">
                    <div class="card card-success">

                        <div class="card-header">
                            <h3 class="card-title">Historial Académico</h3>
                        </div><!-- /.card-header -->
        
                        <div class="card-body">
                            
                            <table class="table table-bordered table-hover table-striped">

                                <thead class="text-center bg-dark">

                                    <tr>
                                        
                                        <th>Gestión</th>
                                        <th>Nivel</th>
                                        <th>Carrera</th>
                                        <th>Periodo</th>
                                    
                                    </tr>
                                
                                </thead>

                                <tbody class="text-center">
                                    
                                    @foreach ( $matriculacion->estudiante->matriculaciones as $matricula)

                                        <tr>
                                            <td>{{ $matricula->gestion->nombre }}</td>
                                            <td>{{ $matricula->nivel->nombre }}</td>
                                            <td>{{ $matricula->carrera->nombre }}</td>
                                            <td>{{ $matricula->periodo->nombre }}</td>
                                        </tr>
                                    @endforeach
                                
                                </tbody>

                            </table>

                            
                        </div><!-- /.card-body --> 
        
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->
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
                /* placeholder: "Buscar...", */
                /* allowClear: true */
                /* width: "91%" */
            });

            // Enfocar el campo de búsqueda al hacer clic en el select
            $(document).on('select2:open', () => {
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            $('#buscar_estudiante').on('change', function() {

                var id = $(this).val(); // Obtiene el id del Estudiante seleccionado
                
                if (id) {
                    $.ajax({
                        url: '{{ url('/admin/matriculaciones/buscar_estudiante/') }}' + '/' + id,
                        type: 'GET',
                        success: function(estudiante) {

                            console.log(estudiante);

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
                            $('#datos_estudiante').css('display', 'block');
                            $('#historial_academico').css('display', 'block');
                            $('#estudiante_id').val(estudiante.id); 

                            if (estudiante.matriculaciones && estudiante.matriculaciones.length > 0) {
                                var tabla = '<table class="table table-bordered">';
                                    tabla += '<thead><tr><th>Gestión</th><th>Nivel</th><th>Carrera</th><th>Periodo</th></tr></thead>';
                                    tabla += '<tbody>';
                                        estudiante.matriculaciones.forEach(function(matriculacion) {
                                            tabla += '<tr>';
                                                tabla += '<td>' + matriculacion.gestion.nombre + '</td>';
                                                tabla += '<td>' + matriculacion.nivel.nombre + '</td>';
                                                tabla += '<td>' + matriculacion.carrera.nombre + '</td>';
                                                tabla += '<td>' + matriculacion.periodo.nombre + '</td>';
                                            tabla += '</tr>';
                                        });
                                    tabla += '</tbody>';
                                    tabla += '</tbody>';

                                    $('#tabla_historial').html(tabla).show();
                                    $('#historial_academico_pre').css('display', 'none');
                            } else {
                                $('#historial_academico_pre').css('display', 'none');
                                $('#tabla_historial').html('<p class="text-danger"><b>No existe historial académico registrado de este estudiante. </b></p>').show();
                            } 
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