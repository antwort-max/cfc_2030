@extends('adminlte::page')

@section('title', 'Admin Roles')

@section('content_header')
    <div class="row">
        <div class="col-md-6"><h5>Modificar Rol</h5></div>
        <div class="col-md-6 text-right">
            <a href="{{ route('access.role.index') }}" class="btn btn-sm btn-dark"> < Volver </a>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::model($role, ['route' => ['access.role.update', $role], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

                <div class="form-group">
                    {!! Form::label('name','Nombre', ['class' => '']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6"><input class="btn btn-primary btn-sm" type="submit" value="Actualizar"></div>
            {!! Form::close() !!}
                    <div class="col-md-6 text-right">
                        <form action="{{ route('access.role.destroy', $role)}}" method="POST">
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
    </div>

    <div class="card">
        <div class="card-header"><b>Listado de Permisos</b></div>
        <div class="card-body">
             {!! Form::model($role, ['route' => ['access.role.permission', $role], 'method' => 'PUT']) !!}
                @foreach ($permissions as $permission)
                    <div>
                        <label>
                            {!! Form::checkbox('permission[]', $permission->id, $role->hasPermissionTo($permission->id), ['class' => 'mr-3',]) !!}
                            {{ $permission->name }}
                        </label>
                    </div>
                @endforeach
                <hr>
                {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary btn-sm', ]) !!}
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
