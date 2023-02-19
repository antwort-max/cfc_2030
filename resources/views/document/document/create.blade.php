@extends('adminlte::page')

@section('title', 'Crear Documento')

@section('content_header')
    @include('document.document.breadcrumb')
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            

            {!! Form::open(['route' => 'document.document.store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

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
                            {!! Form::label('area_id','Area Administrativa', ['class' => '']) !!}
                        </div>
                        <div class="col-8">    
                            {!! Form::select('area_id', $administrative_area, null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div> 
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('file_id','Archivo Conservación', ['class' => '']) !!}
                        </div>
                        <div class="col-8">   
                            {!! Form::select('file_id', $document_file, null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('file_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('user_id','Usuario Responsable', ['class' => '']) !!}
                        </div>
                        <div class="col-8">   
                            {!! Form::select('user_id', $user, null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('status','Status', ['class' => '']) !!}
                        </div>
                        <div class="col-8">   
                            {!! Form::text('status', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {!! Form::label('file','Adjuntar Archivo', ['class' => '']) !!}
                        </div>
                        <div class="col-8">   
                            {!! Form::file('file', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                            {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('comment','Explicación detallada', ['class' => '']) !!}
                    {!! Form::textarea('comment', null, ['class' => 'form-control', 'required' => 'true',]) !!}
                    {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
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
    <script> console.log('Hi!'); </script>
@stop
