@extends('adminlte::page')

@section('title', 'Crear Menu Web')

@section('content_header')
    @include('web.web_menu.breadcrumb')
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            

            {!! Form::open(['route' => 'web.web_menu.store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

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
