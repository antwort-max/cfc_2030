
<div class="col-6">
	<div class="card mb-3" style="max-width: 550px;">
		<div class="row no-gutters">
			<div class="col-md-4">
				<a href="{{ route('web.product', $item->code) }}" title="{{ $item->name }}">
                    @if ($item->image == "")
                    	<img src="{{ asset('/img/logo_nuevo_caupolican.jpg') }}" class="card-img" width="100px">
                    @else
						<img src="{{ asset('storage/'.$item->image) }}" class="card-img" width="100px">
                    @endif
				</a>
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<a href="{{ route('web.product', $item->code) }}" title="{{ $item->name }}"><h6 class="card-title"><b>{{ $item->name }}</b></h6></a>
					<p class="card-text"><b> PRECIO $ {{ number_format($item->price) }} x {{ $item->unit }} </b> </p>
					<p class="card-text">STOCK {{ number_format($item->stock) . " ". $item->unit }} </p>
					<p class="card-text">{{ $item->code }}</p>
					<p class="card-text">
						<a href="#"><small class="text-muted"> {{ $item->super_family }}</small></a> /
						<a href="#"><small class="text-muted">{{ $item->family }}</small></a> /
						<a href="#"><small class="text-muted">{{ $item->sub_family }}</small></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

