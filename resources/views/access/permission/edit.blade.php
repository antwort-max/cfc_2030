@extends('adminlte::page')

@section('title', 'Admin Permisos')

@section('content_header')
    <div class="row">
        <div class="col-md-6"><h5>Modificar Permiso</h5></div>
        <div class="col-md-6 text-right">
            <a href="{{ route('access.permission.index') }}" class="btn btn-sm btn-primary"> < Volver </a>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::model($permission, ['route' => ['access.permission.update', $permission->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

                <div class="form-group">
                    {!! Form::label('name','Nombre', ['class' => '']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>

                <hr>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6"><input class="btn btn-dark btn-sm" type="submit" value="Actualizar"></div>
            {!! Form::close() !!}
                    <div class="col-md-6 text-right">
                        <form action="{{ route('access.permission.destroy', $permission->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Esta seguro?')"
                                type="submit">
                                <i class="fa fa-trash"></i> Eliminar
                            </button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
