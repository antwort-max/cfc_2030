<div class="container-fluid" style="background: black;">
    <nav class="navbar navbar-dark navbar-expand-xl bg-black">
        <div class="container"> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    @foreach($menu_first as $menu_item)
                        <a class="nav-link active" href="#">{{ $menu_item->name }}</a>
                    @endforeach
                   
                    <a class="nav-link" href="https://www.facebook.com/CentroFerreteroCaupolican"><i class="bi bi-facebook"></i> Facebook</a>
                    <a class="nav-link"><i class="bi bi-instagram"></i> Instagram</a>
                    <a class="nav-link" href="https://www.facebook.com/CentroFerreteroCaupolican"><i class="bi bi-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </div>
    </nav>
</div>

