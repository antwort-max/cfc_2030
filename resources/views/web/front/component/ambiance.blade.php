<div class="col">
	<div class="card">
 		<a href="{{ route('web.ambiance', $item->id) }}">
 			<img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" width="200">
    	</a>
    	<p style="margin-top:-50px;" class="bg-dark text-light pt-1 pb-1">&nbsp;{{ $item->name }}</p>
    </div>
</div>
