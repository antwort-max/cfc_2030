@extends('adminlte::page')

@section('title', $title['page'])

@section('content_header')
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route($breadcrumb[0]) }}">{{ $breadcrumb[1] }}</a></li>
          <li class="breadcrumb-item"><a href="{{ route($breadcrumb[2]) }}">{{ $breadcrumb[3] }}</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route($breadcrumb[4]) }}">{{ $breadcrumb[5] }}</a></li>
      </ol>
  </nav>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
@stop

@section('content')
  <div class="card">
    <div class="card-header">
            <div class="row">
                <div class="col-md-10"> {{ $title['card'] }}</div>
                <div class="col-md-2 text-right"><a href="{{ route($route['create']) }}" class="btn btn-sm btn-primary"> + Nuevo </a></div>
            </div>
    </div>
    <div class="card-body">
      <table id="example" class="table table-hover dt-responsive nowrap">
        <thead class="thead-dark">
          <tr>
            <th class="text-sm">#</th>
            <th class="text-sm">Nombre</th>
            <th class="text-sm">Unidad</th>
            <th class="text-sm">Conversión</th>
            <th class="text-sm">Peso</th>
            <th class="text-sm">X</th>
            <th class="text-sm">Y</th>
            <th class="text-sm">Z</th>
            <th class="text-sm">Creación</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $item)
          <tr>
            <td class="text-sm">{{ $item->id }}</td>
            <td class="text-sm"> <a href="{{ route($route['show'], $item->id) }}">{{ $item->name }}</a></td>
            <td class="text-sm">{{ $item->unit_id }}</td> 
            <td class="text-sm">{{ $item->convert }}</td> 
            <td class="text-sm">{{ $item->weight }}</td> 
            <td class="text-sm">{{ $item->size_x }}</td> 
            <td class="text-sm">{{ $item->size_y }}</td> 
            <td class="text-sm">{{ $item->size_z }}</td> 
            <td class="text-sm">{{ $item->created_at }}</td>
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