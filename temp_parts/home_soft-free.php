<?php 
/*** Plantilla para el home SOFT-FREE***/   
$var = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'soft-free',
    ));
?>
<section class="row soft-free mb-lg-5 p-lg-0 m-lg-0">
  <div class="col-lg-1">
    &nbsp;
  </div>
  <div class="col-lg-10 mt-lg-5">
    <div class="col-lg-3 d-flex justify-content-lg-center">
      <h1 class="text-uppercase">soft-free</h1>
    </div>
  </div>
  <div class="col-lg-1">
      &nbsp;
  </div>
  <div class="row p-lg-0">
      <div class="col-lg-5 d-flex justify-content-lg-end p-lg-0 m-lg-0">
          <img src="<?php echo get_template_directory_uri() . '/img/móvil.png'; ?>">
      </div>
      <div class="col-lg-7 p-lg-0 m-lg-0 ">
        <div class="container col-lg-12 p-lg-0 m-lg-0">
          <nav class="nav nav-pills mt-5 p-lg-0 m-lg-0">
            <a class="nav-link" data-toggle="pill" href="#pagos">Pagos</a>
            <a class="nav-link" data-toggle="pill" href="#meshers">Meshers</a>
            <a class="nav-link" data-toggle="pill" href="#wallet">Wallet</a>
            <a class="nav-link" data-toggle="pill" href="#agenda">Agenda</a>
            <a class="nav-link active" data-toggle="pill" href="#usuario">Usuario</a>
            <a class="nav-link" data-toggle="pill" href="#social">Social</a>
          </nav>
        </div>
        <div class="tab-content p-lg-4 m-lg-1 soft-free-content">
          <div id="pagos" class="tab-pane fade border-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
              Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
              Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
              Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>

          <div id="meshers" class="tab-pane fade border-0">
            <p>Pellentesque condimentum, sem in lobortis consectetur, orci sapien pharetra libero, quis convallis velit odio et nunc.
            Vestibulum bibendum gravida metus at tempus. Morbi ultrices lectus eget ipsum laoreet pretium. Quisque vitae iaculis odio. 
            Integer venenatis ornare leo, maximus euismod nulla interdum eget. Nam in mollis sem. Pellentesque nec sollicitudin sem, a consectetur nibh. 
            Etiam eget velit et leo rutrum feugiat.</br></br> 
            Sed pulvinar sagittis nulla eu mattis. Suspendisse non tincidunt massa. Vestibulum convallis facilisis tortor.
          </p>
          </div>

          <div id="wallet" class="tab-pane fade border-0">
            <p>Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
              Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
              Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
              In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
              Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
            </p>
          </div>

          <div id="usuario" class="tab-pane fade show active border-0">
            <p>Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
              Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
              Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
              In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
              Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
            </p>
          </div>

          <div id="agenda" class="tab-pane fade border-0">
            <p>Pellentesque condimentum, sem in lobortis consectetur, orci sapien pharetra libero, quis convallis velit odio et nunc.
              Vestibulum bibendum gravida metus at tempus. Morbi ultrices lectus eget ipsum laoreet pretium. Quisque vitae iaculis odio. 
              Integer venenatis ornare leo, maximus euismod nulla interdum eget. Nam in mollis sem. Pellentesque nec sollicitudin sem, a consectetur nibh. 
              Etiam eget velit et leo rutrum feugiat.</br></br> 
              Sed pulvinar sagittis nulla eu mattis. Suspendisse non tincidunt massa. Vestibulum convallis facilisis tortor.
            </p>
          </div>

          <div id="social" class="tab-pane fade border-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
              Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
              Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
              Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </div>
      </div>
  </div>
    
</section>