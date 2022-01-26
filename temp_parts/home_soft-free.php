<?php 
/*** Plantilla para el home SOFT-FREE***/   
$var = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'soft-free',
    ));
?>
<section class="row soft-free mb-lg-5 p-0 m-0" style="z-index:1;" id="soft-free">
  <img src="<?php echo get_template_directory_uri() . '/img/SF-yellowmovil-wave.png'; ?>" alt="Mesh4All" 
                class="p-0 m-0" id="imgbg_soft"
                style="z-index:1; height:auto; max-width:100%; position:absolute;">
  <div class="ratio ratio-16x9 " style="z-index:2;">
    <div class="col-lg-12 row p-0 m-0 h-25 ">
        <div class="col-1">
            &nbsp;
        </div>
        <div class="col-11 d-flex align-items-center ">
          <h2 class="text-uppercase">soft-free</h2>
        </div>
    </div>
    
    <div class="row p-0 m-0 mt-lg-5">
        <div class="col-lg-5 d-flex justify-content-lg-end p-lg-0 m-lg-0" >
            <!--img src="<?php echo get_template_directory_uri() . '/img/móvil.png'; ?>"-->
            &nbsp;
        </div>
        <div class="col-lg-6 mt-lg-5 mb-lg-5 pb-lg-5">
          <div class="col-lg-12 p-lg-0 m-lg-0">
            <div class="row p-lg-0 m-lg-0">

              <div class="linktext pagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#yellow_soft_c" id="yellow_soft"
                  aria-controls="#yellow_soft_c" aria-expanded="true">Pay2web</div>

              <div class="linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#blue_soft_c" id="blue_soft"
                  aria-controls="blue_soft_c" aria-expanded="true">Meshers</div>

              <div class="linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#green_soft_c" id="green_soft"
                  aria-controls="green_soft_c" aria-expanded="true">Wallet</div>

              <div class="linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#purple_soft_c" id="purple_soft"
                  aria-controls="purple_soft_c" aria-expanded="true">Apps</div>

              <div class="linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#orange_soft_c" id="orange_soft"
                  aria-controls="orange_soft_c" aria-expanded="true">Github</div>

              <div class="linktext nopagos" onclick="clicklnk(this.id);" role="button"
                  data-toggle="collapse" href="#red_soft_c" id="red_soft"
                  aria-controls="red_soft_c" aria-expanded="true">Community</div>
            </div>
            <input type="hidden" id="btnsoft_sel" value="yellow_soft"> 
          </div>
          <div class="p-lg-3 m-lg-1 mt-lg-4 soft-free-content" id="areaContent_soft">

            <div id="yellow_soft_c" class="collapse multi-collapse show border-0">
              <p class="p-lg-0 m-lg-0">Acceda a la web desde dentro del mesh. Tratando de establecer un mercado de datos en la malla local.</br></br>
              </p>
            </div>

            <div id="blue_soft_c" class="collapse multi-collapse border-0">
              <p>Conviértete en un mesher, aprende a hacerlo tú mismo.</br></br> 
            </div>

            <div id="green_soft_c" class="collapse multi-collapse border-0">
              <p>Use sus billeteras en el mesh, use bitcoin u otras criptomonedas. Lo que ya funciona en su dispositivo funcionará en el mesh.</br></br>
              </p>
            </div>

            <div id="purple_soft_c" class="collapse multi-collapse border-0">
              <p>Usa tus aplicaciones favoritas en el mesh.</br></br>
              </p>
            </div>

            <div id="orange_soft_c" class="collapse multi-collapse border-0">
              <p>Ver nuestros repositorios todo nuestro trabajo se publicará aquí regularmente</br></br>
              </p>
            </div>

            <div id="red_soft_c" class="collapse multi-collapse border-0">
              <p>Acompáñanos y participa, te necesitamos para ayudarnos a construir el mesh de nuestros sueños. Hay muchas maneras de ayudar.</br></br>
              </p>
            </div>
            <div class="col-12 d-flex flex-row div-linktextb">
                <a class="linktextb" onclick="jQuery('#yellow_soft').click();" href="#yellow_soft">
                  <div class="circle">&nbsp;</div>
                </a>
                <a class="linktextb" onclick="jQuery('#blue_soft').click();" href="#blue_soft">
                  <div class="circle">&nbsp;</div>
                </a>
                <a class="linktextb" onclick="jQuery('#green_soft').click();" href="#green_soft">
                  <div class="circle">&nbsp;</div>
                </a>
                <a class="linktextb" onclick="jQuery('#purple_soft').click();" href="#purple_soft">
                  <div class="circle">&nbsp;</div>
                </a>
                <a class="linktextb" onclick="jQuery('#orange_soft').click();" href="#orange_soft">
                  <div class="circle">&nbsp;</div>
                </a>
                <a class="linktextb" onclick="jQuery('#red_soft').click();" href="#red_soft">
                  <div class="circle">&nbsp;</div>
                </a>
              </div>
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
        jQuery('#soft-free .collapse').collapse('hide');
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