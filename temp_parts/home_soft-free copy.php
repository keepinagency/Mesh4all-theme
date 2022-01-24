<?php 
/*** Plantilla para el home SOFT-FREE***/   
$var = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'soft-free',
    ));
?>
<section class="soft-free border-0 ratio ratio-16x9 mt-lg-5 mb-lg-5 pb-lg-5">
  <div class="col-12 row mb-lg-5">
      <div class="col-1">
          &nbsp;
      </div>
      <div class="col-10 text-uppercase p-lg-5">
          <h1>soft-free</h1>
      </div>
      <div class="col-1 mt-lg-5">
          &nbsp;
      </div>
  </div>
  <div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators pb-lg-5">
      <li data-target="#mycarousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
      <li data-target="#mycarousel" data-slide-to="1" aria-label="Slide 2"></li>
      <li data-target="#mycarousel" data-slide-to="2" aria-label="Slide 3"></li>
      <li data-target="#mycarousel" data-slide-to="3" aria-label="Slide 4"></li>
      <li data-target="#mycarousel" data-slide-to="4" aria-label="Slide 5"></li>
      <li data-target="#mycarousel" data-slide-to="5" aria-label="Slide 6"></li>
    </ol>
    <div class="carousel-inner mt-lg-5 pt-lg-5">
      <div class="car carousel-item  active pt-lg-5">
        <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-yellowmovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button class="pagos"><a href="#Pagos">Pagos</a></button> 
          <button class="nopagos"><a href="#Meshers">Meshers</a></button>
          <button class="nopagos"><a href="#Wallet">Wallet</a></button>
          <button class="nopagos"><a href="#Agenda">Agenda</a></button> 
          <button class="nopagos"><a href="#Usuario">Usuario</a></button>
          <button class="nopagos"><a href="#Social">Social</a></button>
          <p class="col-lg-10" id="Pagos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
            Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
            Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
            Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
      <div class="car carousel-item  pt-lg-5">
      <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-bluemovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button class="nopagos"><a href="#Pagos">Pagos</a></button> 
          <button class="pagos"><a href="#Meshers">Meshers</a></button>
          <button class="nopagos"><a href="#Wallet">Wallet</a></button>
          <button class="nopagos"><a href="#Agenda<">Agenda</a></button> 
          <button class="nopagos"><a href="#Usuario">Usuario</a></button>
          <button class="nopagos"><a href="#Social">Social</a></button>
            <p class="col-lg-10" id="Meshers">Pellentesque condimentum, sem in lobortis consectetur, orci sapien pharetra libero, quis convallis velit odio et nunc.
                  Vestibulum bibendum gravida metus at tempus. Morbi ultrices lectus eget ipsum laoreet pretium. Quisque vitae iaculis odio. 
                  Integer venenatis ornare leo, maximus euismod nulla interdum eget. Nam in mollis sem. Pellentesque nec sollicitudin sem, a consectetur nibh. 
                  Etiam eget velit et leo rutrum feugiat.</br></br> 
                  Sed pulvinar sagittis nulla eu mattis. Suspendisse non tincidunt massa. Vestibulum convallis facilisis tortor.
              </p>
        </div>
      </div>
      <div class="car carousel-item  pt-lg-5">
      <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-greenmovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button class="nopagos"><a href="#Pagos">Pagos</a></button> 
          <button class="nopagos"><a href="#Meshers">Meshers</a></button>
          <button class="pagos"><a href="#Wallet">Wallet</a></button>
          <button class="nopagos"><a href="#Agenda">Agenda</a></button> 
          <button class="nopagos"><a href="#Usuario">Usuario</a></button>
          <button class="nopagos"><a href="#Social">Social</a></button>
          <p class="col-lg-10" id="Wallet">Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                  Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
                  Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
                  In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
                  Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
                </p>
        </div>
      </div>
      <div class="car carousel-item  pt-lg-5">
      <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-purplemovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button class="nopagos"><a href="#Pagos">Pagos</a></button> 
          <button class="nopagos"><a href="#Meshers">Meshers</a></button>
          <button class="nopagos"><a href="#Wallet">Wallet</a></button>
          <button class="pagos"><a href="#Agenda">Agenda</a></button> 
          <button class="nopagos"><a href="#Usuario">Usuario</a></button>
          <button class="nopagos"><a href="#Social">Social</a></button>
          <p class="col-lg-10" id="Agenda">Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                  Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
                  Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
                  In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
                  Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
                </p>
        </div>
      </div>
      <div class="car carousel-item  pt-lg-5">
      <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-redmovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button class="nopagos"><a href="#Pagos">Pagos</a></button> 
          <button class="nopagos"><a href="#Meshers">Meshers</a></button>
          <button class="nopagos"><a href="#Wallet">Wallet</a></button>
          <button class="nopagos"><a href="#Agenda">Agenda</a></button> 
          <button class="pagos"><a href="#Usuario">Usuario</a></button>
          <button class="nopagos"><a href="#Social">Social</a></button>
          <p class="col-lg-10" id="Usuario">Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                  Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
                  Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
                  In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
                  Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
                </p>
        </div>
      </div>
      <div class="car carousel-item  pt-lg-5">
      <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-orangemovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button class="nopagos"><a href="#Pagos">Pagos</a></button> 
          <button class="nopagos"><a href="#Meshers">Meshers</a></button>
          <button class="nopagos"><a href="#Wallet">Wallet</a></button>
          <button class="nopagos"><a href="#Agenda">Agenda</a></button> 
          <button class="nopagos"><a href="#Usuario">Usuario</a></button>
          <button class="pagos"><a href="#Social">Social</a></button>
          <p class="col-lg-10" id="Social">Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                  Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
                  Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
                  In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
                  Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
                </p>
        </div>
      </div>
    </div> 
    <!--div class="btn carousel-btn ">Ver más</div-->
  </div>


  <!--div id="carouselExampleCaptions" class="carousel fade-carousel slide" data-bs-ride="carousel" data-bs-interval="false">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Slide 1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></li>
    </ol>
    <div class="carousel-inner boder">
      <div class="carousel-item active">
        <img src="<?php echo get_template_directory_uri() . '/img/SF-yellowmovil-wave.png'; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div class="row border">
            <div class="col-lg-8 border">
              <a href="#" class="btn btn-lg btn-primary w-25">Prueba</a>
            </div>
            <div class="col-lg-9">
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri() . '/img/SF-bluemovil-wave.png'; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri() . '/img/SF-greenmovil-wave.png'; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button-->
  </div>
        
</section>
