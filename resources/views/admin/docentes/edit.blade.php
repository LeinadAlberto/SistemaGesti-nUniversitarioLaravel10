@extends('adminlte::page')

@section('content_header')
    <h1><b>Personal Docente / Modificar datos del Docente</b></h1>
@stop

@section('content')

    <div class="row">

        <div class="col-md-12">

            <div class="card card-success">

                <div class="card-header">
                    <h3 class="card-title">Llene los datos del formulario</h3>
                </div><!-- /.card-header -->

                <div class="card-body">

                    <form action="{{ url('admin/docentes', $docente->id) }}" method="post" enctype="multipart/form-data">
                        
                        @csrf

                        @method('PUT')

                        <div class="row">

                            <div class="col-md-9">

                                <div class="row">
                                    <!-- Nombres del Docente-->
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="nombres">Nombre(s) <span class="text-danger">*</span></label>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres', $docente->nombres) }}" placeholder="Ingrese nombre(s)..." required>
                                            </div><!-- /.input-group -->
                                            @error('nombres')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->

                                    </div><!-- /.col-md-4 -->

                                    <!-- Apellidos del Docente-->
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="apellidos">Apellido(s) <span class="text-danger">*</span></label>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ old('apellidos', $docente->apellidos) }}" placeholder="Ingrese apellido(s)..." required>
                                            </div><!-- /.input-group -->
                                            @error('apellidos')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->

                                    </div><!-- /.col-md-4 -->

                                    <!-- Rol-->
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label>Rol <span class="text-danger">*</span></label>

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
                                            @error('rol')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->

                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->

                                <div class="row">

                                    <!-- Fecha de Nacimiento-->
                                    <div class="col-md-4">
        
                                        <div class="form-group">
                                            <label for="fecha_nacimiento">Fecha de Nacimiento <span class="text-danger">*</span></label>
        
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $docente->fecha_nacimiento) }}" placeholder="Ingrese nombres..." required>
                                            </div><!-- /.input-group -->
                                            @error('fecha_nacimiento')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
        
                                    </div><!-- /.col-md-4 -->
        
                                    <!-- Teléfono-->
                                    <div class="col-md-4">
        
                                        <div class="form-group">
                                            <label for="telefono">Teléfono <span class="text-danger">*</span></label>
        
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $docente->telefono) }}" placeholder="Ingrese teléfono..." required>
                                            </div><!-- /.input-group -->
                                            @error('telefono')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
        
                                    </div><!-- /.col-md-4 -->
        
                                    <!-- Profesión -->
                                    <div class="col-md-4">
        
                                        <div class="form-group">
                                            <label for="profesion">Profesión <span class="text-danger">*</span></label>
        
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="text" class="form-control" id="profesion" name="profesion" value="{{ old('profesion', $docente->profesion) }}" placeholder="Ingrese profesión..." required>
                                            </div><!-- /.input-group -->
                                            @error('profesion')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
        
                                    </div><!-- /.col-md-4 -->
        
                                </div><!-- /.row -->

                                <div class="row">
                                    <!-- Dirección -->
                                    <div class="col-md-8">

                                        <div class="form-group">
                                            <label for="direccion">Dirección <span class="text-danger">*</span></label>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $docente->direccion) }}" placeholder="Ingrese dirección..." required>
                                            </div><!-- /.input-group -->
                                            @error('direccion')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->

                                    </div><!-- /.col-md-6 -->

                                    <!-- CI-->
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="ci">Cédula de Identidad <span class="text-danger">*</span></label>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="text" class="form-control" id="ci" name="ci" value="{{ old('ci', $docente->ci) }}" placeholder="Ingrese CI..." required>
                                            </div><!-- /.input-group -->
                                            @error('ci')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->

                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->

                                

                                <div class="row">

                                    <!-- Correo Electrónico -->
                                    <div class="col-md-8">
        
                                        <div class="form-group">
                                            <label for="email">Correo Electrónico <span class="text-danger">*</span></label>
        
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                </div><!-- /.input-group-prepend -->
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $docente->usuario->email) }}" placeholder="Ingrese correo electrónico..." required>
                                            </div><!-- /.input-group -->
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div><!-- /.form-group -->
        
                                    </div><!-- /.col-md-6 -->
        
                                </div><!-- /.row -->

                            </div><!-- /.col-9 -->

                            <div class="col-md-3">
                                <div class="row">
                                    <!-- Foto -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="file">Foto <span class="text-danger">*</span></label>
                                            
                                            <input type="file" id="file" name="foto" accept=".jpg,.jpeg,.png" class="form-control">
                                            
                                            @error('foto')
                                                <small style="...">{{ $message }}</small>
                                            @enderror
                            
                                            <br>

                                            <center>
                                                <output id="list">
                                                    <img src="{{ url($docente->foto) }}" width="200px" alt="imagen docente">
                                                    
                                                </output>
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
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div>

                        </div> 

                        <hr class="mb-4">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('/admin/docentes') }}" class="btn btn-secondary">Cancelar</a>
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