@extends('adminlte::page')

@section('title', 'Config')

@section('content_header')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="#">Configuración</a></li>
  </ol>
</nav>
<hr>
@stop

@section('content')
   
    <ul class="list-group">
        <a href="{{ route('config.commercial_area.index') }}" class="list-group-item">Areas Comerciales</a>
        <a href="{{ route('config.provider.index') }}" class="list-group-item">Proveedores Comerciales</a>
        <a href="{{ route('config.provider_type.index') }}" class="list-group-item">Tipo de Proveedores</a>
        <hr>
        <a href="{{ route('config.worker.index') }}" class="list-group-item">Listado Trabajadores</a>
    </ul>
    
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop