<div class="container-fluid mt-5">
  <footer class="text-center text-lg-start text-white" style="background-color: gray">
    <div class="container p-3 ">
      <section class="">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Centro Ferretero Caupolicán</h5>

            <p>
              Desde 1938, ofrecemos una amplia variedad de ceramica, porcelanto, 
              piso flotante, materiales de construcción, herramientas y ferretería en general.
            </p>
            <p>
              En nuestro sitio, podra comprar revisar sus despachos y servicio tecnico.
            </p>
          </div>
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">PRINCIPAL</h5>

            <ul class="list-unstyled mb-0">
              @foreach($menu_first as $menu_item)
                <li>
                  <a class="text-white" href="#">{{ $menu_item->name }}</a> 
                </li>
              @endforeach
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              @foreach($menu_sales as $menu_item)
                <li>
                  <a class="text-white" href="#">{{ $menu_item->name }}</a> 
                </li>
              @endforeach
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">INGRESOS</h5>

            <ul class="list-unstyled mb-0">
              @foreach($menu_links as $menu_item)
                <li>
                  <a class="text-white" href="#">{{ $menu_item->name }}</a> 
                </li>
              @endforeach
            </ul> 
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
  </footer>
</div>