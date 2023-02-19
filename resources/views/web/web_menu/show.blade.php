@extends('adminlte::page')

@section('title', 'Ver Menu Web')

@section('content_header')
    @include('web.web_menu.breadcrumb')  
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $webMenu->name }}
        </div>
        <div class="card-body">
            {!! Form::model($webMenu, ['route' => ['web.web_menu.edit', $webMenu->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('menu','Menu', ['class' => '']) !!}
                        </div>
                        <div class="col-8">
                            {!! Form::text('menu', null, ['class' => 'form-control', 'disabled' ]) !!}
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
                            {!! Form::text('name', null, ['class' => 'form-control', 'disabled' ]) !!}
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
                            {!! Form::text('favicon', null, ['class' => 'form-control', 'disabled' ]) !!}
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
                            {!! Form::text('route', null, ['class' => 'form-control', 'disabled' ]) !!}
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
                            {!! Form::text('can', null, ['class' => 'form-control', 'disabled' ]) !!}
                            {!! $errors->first('can', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div> 
                </div>
                <hr>
                {!! Form::close() !!}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('web.web_menu.edit', $webMenu->id) }}" class="btn btn-dark btn-sm" >Editar</a>
                        </div>
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
