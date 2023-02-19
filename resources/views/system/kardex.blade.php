@extends('adminlte::page')

@section('title', 'Productos Cardex')

@section('content_header')
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
        </ol>
    </nav>
@stop

@section('content')

<div class="card">
		<div class="card-header">
			{{ $web_product->name }}
		</div>
        <div class="card-body">
        	<div class="mb-1 row">
                <label class="col-sm-2 col-form-label">Familia</label>
                <div class="col-sm-4">
                    <input type="text" readonly class="form-control form-control-sm" value="{{ $web_product->family }}"> 
                </div>
                <label class="col-sm-2 col-form-label">Unidad</label>
                <div class="col-sm-4">
                    <input type="text" readonly class="form-control form-control-sm" value="{{ $web_product->unit }}"> 
                </div>
            </div>
        	<div class="mb-1 row">
                <label class="col-sm-2 col-form-label">Codigo</label>
                <div class="col-sm-4">
                    <input type="text" readonly class="form-control form-control-sm" value="{{ $web_product->code }}"> 
                </div>
                <label class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-4">
                    <input type="text" readonly class="form-control form-control-sm" value="{{ $web_product->name }}"> 
                </div>
            </div>
        	<div class="mb-1 row">
                <label class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-4">
                    <input type="text" readonly class="form-control form-control-sm" value="$ {{ number_format($web_product->price) }}"> 
                </div>
                <label class="col-sm-2 col-form-label">Stock Total</label>
                <div class="col-sm-4">
                    <input type="text" readonly class="form-control form-control-sm" value="{{ $web_product->stock }}"> 
                </div>
            </div>

		@isset($product)
			<hr>
			<div class="mb-1 row">
				<div class="col-sm-2">
					@if($product->image == "") 
						<img src="" width="60" class="rounded float-end">
					@else 
						<img src="{{ asset('storage/'.$product->image) }}" class="img-thumbnail" width="200">
					@endif
				</div>
				<div class="col-sm-10">
					<?= $product->comment ?>
				</div>
			</div>

		@endisset
 
		</div>
	</div>
    
	@isset($web_stock)
    
	<div class="row">
        <div class="col">
    		<div class="card">
        		<div class="card-header">
        			<small>Stock en todas las bodegas </small>
        		</div>
        		<div class="card-body">
          			<table class="table table-bordered dt-responsive nowrap table-hover">
                		<thead class="table-dark">
                    		<tr>
                        		<th class="text-left small">Sucursal</th>
								<th class="text-left small">Bodega</th>
                        		<th class="text-right small">Stock</th>
                    		</tr>
        				</thead>
        				<tbody>
        					@foreach($web_stock as $item)
        					</tr>
        						<td class="text-left small">{{ $item['SUCURSAL'] }} </td>
								<td class="text-left small">{{ $item['BODEGA'] }} </td>
                        		<td class="text-right small">{{ number_format($item['STOCK'],2) }}</td>
                    		</tr>
                    		@endforeach
                		</tbody>
         			</table>
      			</div>
   			</div>
        </div>

	@endisset

	@isset($sale)
        <div class="col">
        	<div class="card">
        		<div class="card-header">
        			<b><small>Informe de ventas</small></b>
        		</div>
        		<div class="card-body">
          			<table class="table table-bordered dt-responsive nowrap table-hover">
                		<thead class="table-dark">
                    		<tr>
                        		<th class="text-left small">Periodo</th>
                        		<th class="text-right small">Ventas</th>
                    		</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td class="text-left small">Ventas ultimos 7 días / {{ $mov07->count() }} </td>
                        		<td class="text-right small">{{ number_format($mov07->sum('CAPRCO1'), 2) }}</td>
                    		</tr>
                            
        					<tr>
        						<td class="text-left small">Ventas ultimos 15 días / {{ $mov15->count() }}</td>
                        		<td class="text-right small">{{ number_format($mov15->sum('CAPRCO1'), 2) }}</td>
                    		</tr>
       						<tr>
        						<td class="text-left small">Ventas ultimos 30 días / {{ $mov30->count() }}</td>
                        		<td class="text-right small">{{ number_format($mov30->sum('CAPRCO1'), 2) }}</td>
                    		</tr>
        					<tr>
        						<td class="text-left small">Ventas ultimos 60 días / {{ $mov60->count() }}</td>
                        		<td class="text-right small">{{ number_format($mov60->sum('CAPRCO1'), 2) }}</td>
                    		</tr>
                		</tbody>
         			</table>
      			</div>
   			</div>
        
        	@if(isset($buy))
        		<div class="card">
        			<div class="card-header">
        				<b><small>Informe de compra</small></b>
        			</div>
        			<div class="card-body">
          				<table class="table table-bordered dt-responsive nowrap table-hover">
                			<thead class="table-dark">
                    			<tr>
                        			<th class="text-left small">Fecha</th>
                        			<th class="text-right small">Cantidad</th>
        							<th class="text-right small">Bodega</th>
                    			</tr>
        					</thead>
        					<tbody>
        						<tr>
        							<td class="text-left small">{{ $buy->FEEMLI }} </td>
                        			<td class="text-right small">{{ number_format($buy->CAPRCO1, 2) }}</td>
        							<td class="text-right small">{{ $buy->BOSULIDO }}</td>
                    			</tr>
                			</tbody>
         				</table>
      				</div>
   				</div>
        	@endif
        
        	<div class="card">
        		<div class="card-header">
        			<b><small>Ultimas Ordenes de Compra</small></b>
        		</div>
        		<div class="card-body">
          			<table class="table table-bordered dt-responsive nowrap table-hover">
                		<thead class="table-dark">
                    		<tr>
                        		<th class="text-left small">Fecha</th>
                        		<th class="text-right small">Cantidad</th>
        						<th class="text-right small">Bodega</th>
                    		</tr>
        				</thead>
        				<tbody>
        				@foreach($po as $item)
        					<tr>
        						<td class="text-left small">{{ $item->FEEMLI, "d/m/Y" }} </td>
                        		<td class="text-right small">{{ number_format($item->CAPRCO1, 2) }}</td>
        						<td class="text-right small">{{ $item->BOSULIDO }}</td>
                    		</tr>
        				@endforeach
                		</tbody>
         			</table>
      			</div>
   			</div>
   @endif
        
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <link rel="styleshhet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

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
                responsive: true,
                autoWidth: false,
                "language": {
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
    <script> console.log('Hi!'); </script>
@stop