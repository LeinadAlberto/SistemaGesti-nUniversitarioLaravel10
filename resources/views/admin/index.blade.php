@extends('adminlte::page')

@section('content_header')
    <h1>Panel Principal</h1>
    <hr>
@stop

@section('content')
    <div class="row">
        <!-- Gestiones -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/calendario.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Gestiones</span>
                    <span class="info-box-number">
                        {{  $total_gestiones }} 
                        @if($total_gestiones == 1)
                            Gestión
                        @else
                            Gestiones
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Carreras -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/diploma.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Carreras</span>
                    <span class="info-box-number">
                        {{  $total_carreras }} 
                        @if($total_carreras == 1)
                            Carrera
                        @else
                            Carreras
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Niveles -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/grafico-de-linea.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Niveles</span>
                    <span class="info-box-number">
                        {{  $total_niveles }} 
                        @if($total_niveles == 1)
                            Nivel
                        @else
                            Niveles
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Turnos -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/reloj.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Turnos</span>
                    <span class="info-box-number">
                        {{  $total_turnos }} 
                        @if($total_turnos == 1)
                            Turno
                        @else
                            Turnos
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Paralelos -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/diagrama-de-flujo.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Paralelos</span>
                    <span class="info-box-number">
                        {{  $total_paralelos }} 
                        @if($total_paralelos == 1)
                            Paralelo
                        @else
                            Paralelos
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Periodos -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/hexagonal.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Periodos</span>
                    <span class="info-box-number">
                        {{  $total_periodos }} 
                        @if($total_periodos == 1)
                            Periodo
                        @else
                            Periodos
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Materias -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/libros.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Materias</span>
                    <span class="info-box-number">
                        {{  $total_materias }} 
                        @if($total_materias == 1)
                            Materia
                        @else
                            Materias
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Roles -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/roles.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Roles</span>
                    <span class="info-box-number">
                        {{  $total_roles }} 
                        @if($total_roles == 1)
                            Rol
                        @else
                            Roles
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Administrativos -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/administrativos.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Administrativos</span>
                    <span class="info-box-number">
                        {{  $total_administrativos }} 
                        @if($total_administrativos == 1)
                            Administrativo
                        @else
                            Administrativos
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Docentes -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/capacitacion.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Docentes</span>
                    <span class="info-box-number">
                        {{  $total_docentes }} 
                        @if($total_docentes == 1)
                            Docente
                        @else
                            Docentes
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->

        <!-- Estudiantes -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box zoomP">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/estudiantes.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Estudiantes</span>
                    <span class="info-box-number">
                        {{  $total_estudiantes }} 
                        @if($total_estudiantes == 1)
                            Estudiante
                        @else
                            Estudiantes
                        @endif
                    </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col-md-3 -->
    </div><!-- /.row -->
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop