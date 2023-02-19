@extends('adminlte::page')

@section('title', 'Crear Tags')

@section('content_header')
    @include('config.tags.breadcrumb')
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            

            {!! Form::open(['route' => 'config.tags.store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

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
                            {!! Form::label('color','Color', ['class' => '']) !!}
                        </div>
                        <div class="col-8">
                            {!! Form::select('color', 
                                ['danger' => 'Rojo', 'primary' => 'Azul', 'success' => 'Verde', 'warning' => 'Amarillo', 'info' => 'Celeste'],
                                null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('comment','Comentario', ['class' => '']) !!}
                        </div>
                        <div class="col-8">    
                            {!! Form::text('comment', null, ['class' => 'form-control', 'required' => 'false',]) !!}
                            {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div> 
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

@stop
