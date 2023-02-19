@extends('adminlte::page')

@section('title', 'Config Tag')

@section('content_header')
    @include('config.tags.breadcrumb')
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::model($tags, ['route' => ['config.tags.update', $tags->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

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
                            {!! Form::text('comment', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div> 
                </div>
                <hr>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6"><input class="btn btn-dark btn-sm" type="submit" value="Actualizar"></div>
            {!! Form::close() !!}
                    <div class="col-md-6 text-right">
                        <form action="{{ route('config.tags.destroy', $tags->slug)}}" method="POST">
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
