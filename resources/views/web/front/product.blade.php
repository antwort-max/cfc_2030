@extends('web.front.layout.app')

@section('content')

<div class="container">
	@if($family->count() > 0) 
    	@include('web.front.component.family')
	@endif
    
	<br>
    <h1 class="display-5 text-center">Busqueda productos : <small>{{ $product->count() }}</small></h1>
	<hr>
    <div class="row mt-2">
		@foreach($product as $item)
			@include('web.front.component.product')
		@endforeach
    </div>
</div>
    
@endsection