@extends('adminlte::page')

@section('title', 'Admin Roles')

@section('content_header')
    <div class="row">
        <div class="col-md-6"><h5>Nuevo Rol</h5></div>
        <div class="col-md-6 text-right">
            <a href="{{ route('access.role.index') }}" class="btn btn-sm btn-primary"> < Volver </a>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!! Form::open(['route' => 'access.role.store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}


                <div class="form-group">
                    {!! Form::label('name','Nombre', ['class' => '']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group">
                    <input class="btn btn-primary btn-sm" type="submit" value="Grabar">
                </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
