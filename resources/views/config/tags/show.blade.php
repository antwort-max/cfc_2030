@extends('adminlte::page')

@section('title', 'Config Tag')

@section('content_header')
    @include('config.tags.breadcrumb')  
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $tags->slug }}
        </div>
        <div class="card-body">
            {!! Form::model($tags, ['route' => ['config.tags.update', $tags->id], 'method' => 'PUT', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('name','Nombre', ['class' => '']) !!}
                        </div>
                        <div class="col-8">
                            {!! Form::text('name', null, ['class' => 'form-control form-sm', 'disabled']) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('color','Color', ['class' => '']) !!}
                        </div>
                        <div class="col-8">
                            {!! Form::select('color', ['rojo' => 'danger', 'azul' => 'primary'], null, ['class' => 'form-control', 'disabled',]) !!}
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
                            {!! Form::text('comment', null, ['class' => 'form-control form-sm', 'disabled']) !!}
                        </div>
                    </div> 
                </div>
                <hr>
                {!! Form::close() !!}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('config.tags.edit', $tags->slug) }}" class="btn btn-dark btn-sm" >Editar</a>
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
