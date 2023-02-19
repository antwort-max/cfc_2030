@extends('adminlte::page')

@section('title', 'Listados Documentos')

@section('content_header')
   @include('document.document.breadcrumb')
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6"> Documentos </div>
                <div class="col-md-6 text-right"><a href="{{ route('document.document.create') }}" class="btn btn-sm btn-primary"> + Nuevo </a></div>
            </div>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped dt-responsive nowrap table-hover" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th><small>Folio</small></th>
                        <th><small>Area</small></th>
                        <th><small>Nombre</small></th>
                        <th><small>Archivo</small></th>
                        <th><small>Dueño</small></th>
                        <th><small>Versión</small></th>
                        <th><small>Status</small></th>
                        <th><small>Creado</small></th>
                        <th><small>Comentario</small></th>
                        <th><small>Archivo</small></th>
                        <th><small>Actualizado</small></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td><small>{{ $item->id }}</small></td>
                            <td><small>{{ $item->administrative_area->name }}</small></td>
                            <td><small><a href="{{ route('document.document.show', $item->id) }}">{{ $item->name }}</a></small></td>
                            <td><small>{{ $item->document_file->name }}</small></td>
                            <td><small>{{ $item->user->name }}</small></td>
                            <td><small>{{ $item->version }}</small></td>
                            <td><small>{{ $item->status }}</small></td>
                            <td><small>{{ $item->created_at->format('d-m-Y') }}</small></td>
                            <td><small>{{ $item->comment }}</small></td>
                            <td><small><a href="{{ asset('storage/'.$item->file) }}" target=”_blank”> {{ $item->file }}</a></small></td>
                            <td><small>{{ $item->updated_at->format('d-m-Y') }}</small></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <link rel="styleshhet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ],
                responsive: true,
                autoWidth: false,
                "language": {
                    "order": [[0, "asc"]],
                    "ordering": true,
                    "lengthMenu": "Mostrando _MENU_ registros por pagina",
                    "zeroRecords": "No hay registros",
                    "info": "Mostrando _PAGE_ de _PAGES_ paginas",
                    "infoEmpty": "Registro no encontrado",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search" : "Busqueda",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Ultimo",
                        "next":       "Proximo >",
                        "previous":   "< Previo"
                    },
                }
            });
        } );
    </script>
@stop
