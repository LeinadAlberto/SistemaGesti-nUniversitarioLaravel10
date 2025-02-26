@extends('adminlte::page')

@section('content_header')
    <h1>Home</h1>
@stop

@section('content')
    <p>Hola soy el Home</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop