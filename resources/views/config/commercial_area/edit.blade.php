@extends('adminlte::page')

@section('title', 'Editar Areas Comerciales')

@section('content_header')
    @include('config.commercial_area.breadcrumb')
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if($commercial_area->image == "") 
                <img src="" width="60" class="rounded float-end">
            @else 
                <img src="{{ asset('storage/'.$commercial_area->image) }}" class="img-thumbnail" width="100">
                <hr>
            @endif

            {!! Form::model($commercial_area, ['route' => ['config.commercial_area.update', $commercial_area->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

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
                            {!! Form::label('comment','Comentario', ['class' => '']) !!}
                        </div>
                        <div class="col-8">    
                            {!! Form::text('comment', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div> 
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('image','Adjuntar Imagen', ['class' => '']) !!}
                        </div>
                        <div class="col-8">   
                            {!! Form::file('image', null, ['class' => 'form-control', 'required' => 'false',]) !!}
                            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>
                <hr>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6"><input class="btn btn-dark btn-sm" type="submit" value="Actualizar"></div>
            {!! Form::close() !!}
                    <div class="col-md-6 text-right">
                        <form action="{{ route('config.commercial_area.destroy', $commercial_area->id)}}" method="POST">
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
