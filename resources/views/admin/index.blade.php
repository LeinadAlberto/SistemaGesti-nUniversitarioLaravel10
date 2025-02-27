@extends('adminlte::page')

@section('content_header')
    <h1>Panel Principal</h1>
    <hr>
@stop

@section('content')
    <div class="row">
        <!-- Gestiones -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/calendario.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Gestiones Registradas</span>
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
            <div class="info-box">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/diploma.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Carreras Registradas</span>
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
            <div class="info-box">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/grafico-de-linea.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Niveles Registrados</span>
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
            <div class="info-box">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/reloj.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Turnos Registrados</span>
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
            <div class="info-box">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/diagrama-de-flujo.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Paralelos Registrados</span>
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
            <div class="info-box">
                <span class="info-box-icon bg-info">
                    <img src="{{ url("/img/hexagonal.gif") }}" width="100%" alt="imagen">
                </span>
                
                <div class="info-box-content">
                    <span class="info-box-text text-info" style="font-weight: bold">Periodos Registrados</span>
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
    </div><!-- /.row -->
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop