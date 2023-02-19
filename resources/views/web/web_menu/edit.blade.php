@extends('adminlte::page')

@section('title', 'Editar Menu Web')

@section('content_header')
    @include('config.tags.breadcrumb')
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::model($webMenu, ['route' => ['web.web_menu.update', $webMenu->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('menu','Menu', ['class' => '']) !!}
                        </div>
                        <div class="col-8">
                            {!! Form::text('menu', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('menu', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('name','Nombre', ['class' => '']) !!}
                        </div>
                        <div class="col-8">
                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('favicon','Favicon', ['class' => '']) !!}
                        </div>
                        <div class="col-8">
                            {!! Form::text('favicon', null, ['class' => 'form-control', ]) !!}
                            {!! $errors->first('favicon', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('route','Ruta', ['class' => '']) !!}
                        </div>
                        <div class="col-8">
                            {!! Form::text('route', null, ['class' => 'form-control', ]) !!}
                            {!! $errors->first('route', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('can','Can', ['class' => '']) !!}
                        </div>
                        <div class="col-8">    
                            {!! Form::text('can', null, ['class' => 'form-control', ]) !!}
                            {!! $errors->first('can', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div> 
                </div>
               
                <hr>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6"><input class="btn btn-dark btn-sm" type="submit" value="Actualizar"></div>
            {!! Form::close() !!}
                    <div class="col-md-6 text-right">
                        <form action="{{ route('web.web_menu.destroy', $webMenu->id)}}" method="POST">
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
