@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
        </ol>
    </nav>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-1">
                    <img src="{{ auth()->user()->adminlte_image() }}" class="img-circle" width="80">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-11">
                    <p><b>{{ auth()->user()->name }}</b></p>
                    <p>
                        <a class="btn btn-light btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa fa-address-book"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <table>
                <tr>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>WhatsApp</th>
                </tr>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="Mailto:{{ $item->email }}">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>
                        <a href="https://api.whatsapp.com/send?phone={{ $item->whatsapp }}&text=CFC ">
                            <i class="fa fa-comments"></i>
                        </a>
                    </td>
                @endforeach
            </table>
        </div>
    </div>
    <div class="card">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.worker_vacation') }}">Vacaciones</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'home.product', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <b> Producto </b>
                        </div>
                        <div class="col-8">
                            {!! Form::text('search', null, ['class' => 'form-control', 'required' => 'true', ]) !!}
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

    @isset($web_product)
        <table id="example" class="table table-hover dt-responsive nowrap">
            <thead class="thead-dark">
                <tr>
                    <th class="text-sm">Nombre</th>
                    <th class="text-sm">Marca</th>
                    <th class="text-sm">Familia</th>
                    <th class="text-sm">Precio</th>
                    <th class="text-sm">Stock</th>
                </tr>
            </thead>
            <tbody>
            @foreach($web_product as $item)
                <tr>
                    <td class="text-sm"><a href="{{ route('home.kardex', $item->code) }}">{{ $item->code .' '. $item->name }}</a></td>
                    <td class="text-sm">{{ $item->brand }}</td>
                    <td class="text-sm">{{ $item->family }}</td>
                    <td class="text-sm">$ {{number_format($item->price,0) }}</td>
                    <td class="text-sm"> {{ number_format($item->stock) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endisset

    @isset($worker_vacation)
        <table id="example" class="table table-hover dt-responsive nowrap">
            <thead class="thead-dark">
                <tr>
                    <th class="text-sm">Nombre</th>
                    <th class="text-sm">Inicio</th>
                    <th class="text-sm">Final</th>
                </tr>
            </thead>
            <tbody>
            @foreach($worker_vacation as $item)
                <tr>
                    <td class="text-sm">{{ $item->name }}</td>
                    <td class="text-sm">{{ \Carbon\Carbon::parse($item->start)->format('D d-m-Y') }}</td>
                    <td class="text-sm">{{ \Carbon\Carbon::parse($item->end)->format('D d-m-Y') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endisset

   
    

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
    <script>
        const bsCollapse = new bootstrap.Collapse('#myCollapse', {
        toggle: false
        })
    </script>
@stop