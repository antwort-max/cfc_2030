@extends('adminlte::page')

@section('title', 'Trabajadores Horas')

@section('content_header')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Trabajadores</a></li>
    <li class="breadcrumb-item active" aria-current="page">Horas faltantes Diciembre 2022</li>
  </ol>
</nav>
<hr>
@stop

@section('content')
  <div class="card">
    <div class="card-header">
      Cuenta : {{ $data->count() }}
    </div>
    <div class="card-body">
      <table id="example" class="table table-hover dt-responsive nowrap">
        <thead class="thead-dark">
          <tr>
            <th class="text-sm">Fecha</th>
            <th class="text-sm">Trabajador</th>
            <th class="text-sm">Hora</th>
            <th class="text-sm">Tipo</th>
            <th class="text-sm">Comentario</th>

          </tr>
        </thead>
        <tbody>
          @foreach($data as $item)
          <tr>
            <td class="text-sm">{{ $item->date }}</td>
            <td class="text-sm">{{ $item->worker->name }}</td> 
            <td class="text-sm">{{ $item->hours }}</td> 
            <td class="text-sm">{{ $item->type }}</td> 
            <td class="text-sm">{{ $item->comment }}</td> 

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
                    "order": [[1, "asc"]],
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