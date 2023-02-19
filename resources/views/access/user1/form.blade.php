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
    @if ($message = Session::get('success'))
       <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8"> {{ $title['card'] }}</div>
                <div class="col-md text-right">
                    <a class="btn btn-outline-dark btn-sm" href="{{ route($route['index']) }}">< Volver</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if($status_form == 'create')
            {!! Form::open(['route' => $route['store'], 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                @include($url['data'])  
                <hr>
                <div class="row">
                    <div class="col text-right">
                        <input class="btn btn-primary btn-sm" type="submit" value="Grabar">
                    </div>
                </div>
            {!! Form::close() !!}
        @endisset

        @if($status_form == 'show')
            {!! Form::model($data, ['route' => [$route['update'], $data->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                
                @if($data->image == "") 
                    <img src="" width="60" class="rounded float-end">
                @else 
                    <img src="{{ asset('storage/'.$data->image) }}" class="img-thumbnail" width="200">
                    <hr>
                @endif

                @include($url['data'])  
                <hr>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route($route['edit'], $data->id) }}">Editar</a>
                    </div>
                </div>
            {!! Form::close() !!} 
        @endisset

        @if($status_form == 'edit')
            {!! Form::model($data, ['route' => [$route['update'], $data->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
               
                @if($data->image == "") 
                    <img src="" width="60" class="rounded float-end">
                @else 
                    <img src="{{ asset('storage/'.$data->image) }}" class="img-thumbnail" width="200">
                    <hr>
                @endif

                @include($url['data'])  
                <hr>
                <div class="row">
                    <div class="col">
                        <input class="btn btn-primary btn-sm" type="submit" value="Actualizar">
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
            </div>
        </div>
                <div class="card">
                    <div class="card-header"><b>Listado de Roles</b></div>
                    <div class="card-body">
                        {!! Form::model($data, ['route' => ['access.user.role', $data], 'method' => 'PUT']) !!}
                            @foreach ($roles as $role)
                                <div>
                                    <label>
                                        {!! Form::checkbox('role[]', $role->id, $data->hasRole($role->id), ['class' => 'mr-3',]) !!}
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach
                            {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary btn-sm', ]) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
        @endisset

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
