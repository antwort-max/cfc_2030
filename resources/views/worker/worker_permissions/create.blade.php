@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
    <li class="breadcrumb-item"><a href="#">Trabajadores</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registro Permisos</li>
  </ol>
</nav>

@stop

@section('content')
  <div class="card">
    <div class="card-header">

    </div>
    
    <div class="card-body">
      
      @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif

      {!! Form::open(['route' => 'worker.worker_permissions.store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
          <div class="row">
            <div class="col-4">
              {!! Form::label('date','Fecha Registro', ['class' => '']) !!}
            </div>
            <div class="col-8">
              {!! Form::date('date', null, ['class' => 'form-control form-control-sm', 'required' => 'true',]) !!}
              {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-4">
              {!! Form::label('name','Observación', ['class' => '']) !!}
            </div>
            <div class="col-8">
              {!! Form::select('name', [
                  'Ausencia con permiso: tramite personal' => 'Ausencia con permiso: tramite personal', 
                  'Ausencia con permiso: hora medico' => 'Ausencia con permiso: hora medico',
                  'Atraso' => 'Atrasos', 
                  'Ausencia sin permiso' => 'Ausencia sin permiso' 
                ], null, ['class' => 'form-control form-control-sm', 'required' => 'true',]) !!}
              {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-4">
              {!! Form::label('boss_id','Encargado', ['class' => '']) !!}
            </div>
            <div class="col-8">
              {!! Form::select('boss_id', $workers, null, ['class' => 'form-control form-control-sm', 'required' => 'true',]) !!}
              {!! $errors->first('boss_id', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-4">
              {!! Form::label('worker_id','Trabajador', ['class' => '']) !!}
            </div>
            <div class="col-8">
              {!! Form::select('worker_id', $workers, null, ['class' => 'form-control form-control-sm', 'required' => 'true',]) !!}
              {!! $errors->first('worker_id', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-4">
              {!! Form::label('hours','Horas perdidas', ['class' => '']) !!}
            </div>
            <div class="col-8">
              {!! Form::time('hours', null, ['class' => 'form-control form-control-sm', 'required' => 'true',]) !!}
              {!! $errors->first('hours', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-4">
              {!! Form::label('comment','Comentario', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
              {!! Form::text('comment', null, ['class' => 'form-control form-control-sm', 'required' => 'true',]) !!}
              {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
        </div>
        <hr>
        <div class="form-group">
          <input class="btn btn-dark btn-sm" type="submit" value="Grabar">
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