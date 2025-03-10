@extends('adminlte::page')

@section('content_header')
    <h1><b>Listado del personal docente</b></h1>
@stop

@section('content')

    <div class="row">

        <div class="col-md-12">

            <div class="card card-outline card-info">

                <div class="card-header">
                    <h3 class="card-title">Docentes Registrados</h3>

                    <div class="card-tools">
                        <a href="{{ url('/admin/docentes/create') }}" class="btn btn-info"> Crear nuevo</a>
                    </div><!-- /.card-tools -->
                </div><!-- /.card-header -->

                <div class="card-body">

                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr class="text-center text-white" style="background-color: #212529">
                                <th>Nro</th>
                                {{-- <th>Rol</th> --}}
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Cédula</th>
                                <th>Correo</th>
                                <th>Foto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $contador = 1;
                            @endphp
                            @foreach ($docentes as $docente)
                                <tr>
                                    <td class="text-center align-middle">{{ $contador++ }}</td>

                                    {{-- <td>{{ $administrativo->usuario->roles->pluck('name')->implode(', ') }}</td> --}}
                                    <td class="align-middle">{{ $docente->nombres }}</td>
                                    <td class="align-middle">{{ $docente->apellidos }}</td>
                                    <td class="text-center align-middle">{{ $docente->ci }}</td>
                                    <td class="text-center align-middle">{{ $docente->usuario->email }}</td>
                                    <td class="text-center align-middle">
                                        <img src="{{ url($docente->foto) }}" alt="image docente" width="80px">
                                    </td>
                                    
                                    <!-- Botones Ver, Editar y Elimninar -->
                                    <td class="text-center align-middle">
                                        <div class="btn-group" role="group">
                                            
                                            <a href="{{ url('/admin/docentes/' . $docente->id) }}" 
                                                class="btn btn-sm btn-info" 
                                                style="border-radius: 0px 0px 0px 0px">
                                                <i class="fas fa-eye" title="Ver"></i>
                                            </a>

                                            <a href="{{ url('/admin/docentes/' . $docente->id . '/edit') }}" 
                                                class="btn btn-sm btn-success" 
                                                style="border-radius: 0px 0px 0px 0px">
                                                <i class="fas fa-pencil-alt" title="Editar"></i>
                                            </a>

                                            <form action="{{ url('/admin/docentes',$docente->id) }}" method="post"
                                                onclick="preguntar{{$docente->id}}(event)" id="miFormulario{{$docente->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 0px 4px 4px 0px">
                                                    <i class="fas fa-trash" title="Eliminar"></i>
                                                </button>
                                            </form>
                                            <script>
                                                function preguntar{{$docente->id}}(event) {
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
                                                            var form = $('#miFormulario{{$docente->id}}');
                                                            form.submit();
                                                        }
                                                    }); 
                                                }
                                            </script>

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
    </style>
@stop


@section('js')
    <script>
        $(function() {
            $('#example1').DataTable({
                "pageLength": 5,
                "language": {
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Docentes",
                    "infoEmpty": "Mostrando 0 a 0 de 0 Docentes",
                    "infoFiltered": "(Filtrado de _MAX_ total Docentes)",
                    "lengthMenu": "Mostrar _MENU_ Docentes",
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