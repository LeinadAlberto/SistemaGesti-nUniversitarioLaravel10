@extends('adminlte::page')

@section('content_header')
    <h1><b>Personal Docente / Datos del Docente</b></h1>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <a href="{{ url('/admin/docentes') }}" class="btn btn-secondary">Volver</a>
            </div><!-- /.form-group -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
@stop

@section('content')

    <!-- Información Docente -->
    <div class="row">

        <div class="col-md-12">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title">Datos Registrados</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-9">

                            <div class="row">

                                <!-- Nombres del Docente-->
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Nombre(s)</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" name="nombres" value="{{ old('nombres', $docente->nombres) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-4 -->

                                <!-- Apellidos del Docente-->
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Apellido(s)</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos', $docente->apellidos) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-4 -->

                                <!-- Rol-->
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Rol</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <select name="rol" class="form-control" readonly>
                                                @foreach ($roles as $rol)
                                                    @if ($rol->name == 'DOCENTE')
                                                        <option value="{{ $rol->name }}" {{ $rol->name == 'DOCENTE' ? 'selected' : '' }}>
                                                            {{ $rol->name }}
                                                        </option>
                                                    @else
                                                        <option value="">No existe el rol DOCENTE</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->

                            <div class="row">

                                <!-- Fecha de Nacimiento-->
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label>Fecha de Nacimiento</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $docente->fecha_nacimiento) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-4 -->
    
                                <!-- Teléfono-->
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label>Teléfono</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" name="telefono" value="{{ old('telefono', $docente->telefono) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-4 -->
    
                                <!-- Profesión -->
                                <div class="col-md-4">
    
                                    <div class="form-group">
                                        <label>Profesión</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" name="profesion" value="{{ old('profesion', $docente->profesion) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-4 -->
    
                            </div><!-- /.row -->

                            <div class="row">

                                <!-- Dirección -->
                                <div class="col-md-8">

                                    <div class="form-group">
                                        <label>Dirección</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" name="direccion" value="{{ old('direccion', $docente->direccion) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-6 -->

                                <!-- CI-->
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Cédula de Identidad</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="text" class="form-control" name="ci" value="{{ old('ci', $docente->ci) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->

                                </div><!-- /.col-md-3 -->

                            </div><!-- /.row -->

                            

                            <div class="row">

                                <!-- Correo Electrónico -->
                                <div class="col-md-8">
    
                                    <div class="form-group">
                                        <label>Correo Electrónico</label>
    
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div><!-- /.input-group-prepend -->
                                            <input type="email" class="form-control" name="email" value="{{ old('email', $docente->usuario->email) }}" readonly>
                                        </div><!-- /.input-group -->
                                    </div><!-- /.form-group -->
    
                                </div><!-- /.col-md-6 -->
    
                            </div><!-- /.row -->

                        </div><!-- /.col-9 -->

                        <div class="col-md-3">

                            <div class="row">

                                <!-- Foto -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        
                                        <input type="file" id="file" name="foto" accept=".jpg,.jpeg,.png" class="form-control" required>
                                        
                                        @error('logo')
                                            <small style="...">{{ $message }}</small>
                                        @enderror
                        
                                        <br>

                                        <center>
                                            <output id="list"></output>
                                        </center>

                                        <script>
                                            function archivo(evt) {
                                                var files = evt.target.files; //FileList object
                                                // Obtenemos la imagen del campo "file".
                                                for (var i = 0, f; f = files[i]; i++) {
                                                    // Solo admitimos imágenes.
                                                    if (!f.type.match('image.*')) {
                                                        continue;
                                                    }
                                                    var reader = new FileReader();
                                                    reader.onload = (function (theFile) {
                                                        return function (e) {
                                                            // Insertamos la imagen
                                                            document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="70%" title="', escape(theFile.name), '"/>'].join('');
                                                        };
                                                    }) (f);
                                                    reader.readAsDataURL(f);
                                                }
                                            }
                                            document.getElementById('file').addEventListener('change', archivo, false);
                                        </script>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-md-12 -->

                            </div><!-- /.row -->

                        </div><!-- /.col-3 -->

                    </div><!-- /.row -->

                </div><!-- /.card-body --> 

            </div><!-- /.card -->

        </div><!-- /.col-md-12 -->

    </div><!-- /.row -->

    <!-- Información de Formación del Docente -->

    <hr>

    <h3><b>Formación académica del docente</b></h3>

    <hr>

    <div class="row">

        <div class="col-md-12">

            <div class="card card-info">

                <div class="card-header">
                    <h3 class="card-title align-middle">Datos Registrados</h3>

                    <div class="card-tools">

                        <!-- Button trigger modal -->
                        <button style="background-color: rgb(8, 46, 55); color: white; border: none;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Añadir Formación
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(8, 46, 55); color: white;">
                                        <h5 class="modal-title" id="exampleModalLabel">Registro de Formación</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body text-dark">
                                        <form action="{{ url('/admin/docentes/createformacion/' . $docente->id) }}" method="POST" enctype="multipart/form-data">

                                            @csrf

                                            <div class="row">
                                                <!-- Título -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="titulo">Título <span class="text-danger">*</span></label>
                                                    
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-certificate"></i></span>
                                                            </div><!-- /.input-group-prepend -->
                                                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}" placeholder="Ingrese el título..." required>
                                                        </div><!-- /.input-group -->
                                                        @error('titulo')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div><!-- /.form-group -->
                                                </div><!-- /.col-md-12 -->

                                                <!-- Institución -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="institucion">Institución <span class="text-danger">*</span></label>
                                                    
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-university"></i></span>
                                                            </div><!-- /.input-group-prepend -->
                                                            <input type="text" class="form-control" id="institucion" name="institucion" value="{{ old('institucion') }}" placeholder="Ingrese la institución..." required>
                                                        </div><!-- /.input-group -->
                                                        @error('institucion')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div><!-- /.form-group -->
                                                </div><!-- /.col-md-12 -->

                                                <!-- Nivel -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="nivel">Nivel <span class="text-danger">*</span></label>
                                                    
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-layer-group"></i></span>
                                                            </div><!-- /.input-group-prepend -->
                                                            <select class="form-control" name="nivel" id="nivel" required>
                                                                <option value="" disabled selected>Seleccione el nivel...</option>
                                                                <option value="Técnico {{ old('nivel') == 'Técnico' ? 'selected' : '' }}">Técnico</option>
                                                                <option value="Licenciatura {{ old('nivel') == 'Licenciatura' ? 'selected' : '' }}">Licenciatura</option>
                                                                <option value="Maestria {{ old('nivel') == 'Maestria' ? 'selected' : '' }}">Maestria</option>
                                                                <option value="Doctorado {{ old('nivel') == 'Doctorado' ? 'selected' : '' }}">Doctorado</option>
                                                            </select>
                                                        </div><!-- /.input-group -->
                                                        @error('nivel')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div><!-- /.form-group -->
                                                </div><!-- /.col-md-12 -->

                                                <!-- Fecha de Graduación -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="ano_graduacion">Fecha de Graduación <span class="text-danger">*</span></label>
                                                    
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                                            </div><!-- /.input-group-prepend -->
                                                            <input type="date" class="form-control" id="ano_graduacion" name="ano_graduacion" value="{{ old('ano_graduacion') }}" required>
                                                        </div><!-- /.input-group -->
                                                        @error('ano_graduacion')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div><!-- /.form-group -->
                                                </div><!-- /.col-md-12 -->

                                                <!-- Archivo -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="archivo">Archivo (Certificado/Diploma) <span class="text-danger">*</span></label>
                                                    
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-upload"></i></span>
                                                            </div><!-- /.input-group-prepend -->
                                                            <input type="file" class="form-control" id="archivo" name="archivo" required>
                                                        </div><!-- /.input-group -->
                                                        @error('archivo')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div><!-- /.form-group -->
                                                </div><!-- /.col-md-12 -->
                                            </div><!-- /.row -->

                                            <hr>

                                            <div class="row">
                                                <!-- Botones de Cerrar -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-info" style="background-color: rgb(8, 46, 55); color: white;">Registrar</button>
                                                    </div><!-- /.form-group -->
                                                </div><!-- /.col-md-12 -->
                                            </div><!-- /.row -->

                                        </form>
                                    </div><!-- /.modal-body -->

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
  
                    </div><!-- /.card-tools -->
                </div><!-- /.card-header -->

                <div class="card-body">

                    

                        <table id="example1" class="table table-bordered table-hover table-striped table-sm">
                            <thead>
                                <tr class="text-center text-white" style="background-color: rgb(8, 46, 55); color: white; border: none;">
                                    <th>Nro</th>
                                    <th>Título</th>
                                    <th>Institución</th>
                                    <th>Nivel</th>
                                    <th>Año de Graduación</th>
                                    <th>Archivo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $contador = 1;
                                @endphp
                                @foreach ($formaciones as $formacion)
                                    <tr>
                                        <td class="text-center align-middle">{{ $contador++ }}</td>
                                        <td class="align-middle">{{ $formacion->titulo }}</td>
                                        <td class="align-middle">{{ $formacion->institucion }}</td>
                                        <td class="text-center align-middle">{{ $formacion->nivel }}</td>
                                        <td class="text-center align-middle">{{ $formacion->ano_graduacion }}</td>
                                        <td class="text-center align-middle">
                                            <a href="{{ url($formacion->archivo) }}" target="_blank" class="btn btn-success">Ver archivo</a>
                                            
                                        </td>
                                        
                                        <!-- Boton Elimninar -->
                                        <td class="text-center align-middle">
                                            <div class="btn-group" role="group">
                                                
                                                <form action="{{ url('/admin/docentes/formacion/' . $formacion->id) }}" method="post"
                                                    onclick="preguntar{{$formacion->id}}(event)" id="miFormulario{{$formacion->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 0px 4px 4px 0px">
                                                        <i class="fas fa-trash" title="Eliminar"></i>
                                                    </button>
                                                </form>
                                                <script>
                                                    function preguntar{{$formacion->id}}(event) {
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
                                                                var form = $('#miFormulario{{$formacion->id}}');
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

                     

                    <hr class="mb-4">

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
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Formaciones",
                    "infoEmpty": "Mostrando 0 a 0 de 0 Formaciones",
                    "infoFiltered": "(Filtrado de _MAX_ total Formaciones)",
                    "lengthMenu": "Mostrar _MENU_ Formaciones",
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