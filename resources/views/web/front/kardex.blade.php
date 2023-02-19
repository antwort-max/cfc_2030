@extends('web.front.layout.app')

@section('content')

<div class="container">
	<div class="row mt-4">
		<div class="col-md-4">
        	<div class="card">
            	<div class="card-header"><b> {{ $product->name }}</b> </div>
                	<br>
                    <div class="card-body text-center">
						@if ($product->image == "")
                    		<img src="{{ asset('/img/logo_nuevo_caupolican.jpg') }}" width="400" class="img-thumbnail">
                    	@else
							<img src="{{ asset('storage/'.$product->image) }}" width="400" class="img-thumbnail">
                    	@endif
                     </div>
                    <div class="card-body">
						<div class="table-responsive">
                    		<table class="table">
                        		<tbody>
                         			<tr><th> Sku </th><td>: <a href="#"> {{ $product->code }} </a></td></tr>
                                	<tr><th> Familia </th><td>: {{ $product->sub_family }}</td></tr>
                                	<tr><th> Precio </th><td>: {{ number_format($product->price) }} x {{ $product->unit }} </td></tr>
                            	</tbody>
                        	</table>
                 		</div>
                	</div>
				</div>
			</div>

		<div class="col-md-4">
        	<div class="card">
            	<div class="card-header"><b> {{ $product->super_family }} / {{ $product->family }} </b> </div>
                <br>
        		<div class="card-body">
					<div class="table-responsive">
                  		<table class="table">
                        	<tbody>
                          		<tr><th> Marca </th><td>: {{ $product->brand }}</td></tr>                                          
                                <tr><?= $product->comment ?></tr>                                          
                                                                                                                                                                                                                                           </tbody>
							</tbody>
                  		</table>
					</div>
     			</div>
 			</div>
 		</div>
        
  	</div>
</div>
                                
@endsection