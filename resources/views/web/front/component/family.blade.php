<div class="container-fluid mt-2 d-none d-sm-block">
    <div class="row">
        @foreach ($family as $item)
        
        <div class="col-sm shadow p-3 mb-5 bg-white rounded">
            <a href="{{ route('web.family', $item->id) }}">
                <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid" alt="{{ $item->name }}" >
            </a>
        </div>
        
        @endforeach
    </div>
</div> 
