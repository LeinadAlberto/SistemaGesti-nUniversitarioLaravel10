@extends('adminlte::page')

@section('content_header')
    <h1><b>Listado de Estudiantes Matriculados</b></h1>
@stop

@section('content')

    <div class="row">

        <div class="col-md-12">

            <div class="card card-outline card-info">

                <div class="card-header">
                    <h3 class="card-title">Matriculaciones Registradas</h3>

                    <div class="card-tools">
                        <a href="{{ url('/admin/matriculaciones/create') }}" class="btn btn-info"> Crear nuevo</a>
                    </div><!-- /.card-tools -->
                </div><!-- /.card-header -->

                <div class="card-body">

                    <table id="example1" class="table table-bordered table-hover table-striped">

                        <thead>

                            <tr class="text-center text-white" style="background-color: #212529">
                                <th class="align-middle" style="width: 15px">Nro</th>
                                <th class="align-middle">Estudiante</th>
                                <th class="align-middle" style="width: 70px">Cédula de Identidad</th>                        
                                <th class="align-middle">Gestión</th>                        
                                <th class="align-middle">Nivel</th>                        
                                <th class="align-middle">Periodo</th>                        
                                <th class="align-middle">Carrera</th>                        
                                <th class="align-middle">Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            @php
                                $contador = 1;
                            @endphp

                            @foreach ($matriculaciones as $matriculacion)

                                <tr>
                                    <td class="text-center align-middle">{{ $contador++ }}</td>
                                    <td class="align-middle">{{ $matriculacion->estudiante->apellidos . ' ' . $matriculacion->estudiante->nombres }}</td>
                                    <td class="text-center align-middle">{{ $matriculacion->estudiante->ci }}</td>
                                    <td class="text-center align-middle">{{ $matriculacion->gestion->nombre }}</td>
                                    <td class="text-center align-middle">{{ $matriculacion->nivel->nombre }}</td>
                                    <td class="text-center align-middle">{{ $matriculacion->periodo->nombre }}</td>
                                    <td class="text-center align-middle">{{ $matriculacion->carrera->nombre }}</td>
                                    
                                    <!-- Botones Asignar Materias | Editar Matriculación | Eliminar Matriculación -->
                                    <td class="text-center align-middle">

                                        <div class="btn-group" role="group">

                                            <!-- Boton para Asignar Materias -->
                                            <button type="button" class="btn btn-sm btn-info " title="Asignar Materias" style="border-radius: 4px 0px 0px 4px;" data-toggle="modal" data-target="#exampleModal{{ $matriculacion->id }}">
                                                <i class="fas fa-list" style="margin-right: 7px;"></i> Asignar Materias 
                                            </button>
  
                                            <!-- Modal para Asignar Materias -->
                                            <div class="modal text-left  fade" id="exampleModal{{ $matriculacion->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                
                                                <div class="modal-dialog modal-lg">

                                                    <div class="modal-content">

                                                        <div class="modal-header bg-info">
                                                            <h5 class="modal-title" id="exampleModalLabel">Asignación de Materias</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div><!-- /.modal-header -->
                                                        
                                                        <div class="modal-body">

                                                            <h4 class="text-center">Materias registradas en la matricula</h4>

                                                            <!-- Tabla con las materias registradas -->
                                                            <div class="row mb-3">

                                                                <table class="table table-bordered table-hover table-striped table-sm">

                                                                    <thead>
                                                                        <tr class="text-center bg-dark">
                                                                            <th>Nro</th>
                                                                            <th>Materia</th>
                                                                            <th>Código</th>
                                                                            <th>Turno</th>
                                                                            <th>Paralelo</th>
                                                                            <th>Nota Final</th>
                                                                            <th>Acción</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        @php
                                                                            $contadorMaterias = 1;
                                                                        @endphp

                                                                        @foreach ($asignacionMaterias as $asignacionMateria)

                                                                            @if ($asignacionMateria->matriculacion_id == $matriculacion->id)

                                                                                <tr>
                                                                                    <td class="text-center align-middle">{{ $contadorMaterias++ }}</td>
                                                                                    <td class="text-center align-middle">{{ $asignacionMateria->materia->nombre }}</td>
                                                                                    <td class="text-center align-middle">{{ $asignacionMateria->materia->codigo }}</td>
                                                                                    <td class="text-center align-middle">{{ $asignacionMateria->turno->nombre }}</td>
                                                                                    <td class="text-center align-middle">{{ $asignacionMateria->paralelo->nombre }}</td>
                                                                                    <td class="text-center align-middle">{{ $asignacionMateria->nota_final }}</td>
                                                                                    <td class="text-center align-middle">
                                                                                        <form action="{{ url('/admin/matriculaciones/asignar_materia',$asignacionMateria->id) }}" method="post"
                                                                                            onclick="preguntar1{{$asignacionMateria->id}}(event)" id="miFormulario1{{$asignacionMateria->id}}" class="d-flex justify-content-center">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 4px 4px 4px 4px">
                                                                                                <i class="fas fa-trash" title="Eliminar"></i>
                                                                                            </button>
                                                                                        </form>
                                                                                        <script>
                                                                                            function preguntar1{{$asignacionMateria->id}}(event) {
                                                                                                event.preventDefault();
                                                                                                Swal.fire({
                                                                                                    title: '¿Desea eliminar este registro?',
                                                                                                    text: '',
                                                                                                    icon: 'question',
                                                                                                    showDenyButton: true,
                                                                                                    confirmButtonText: 'Eliminar', 
                                                                                                    confirmButtonColor: '#A5161D', 
                                                                                                    denyButtonColor: '#270A0A', 
                                                                                                    denyButtonText: 'Cancelar', 
                                                                                                }).then( (result) => {
                                                                                                    if (result.isConfirmed) {
                                                                                                        var form = $('#miFormulario1{{$asignacionMateria->id}}');
                                                                                                        form.submit();
                                                                                                    }
                                                                                                }); 
                                                                                            }
                                                                                        </script>
                                                                                    </td>
                                                                                </tr>
                                                                            @endif

                                                                        @endforeach

                                                                    </tbody>

                                                                </table>

                                                            </div><!-- /.row -->

                                                    <form action="{{ url('/admin/matriculaciones/asignar_materia/create') }}" method="post">
                                                        
                                                            @csrf
                                                            
                                                            <input type="hidden" name="matriculacion_id" value="{{ $matriculacion->id }}">

                                                            <div class="row mb-3">
                                                                <!-- Materia -->
                                                                <div class="col-md-6">
                                                                    <label for="">Materia</label>
                                                                    <select name="materia_id" id="" class="form-control" required>
                                                                        <option value="">Seleccionar...</option>
                                                                        @foreach ($materias as $materia)
                                                                            @if ($matriculacion->carrera_id == $materia->carrera_id)
                                                                                <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div><!-- /.col-md-6 -->

                                                                <!-- Turno -->
                                                                <div class="col-md-6">
                                                                    <label for="">Turno</label>
                                                                    <select name="turno_id" id="" class="form-control" required>
                                                                        <option value="">Seleccionar...</option>
                                                                        @foreach ($turnos as $turno)
                                                                            <option value="{{ $turno->id }}">{{ $turno->nombre }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div><!-- /.col-md-6 -->
                                                            </div><!-- /.row -->

                                                            <div class="row mb-3">
                                                                <!-- Paralelo -->
                                                                <div class="col-md-6">
                                                                    <label for="">Paralelo</label>
                                                                    <select name="paralelo_id" id="" class="form-control" required>
                                                                        <option value="">Seleccionar...</option>
                                                                        @foreach ($paralelos as $paralelo)
                                                                            <option value="{{ $paralelo->id }}">{{ $paralelo->nombre }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div><!-- /.col-md-6 -->
                                                            </div><!-- /.row -->

                                                        </div><!-- /.modal-body -->
    
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                                                            <button type="submit" class="btn btn-info">Asignar</button>
                                                        </div><!-- /.modal-footer -->

                                                    </form>

                                                    </div><!-- /.modal-content -->

                                                </div><!-- /.modal-dialog -->

                                            </div><!-- /.modal -->
                                            
                                            <!-- Boton para Editar Matriculación -->
                                            <a href="{{ url('/admin/matriculaciones/' . $matriculacion->id . '/edit') }}" 
                                                class="btn btn-sm btn-success" 
                                                style="border-radius: 0px 0px 0px 0px"
                                                title="Editar Matricula">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <!-- Boton para Eliminar Matriculación -->
                                            <form action="{{ url('/admin/matriculaciones',$matriculacion->id) }}" method="post"
                                                onclick="preguntar{{$matriculacion->id}}(event)" id="miFormulario{{$matriculacion->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Matricula" style="border-radius: 0px 0px 0px 0px">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <script>
                                                function preguntar{{$matriculacion->id}}(event) {
                                                    event.preventDefault();
                                                    Swal.fire({
                                                        title: '¿Desea eliminar este registro?',
                                                        text: '',
                                                        icon: 'question',
                                                        showDenyButton: true,
                                                        confirmButtonText: 'Eliminar', 
                                                        confirmButtonColor: '#A5161D', 
                                                        denyButtonColor: '#270A0A', 
                                                        denyButtonText: 'Cancelar', 
                                                    }).then( (result) => {
                                                        if (result.isConfirmed) {
                                                            var form = $('#miFormulario{{$matriculacion->id}}');
                                                            form.submit();
                                                        }
                                                    }); 
                                                }
                                            </script>

                                            <!-- Boton para imprimir PDF de la Matricula -->
                                            <a href="{{ url('/admin/matriculaciones/pdf/' . $matriculacion->id) }}" class="btn btn-warning btn-sm" title="Imprimir Matricula" target="_blank" style="border-radius: 0px 4px 4px 0px">
                                                <i class="fas fa-print"></i>
                                            </a>
                                        </div><!-- /.btn-group -->

                                    </td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-8 -->

    </div><!-- /.row -->

@stop

@section('css')
    <style>
        /* Fondo transparente y sin borde en el contenedor */
        #example1_wrapper .dt-buttons {
            background-color: transparent;
            box-shadow: none;
            border: none;
            display: flex;
            justify-content: center; /* Centrar los botones */
            gap: 10px; /* Espaciado entre botones */
            margin-bottom: 15px; /* Separar botones de la tabla */
        }

        /* Estilo personalizado para los botones */
        #example1_wrapper .btn {
            color: #FFF; 
            border-radius: 4px;
            padding: 5px 15px;
            font-size: 14px;
        }

        /* Colores por tipo de boton */
        .btn-danger { background-color: #DC3545; border: none; }
        .btn-success { background-color: #28A745; border: none; }
        .btn-info { background-color: #17A2B8; border: none; }
        .btn-warning { background-color: #FFC107; color: #212529; border: none; }
        .btn-default { background-color: #6E7176; color: #212529; border: none; }

        .btn-sm {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            line-height: 1.5; /* Altura de línea consistente */
        }

        .btn-group .btn {
            height: 38px; /* Altura fija para todos los botones */
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@stop


@section('js')
    <script>
        $(function() {
            $('#example1').DataTable({
                "pageLength": 5,
                "language": {
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Matriculas",
                    "infoEmpty": "Mostrando 0 a 0 de 0 Matriculas",
                    "infoFiltered": "(Filtrado de _MAX_ total Matriculas)",
                    "lengthMenu": "Mostrar _MENU_ Matriculas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscador:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                buttons: [
                    { text: '<i class="fas fa-copy"></i> COPIAR', extend: 'copy', className: 'btn btn-default'},
                    { text: '<i class="fas fa-file-pdf"></i> PDF', extend: 'pdf', className: 'btn btn-danger' },
                    { text: '<i class="fas fa-file-csv"></i> CSV', extend: 'csv', className: 'btn btn-info' },
                    { text: '<i class="fas fa-file-excel"></i> EXCEL', extend: 'excel', className: 'btn btn-success' },
                    { text: '<i class="fas fa-print"></i> IMPRIMIR', extend: 'print', className: 'btn btn-warning' },
                ] 
            }).buttons().container().appendTo('#example1_wrapper .row:eq(0)');
        });
    </script>
@stop