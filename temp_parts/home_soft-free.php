<?php 
/*** Plantilla para el home SOFT-FREE***/   
$var = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'soft-free',
    ));
?>
<section class="row soft-free mb-lg-5 p-0 m-0">
  <img src="<?php echo get_template_directory_uri() . '/img/SF-yellowmovil-wave.png'; ?>" alt="Mesh4All" 
                class="p-0 m-0" id="imgbg_soft"
                style="z-index:-5; height:auto; max-width:100%; position:absolute;">
  <div class="ratio ratio-16x9">
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
    <div class="row p-0 m-0">
        <div class="col-lg-5 d-flex justify-content-lg-end p-lg-0 m-lg-0" >
            <!--img src="<?php echo get_template_directory_uri() . '/img/móvil.png'; ?>"-->
            &nbsp;
        </div>
        <div class="col-lg-7 p-lg-0 m-lg-0 ">
          <div class="col-lg-12 p-lg-0 m-lg-0">
            <div class="row mt-5 p-lg-0 m-lg-0">
              <div class="col-3 linktext pagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#yellow_soft_c" id="yellow_soft"
                  aria-controls="#yellow_soft_c" aria-expanded="true">Pagos</div>

              <div class="col-3 linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#blue_soft_c" id="blue_soft"
                  aria-controls="blue_soft_c" aria-expanded="true">Meshers</div>

              <div class="col-3 linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#green_soft_c" id="green_soft"
                  aria-controls="green_soft_c" aria-expanded="true">Wallet</div>

              <div class="linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#purple_soft_c" id="purple_soft"
                  aria-controls="purple_soft_c" aria-expanded="true">Agenda</div>

              <div class="linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#orange_soft_c" id="orange_soft"
                  aria-controls="orange_soft_c" aria-expanded="true">Usuario</div>

              <div class="linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#red_soft_c" id="red_soft"
                  aria-controls="red_soft_c" aria-expanded="true">Social</div>
            </div>
            <input type="hidden" id="btnsoft_sel" value="yellow_soft"> 
          </div>
          <div class="p-lg-4 m-lg-1 soft-free-content" id="areaContent_soft">

            <div id="yellow_soft_c" class="collapse multi-collapse show border-0 ">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
                Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
                Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
                Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>

            <div id="blue_soft_c" class="collapse multi-collapse border-0">
              <p>Pellentesque condimentum, sem in lobortis consectetur, orci sapien pharetra libero, quis convallis velit odio et nunc.
              Vestibulum bibendum gravida metus at tempus. Morbi ultrices lectus eget ipsum laoreet pretium. Quisque vitae iaculis odio. 
              Integer venenatis ornare leo, maximus euismod nulla interdum eget. Nam in mollis sem. Pellentesque nec sollicitudin sem, a consectetur nibh. 
              Etiam eget velit et leo rutrum feugiat.</br></br> 
              Sed pulvinar sagittis nulla eu mattis. Suspendisse non tincidunt massa. Vestibulum convallis facilisis tortor.
            </p>
            </div>

            <div id="green_soft_c" class="collapse multi-collapse border-0">
              <p>Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
                Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
                In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
                Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
              </p>
            </div>

            <div id="purple_soft_c" class="collapse multi-collapse border-0">
              <p>Nunc lobortis lectus massa, vestibulum porta purus venenatis nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                Nunc eros elit, faucibus ac pharetra sit amet, ultricies in purus. Donec condimentum leo eros, hendrerit iaculis diam euismod a. 
                Morbi sit amet tellus nec metus condimentum vulputate ac a orci. Pellentesque mattis lectus at porttitor rutrum. 
                In eget est tincidunt, vestibulum urna eget, rhoncus elit.</br></br>
                Phasellus eget finibus lorem. Pellentesque eleifend egestas turpis sed malesuada. Nulla sed mattis diam. 
              </p>
            </div>

            <div id="orange_soft_c" class="collapse multi-collapse border-0">
              <p>Pellentesque condimentum, sem in lobortis consectetur, orci sapien pharetra libero, quis convallis velit odio et nunc.
                Vestibulum bibendum gravida metus at tempus. Morbi ultrices lectus eget ipsum laoreet pretium. Quisque vitae iaculis odio. 
                Integer venenatis ornare leo, maximus euismod nulla interdum eget. Nam in mollis sem. Pellentesque nec sollicitudin sem, a consectetur nibh. 
                Etiam eget velit et leo rutrum feugiat.</br></br> 
                Sed pulvinar sagittis nulla eu mattis. Suspendisse non tincidunt massa. Vestibulum convallis facilisis tortor.
              </p>
            </div>

            <div id="red_soft_c" class="collapse multi-collapse border-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet feugiat ultrices. In vestibulum auctor justo in malesuada. 
                Ut sit amet mauris in justo tristique porttitor. Vivamus egestas purus sit amet iaculis euismod. Donec sagittis malesuada vestibulum. 
                Vestibulum ultricies pretium feugiat. Nunc mattis mauris vel pharetra porta. Integer ornare porttitor tellus vitae dapibus.</br></br>
                Phasellus ultricies odio nibh, non facilisis tellus feugiat a.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
            <!--div class="col-12 p-lg-0 m-lg-0 border">
                <a class="linktextb pr-2" data-toggle="collapse" href="#pagos" aria-controls="pagos" aria-expanded="true">●</a>
                <a class="linktextb pr-2" data-toggle="collapse" href="#meshers" aria-controls="meshers" aria-expanded="true">●</a>
                <a class="linktextb pr-2" data-toggle="collapse" href="#wallet" aria-controls="wallet" aria-expanded="true">●</a>
                <a class="linktextb pr-2" data-toggle="collapse" href="#agenda" aria-controls="agenda" aria-expanded="true">●</a>
                <a class="linktextb pr-2" data-toggle="collapse" href="#usuario" aria-controls="usuario" aria-expanded="true">●</a>
                <a class="linktextb pr-2" data-toggle="collapse" href="#social" aria-controls="social" aria-expanded="true">●</a>
              </div-->
          </div>
        </div>
    </div>
  </div>  
</section>

<script>
    var links = document.getElementsByClassName('linktext');

    for (var i = 0 ; i < links.length; i++) {
        links[i].addEventListener('click' , hideText , false ) ; 
    }

    function hideText(){
        //jQuery('.soft-free-content div').hide('true');
        jQuery('.collapse').collapse('hide');
    }


    function clicklnk(idele){

      var color = idele.substring(0, idele.indexOf("_soft"));
      jQuery("#imgbg_soft").attr('src','<?php echo get_template_directory_uri() . '/img/SF-'; ?>'+color+'movil-wave.png')

      var selant = jQuery("#btnsoft_sel").val();

      

      jQuery("#"+selant).removeClass("pagos")
      jQuery("#"+selant).addClass('nopagos');
      jQuery("#"+selant).attr("aria-expanded","false");

      jQuery("#"+idele).removeClass('nopagos');
      jQuery("#"+idele).addClass('pagos');

      jQuery("#btnsoft_sel").val(idele);

    }

</script>