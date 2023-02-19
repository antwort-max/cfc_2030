<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1 class="display-6 text-center">Productos</h1>
        </div>
    </div>
    <div class="row mt-2">
        @foreach ($product as $item)

        <div class="col">
            <div class="card">

                @if($item->image <> "")
                    <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" width="100">
                @else 
                    <img src="{{ asset('/img/logo_nuevo_caupolican.jpg') }}" class="card-img-top" width="100">
                @endif

                <div class="card-body">
                    <P class="card-text"><strong>{{ $item->name }}</strong></P>
                    <p class="card-text"><small> SKU: {{ $item->code }} </small> <br>{{ $item->family }} <br></p>
                    <p class="card-text">Lista Precio {{ number_format($item->price * 1.05) }} {{ $item->unit }}</p>
                    <p class="card-text text-primary"><strong>Internet $ {{number_format($item->price) }} {{ $item->unit }}</strong></p>
                    <a href="#" class="btn btn-dark"><i class="bi bi-cart-plus-fill"></i> Agregar al carro</a>
                </div>
            </div>
        </div>
   
        @endforeach

    </div>
</div>

