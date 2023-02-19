@extends('adminlte::page')

@section('title', 'Ver Documento')

@section('content_header')
    @include('document.document.breadcrumb')
@stop

@section('content')
    <div class="row">
        <div class="col-md-8 col-sm-6">
                <div class="card">
                <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4 text-sm">Nombre</div>
                                <div class="col-8">
                                    <input type="text" class="form-control form-sm text-sm" value="{{ $document_document->name }}">
                                </div>
                            </div>
                        </div>
                
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4 text-sm">Area Administrativa</div>
                                <div class="col-8">    
                                    <input type="text" class="form-control form-sm text-sm" value="{{ $document_document->administrative_area->name }}">
                                </div>
                            </div> 
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-4 text-sm">Archivo Conservación</div>
                                <div class="col-8">   
                                    <input type="text" class="form-control form-sm text-sm" value="{{ $document_document->document_file->name }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-4 text-sm">Usuario Responsable</div>
                                <div class="col-8">   
                                    <input type="text" class="form-control form-sm text-sm" value="{{ $document_document->user->name }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-4 text-sm">Status</div>
                                <div class="col-8">   
                                    <input type="text" class="form-control form-sm text-sm" value="{{ $document_document->status }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-sm">
                            Explicación detallada
                            <textarea name="" id="" class="form-control form-sm text-sm" cols="30" rows="10">{{ $document_document->comment }}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <input class="btn btn-primary btn-sm" type="submit" value="Grabar">
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <small>
                        {{ $document_document->status }} - Versión : {{ $document_document->version }} 
                    </small>
                
                    <small><a href="{{ asset('storage/'.$document_document->file) }}" target=”_blank”>Documento</a></small>
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
