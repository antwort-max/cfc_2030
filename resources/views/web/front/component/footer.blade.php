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
 
          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
          	<div class="bd-example">
            	<address>
                	<strong>Centro Ferretero Caupolican</strong><br />
                    Matucana 959, Santiago<br />
                    Santiago, Chile<br />
                    <abbr title="Phone">Fono :</abbr><a href="tel:56939518897"> + 56 93 951 8897</a><br>
                    <strong>Correo : </strong><a href="mailto:web@cfc.cl"> web@cfc.cl</a>
                	<p>(986704)</p>
                  </address>
             </div>
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
                <a href="https://www.mts.cl/red-ferreterias-mts/ferreteria-caupolican/" class="text-white" target="_blank">Caupolican en MTS</a>
              </li>
              <li>
                <a href="https://centro-ferretero-caupolican.business.site" class="text-white" target="_blank">Caupolican en Google</a>
              </li>
              <li>
                <a href="https://www.genealog.cl/Geneanexus/empresa/CHILE/TODMxTwNzY0MDAtNw-jTw/nombre-y-rut/CENTRO-FERRETERO-CAUPOLICAN-83176400-7#gsc.tab=0&gsc.q=Centro%20Ferretero%20Caupolic%C3%A1n" class="text-white" target="_blank">Caupolican en Genealog</a>
              </li>
              <li>
                <a href="https://cfc.cl/webmail" class="text-white">Correo Caupolican</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
  </footer>
</div>