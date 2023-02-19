@extends('adminlte::page')

@section('title', 'Listado Areas Comerciales')

@section('content_header')
  @include('config.commercial_area.breadcrumb')
@stop

@section('content')
  <div class="card">
    <div class="card-header">
            <div class="row">
                <div class="col-md-6"> Areas Comerciales : {{ $data->count() }}</div>
                <div class="col-md-6 text-right"><a href="{{ route('config.commercial_area.create') }}" class="btn btn-sm btn-primary"> + Nuevo </a></div>
            </div>
    </div>
    <div class="card-body">
      <table id="example" class="table table-hover dt-responsive nowrap">
        <thead class="thead-dark">
          <tr>
            <th class="text-sm">#</th>
            <th class="text-sm">Nombre</th>
            <th class="text-sm">Comentario</th>
            <th class="text-sm">Creación</th>
            <th class="text-sm">Img</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $item)
          <tr>
            <td class="text-sm">{{ $item->id }}</td>
            <td class="text-sm"> <a href="{{ route('config.commercial_area.show', $item->id) }}">{{ $item->name }}</a></td>
            <td class="text-sm">{{ $item->comment }}</td> 
            <td class="text-sm">{{ $item->created_at->format('Y-m-d') }}</td>
            <td class="text-sm">
              @if($item->image == "") 
                <img src="" width="60" class="rounded float-end">
              @else 
                <img src="{{ asset('storage/'.$item->image) }}" class="img-thumbnail" width="60">
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
     
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <link rel="styleshhet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
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