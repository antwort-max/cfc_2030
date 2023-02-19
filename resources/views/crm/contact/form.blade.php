@extends('adminlte::page')

@section('title', $title['page'])

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route($breadcrumb[0]) }}">{{ $breadcrumb[1] }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route($breadcrumb[2]) }}">{{ $breadcrumb[3] }}</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route($breadcrumb[4]) }}">{{ $breadcrumb[5] }}</a></li>
        </ol>
    </nav>
@stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <div class="card">
        <div class="card-header"> {{ $title['card'] }} </div>
        <div class="card-body">
        
        @if($status_form == 'create')
            {!! Form::open(['route' => $route['store'], 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                @include('crm.contact.data')  
                <hr>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-dark btn-sm" href="{{ route($route['index']) }}">< Volver</a>
                    </div>
                    <div class="col text-right">
                        <input class="btn btn-dark btn-sm" type="submit" value="Grabar">
                    </div>
                </div>
            {!! Form::close() !!}
        @endisset

        @if($status_form == 'show')
            {!! Form::model($data, ['route' => [$route['update'], $data->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                @include('crm.contact.data') 
                <hr>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-dark btn-sm" href="{{ route($route['index']) }}">< Volver</a>
                    </div>
                    <div class="col text-right">
                        <a class="btn btn-dark btn-sm" href="{{ route($route['edit'], $data->id) }}">Editar</a>
                    </div>
                </div>
            {!! Form::close() !!} 
        @endisset

        @if($status_form == 'edit')
            {!! Form::model($data, ['route' => [$route['update'], $data->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                @include('crm.contact.data') 
                <hr>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-dark btn-sm" href="{{ route($route['index']) }}">< Volver</a>
                        <input class="btn btn-dark btn-sm" type="submit" value="Actualizar">
                        {!! Form::close() !!} 
                    </div>
                    <div class="col text-right">
                        <form action="{{ route($route['destroy'], $data->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Esta seguro?')" type="submit">Eliminar</button>
                        </form>
                    </div>
                </div>
        @endisset

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'comment' );
    </script>
@stop
