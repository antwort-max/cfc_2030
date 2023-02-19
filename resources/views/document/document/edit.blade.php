@extends('adminlte::page')

@section('title', 'Config Marca')

@section('content_header')
    <div class="row">
        <div class="col-md-6"><h5>Modificar Marca</h5></div>
        <div class="col-md-6 text-right">
            <a href="{{ route('config.brand.index') }}" class="btn btn-sm btn-primary"> < Volver </a>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-sm-6 col-md-4 col-lg-1">
                @if($brand->image <> '')
                    <img src="{{ asset('storage/'.$brand->image) }}" class="img-thumbnail" width="100">
                @else
                    <img src="{{ asset('img/cfc-512x512.png') }}" class="img-thumbnail" width="100">
                @endif
            </div>

            {!! Form::model($brand, ['route' => ['config.brand.update', $brand->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group">
                {!! Form::label('name','Nombre', ['class' => '']) !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group">
                {!! Form::label('country','Nacionalidad', ['class' => '']) !!}
                {!! Form::text('country', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group">
                {!! Form::label('image','Imagen', ['class' => '']) !!}
                {!! Form::file('image', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
            </div>

                <hr>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6"><input class="btn btn-dark btn-sm" type="submit" value="Actualizar"></div>
            {!! Form::close() !!}
                    <div class="col-md-6 text-right">
                        <form action="{{ route('config.brand.destroy', $brand->id)}}" method="POST">
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
