<?php 
/*** Plantilla para el home SOFT-FREE***/   
$var = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'soft-free',
    ));
?>
<section class="soft-free mt-lg-5">
    <div class="col-lg-10 mt-lg-5">
      <h1 class="text-uppercase">soft-free</h1>
    </div>

    <div class="row" style=" background-image: url('<?php echo get_template_directory_uri() . '/img/SF-yellowmovil-wave.png'; ?>'); 
                            background-repeat: no-repeat; background-size:cover; min-height:100vh;">

      <!--div class="container col-lg-8 border"-->
        <nav class="nav nav-pills">
          <a class="nav-link active" data-toggle="pill" href="#pagos">Pagos</a>
          <a class="nav-link" data-toggle="pill" href="#meshers">Meshers</a>
          <a class="nav-link" data-toggle="pill" href="#wallet">Wallet</a>
          <a class="nav-link" data-toggle="pill" href="#agenda">Agenda</a>
          <a class="nav-link" data-toggle="pill" href="#usuario">Usuario</a>
          <a class="nav-link" data-toggle="pill" href="#social">Social</a>
        </nav>
      <!--/div-->

      <div class="tab-content soft-free-content">
        
        <div id="pagos" class="tab-pane show active border-0">
          <div class="row">
            <div class="col-lg-6 d-flex justify-content-lg-end">
              <!--img src="<?php echo get_template_directory_uri() . '/img/SF-yellowmovil-wave.png'; ?>" class="img-fluid dimension"-->
            </div>
            <div class="col-lg-6 cont-nav d-flex justify-content-lg-start">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
                Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
                Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
                Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </div>

        <div id="meshers" class="tab-pane border-0">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php echo get_template_directory_uri() . '/img/tiempo.png'; ?>" class="img-fluid dimension">
            </div>
            <div class="col-lg-6 cont-nav">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
                Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
                Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
                Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </div>

        <div id="wallet" class="tab-pane border-0">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php echo get_template_directory_uri() . '/img/crypto.png'; ?>" class="img-fluid dimension">
            </div>
            <div class="col-lg-6 cont-nav">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
                Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
                Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
                Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </div>

        <div id="agenda" class="tab-pane border-0">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php echo get_template_directory_uri() . '/img/wifi.png'; ?>" class="img-fluid dimension">
            </div>
            <div class="col-lg-6 cont-nav">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
                Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
                Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
                Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </div>

        <div id="usuario" class="tab-pane border-0">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php echo get_template_directory_uri() . '/img/móvil.png'; ?>" class="img-fluid dimension">
            </div>
            <div class="col-lg-6 cont-nav">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
                Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
                Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
                Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </div>

        <div id="social" class="tab-pane border-0">
          <div class="row">
            <div class="col-lg-6">
              <img src="<?php echo get_template_directory_uri() . '/img/red.png'; ?>" class="img-fluid dimension">
            </div>
            <div class="col-lg-6 cont-nav">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
                Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
                Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
                Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </div>
      </div><!--Cierro tab-content-->
    </div><!--Cierrro div-->
        
</section>