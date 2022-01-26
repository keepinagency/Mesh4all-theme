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
    <div class="carousel-inner mt-lg-5 pt-lg-5 ratio ratio-16x9">
      <div class="car carousel-item active pt-lg-5">
        <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-yellowmovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button type="button" class="pagos"><a class="myBtn">Pagos</a></button> 
          <button type="button"  class="nopagos"><a class="myBtn1">Meshers</a></button>
          <button type="button"  class="nopagos"><a class="myBtn2">Wallet</a></button>
          <button type="button"  class="nopagos"><a class="myBtn3">Agenda</a></button> 
          <button type="button"  class="nopagos"><a class="myBtn4">Usuario</a></button>
          <button type="button"  class="nopagos"><a class="myBtn5">Social</a></button>
          <p class="col-lg-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
            Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
            Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
            Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
      <div class="car carousel-item pt-lg-5">
      <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-bluemovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button type="button"  class="nopagos"><a class="myBtn">Pagos</a></button> 
          <button type="button"  class="pagos"><a class="myBtn1">Meshers</a></button>
          <button type="button"  class="nopagos"><a class="myBtn2">Wallet</a></button>
          <button type="button"  class="nopagos"><a class="myBtn3">Agenda</a></button> 
          <button type="button" class="nopagos"><a class="myBtn4">Usuario</a></button>
          <button type="button" class="nopagos"><a class="myBtn5">Social</a></button>
            <p class="col-lg-10">Pellentesque condimentum, sem in lobortis consectetur, orci sapien pharetra libero, quis convallis velit odio et nunc.
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
        <button type="button"  class="nopagos"><a class="myBtn">Pagos</a></button> 
          <button type="button"  class="nopagos"><a class="myBtn1">Meshers</a></button>
          <button type="button"  class="pagos"><a class="myBtn2">Wallet</a></button>
          <button type="button"  class="nopagos"><a class="myBtn3">Agenda</a></button> 
          <button type="button" class="nopagos"><a class="myBtn4">Usuario</a></button>
          <button type="button" class="nopagos"><a class="myBtn5">Social</a></button>
          <p class="col-lg-10">Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                  Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
                  Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
                  In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
                  Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
                </p>
        </div>
      </div>
      <div class="car carousel-item pt-lg-5">
      <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-purplemovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button type="button" class="nopagos">Pagos</button> 
          <button type="button" class="nopagos">Meshers</button>
          <button type="button" class="nopagos">Wallet</button>
          <button type="button" class="pagos">Agenda</button> 
          <button type="button" class="nopagos">Usuario</button>
          <button type="button" class="nopagos">Social</button>
          <p class="col-lg-10">Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                  Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
                  Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
                  In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
                  Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
                </p>
        </div>
      </div>
      <div class="car carousel-item pt-lg-5">
      <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-redmovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button type="button" class="nopagos">Pagos</button> 
          <button type="button" class="nopagos">Meshers</button>
          <button type="button" class="nopagos">Wallet</button>
          <button type="button" class="nopagos">Agenda</button> 
          <button type="button" class="pagos">Usuario</button>
          <button type="button" class="nopagos">Social</button>
          <p class="col-lg-10">Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                  Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
                  Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
                  In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
                  Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
                </p>
        </div>
      </div>
      <div class="car carousel-item pt-lg-5">
      <div class="overlay-image" style="background-image:url(<?php echo get_template_directory_uri() . '/img/SF-orangemovil-wave.png'; ?>);"></div>
        <div class="row col-lg-6 cont-nave">
          <button type="button" class="nopagos">Pagos</button> 
          <button type="button" class="nopagos">Meshers</button>
          <button type="button" class="nopagos">Wallet</button>
          <button type="button" class="nopagos">Agenda</button> 
          <button type="button" class="nopagos">Usuario</button>
          <button type="button" class="pagos">Social</button>
          <p class="col-lg-10">Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
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
</section>

<script>
jQuery(document).ready(function() {

  jQuery(".myBtn").click(function() {
    jQuery("#mycarousel").carousel(0);
  });
  jQuery(".myBtn1").click(function() {
    jQuery("#mycarousel").carousel(1);
  });
  jQuery(".myBtn2").click(function() {
    jQuery("#mycarousel").carousel(2);
  });
  jQuery(".myBtn3").click(function() {
    jQuery("#mycarousel").carousel(3);
  });
  jQuery(".myBtn4").click(function() {
    jQuery("#mycarousel").carousel(4);
  });
  jQuery(".myBtn5").click(function() {
    jQuery("#mycarousel").carousel(5);
  });
});
</script>