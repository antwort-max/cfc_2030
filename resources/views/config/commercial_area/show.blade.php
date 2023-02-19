@extends('adminlte::page')

@section('title', 'Ver Areas Comerciales')

@section('content_header')
    @include('config.commercial_area.breadcrumb')  
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $commercial_area->count() }}
        </div>
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
                            {!! Form::text('name', null, ['class' => 'form-control form-sm', 'disabled']) !!}
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
                            <a href="{{ route('config.commercial_area.edit', $commercial_area->id) }}" class="btn btn-dark btn-sm" >Editar</a>
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
