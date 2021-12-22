<?php 
/*** Plantilla para el home ÚNETE***/    

    $titulo = get_option( 'home-título', '' );
    $txtbtn = get_option( 'txt-btn', '' );
    $urlbtn = get_option('url-btn', '');
   
?>         
    <div class="row unete container-fluid col-lg-12 m-lg-0 p-lg-0"> 
         
        <video autoplay muted loop id="video" class="video col-lg-12 p-lg-0 m-lg-0" 
            src="<?php echo get_template_directory_uri() . '/recursos/video-backdrop Mesh.mp4'; ?>" 
            width="100%" height="auto">
        </video>
        <div class="col-lg-1 d-none d-lg-block "></div>
        <div class="text-unete col-lg-5 ">
            <div class="cta-unete rounded col-lg-12">
                <?php echo $titulo; ?>
            </div>

            <div class="cta-unete rounded col-lg-12"> 
            <a href="<?php $urlbtn; ?>" class="">
                <a type="button" class="btn-unete btn btn-light rounded-pill pt-lg-3 pb-lg-3 w-25" href="<?=$urlbtn;?>">
                    <?php echo $txtbtn;?>
                </a> 
            </a>
        </div>
            
        </div>
        <div class="imagen-unete col-lg-6" >
            <img src="<?php echo get_template_directory_uri() . '/recursos/mesh-012.png'; ?>">
        </div>
        <!--div class="cta-unete rounded col-lg-12"> 
            <a href="<?php $urlbtn; ?>" class="">
                <a type="button" class="btn-unete btn btn-light rounded-pill pt-lg-3 pb-lg-3 w-25" href="<?=$urlbtn;?>">
                    <?php echo $txtbtn;?>
                </a> 
            </a>
        </div-->
        
    </div>

