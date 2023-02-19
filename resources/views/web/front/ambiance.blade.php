<div class="container-fluid mt-6 pb-4 pt-2 d-none d-sm-block" style="background: #EEEEEE;">
    <div class="row">
        <div class="col">
            <h1 class="display-6 text-center">Ambientaciones</h1>
        </div>
    </div>
    <div class="row mt-2">
        
        @foreach ($ambiance as $item)

            <div class="col">
                <div class="card">
                    <a href="{{ route('web.ambiance', $item->id) }}">
                        <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" width="200">
                    </a>
                    <p style="margin-top:-50px;" class="bg-dark text-light pt-1 pb-1">
                    &nbsp;{{ $item->name }}</p>
                </div>
            </div>

        @endforeach
       
    </div>
</div>