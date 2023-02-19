@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Perfil</a></li>
        </ol>
    </nav>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::model($data, ['route' => ['profile.update', $data], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

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
                        {!! Form::label('email','Correo electrónico', ['class' => '']) !!}
                    </div>
                    <div class="col-8">     
                        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'true',]) !!}                        
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                    </div>
                </div> 
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('phone','Telefono incluya +56', ['class' => '']) !!}
                    </div>
                    <div class="col-8">     
                        {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'true',]) !!}                        
                        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                    </div>
                </div> 
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('whatsapp','Whatsapp incluya +56', ['class' => '']) !!}
                    </div>
                    <div class="col-8">     
                        {!! Form::text('whatsapp', null, ['class' => 'form-control', 'required' => 'true',]) !!}                        
                        {!! $errors->first('whatsapp', '<p class="help-block">:message</p>') !!}
                    </div>
                </div> 
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        {!! Form::label('image','Imagen perfil', ['class' => '']) !!}
                    </div>
                    <div class="col-8">     
                        {!! Form::file('image', null, ['class' => 'form-control', ]) !!}                     
                        {!! $errors->first('whatsapp', '<p class="help-block">:message</p>') !!}
                    </div>
                </div> 
            </div>
            <input class="btn btn-primary btn-sm" type="submit" value="Actualizar">

            {!! Form::close() !!}

        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
