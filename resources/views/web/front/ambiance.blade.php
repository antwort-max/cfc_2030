@extends('web.front.layout.app')

@section('content')
    
    <div class="container">
      <div class="card mt-2">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-6">
              <img src="{{ asset('storage/'.$ambiance->image) }}" class="card-img-top" >
            </div>
            <div class="col-12 col-md-6">
              <h5><br>{{ $ambiance->name }}</br></h5>
              <hr>
              <?= $ambiance->comment; ?>
            </div>
          </div>
        </div> 
      </div>
    </div>

@endsection