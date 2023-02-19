<div class="container-fluid mt-6 pb-4 pt-2" style="background: black;">
    <div class="row">
        <div class="col">
            <h1 class="display-6 text-center text-light">Noticias</h1>
        </div>
    </div>
        <div class="row mt-2">

        @foreach ($notice as $item)

            <div class="col">
                <div class="card">
                    <img src="{{ asset('img/news/vd01.jpg') }}" class="card-img-top" width="200">
                </div>
            </div>

        @endforeach

         
        </div>
</div>