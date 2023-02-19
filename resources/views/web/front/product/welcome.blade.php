<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Caupolican</title>
    	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/simplex/bootstrap.min.css" integrity="sha384-FYrl2Nk72fpV6+l3Bymt1zZhnQFK75ipDqPXK0sOR0f/zeOSZ45/tKlsKucQyjSp" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" crossorigin="anonymous">
      </head>
  	<body>

		 @include('web.front.header')

    	@include('web.front.menu')

		<div class="container-fluid">

    
            <br>
            <h1 class="display-6 text-center"> Familias </h1>
                   	
          	<div class="row mt-1">
            
            @foreach($family as $item)

            <div class="card mb-3" style="width: 18rem;">
    			<div class="card-body">
      				<p class="card-text"><?= $item->comment; ?></p>
    			</div>
                <a href="{{ route('web.family', $item->id) }}">
    				<img src="{{ asset('storage/'.$item->image) }}" class="card-img-bottom">
                </a>
			</div>

    		@endforeach
            </div>
			<br>
            <h1 class="display-5 text-center">Busqueda productos {{ $product->count() }}</h1>
			<hr>
    		<div class="row mt-2">
    		

@foreach($product as $item)

	<div class="col-6">
		<div class="card mb-3" style="max-width: 550px;">
			<div class="row no-gutters">
				<div class="col-md-4">
					<a href="#" title="{{ $item->name }}">
                    	@if ($item->image == "")
                    	 	<img src="{{ asset('/img/logo_nuevo_caupolican.jpg') }}" class="card-img" width="100px">
                    	@else
							<img src="{{ asset('storage/'.$item->image) }}" class="card-img" width="100px">
                    	@endif
					</a>
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<a href="#" title="{{ $item->name }}">
							<h5 class="card-title"><b>{{ $item->name }}</b></h5>
						</a>
						<p class="card-text"><b> PRECIO $ {{ $item->price }} x {{ $item->unit }} </b> </p>
						<p class="card-text">{{ $item->code }}</p>
						<p class="card-text">STOCK {{ $item->stock . " ". $item->unit }} </p>
						<p class="card-text">
							<a href="http://200.127.0.253/web/catalogo/marca/ceramica-faboce"><small class="text-muted"> {{ $item->brand }}</small></a>
							/ <a href="http://200.127.0.253/web/catalogo/selecciona/3/Tipo%20Piedra/1"><small class="text-muted">{{ $item->family }}</small></a>
							/ <a href="http://200.127.0.253/web/catalogo/selecciona/3/Medida%2042%20x%2042/2"><small class="text-muted"> Medida 42 x 42</small></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endforeach
                        


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
   </body>
</html>