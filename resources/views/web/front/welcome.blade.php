@extends('web.front.layout.app')

@section('content')

    <!-- @include('web.front.alarm') -->


     @include('web.front.component.carousel')

	<div class="container-fluid mt-6 pb-4 pt-2 d-none d-sm-block" style="background: #EEEEEE;">
    	<div class="row">
        	<div class="col">
            	<h1 class="display-6 text-center">Ambientaciones</h1>
        	</div>
    	</div>
    	<div class="row mt-2">
        	@foreach ($ambiance as $item)
				@include('web.front.component.ambiance')
        	@endforeach
    	</div>
	</div>

    @include('web.front.component.family')

    <div class="container mt-4">
    	<div class="row">
        	<div class="col">
            	<h1 class="display-6 text-center">Productos</h1>
        	</div>
    	</div>
    	<div class="row mt-2">
        	@foreach ($product as $item)
				@include('web.front.component.product')
        	@endforeach
    	</div>
</div>

    @include('web.front.component.notice')

@endsection