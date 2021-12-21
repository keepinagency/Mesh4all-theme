<?php 
/*** Plantilla para el home ÚNETE***/    

    $titulo = get_option( 'home-título', '' );
    $txtbtn = get_option( 'txt-btn', '' );
    $urlbtn = get_option('url-btn', '');
   
?>

    <div class="row container-fluid col-lg-12 p-lg-5 m-lg-0 bg-dark">
       
        <!--video src="./backdropMesh.mp4" width="640" height="480"></video-->
        <div class="text-unete text-left col-lg-6">
            <?php echo $titulo; ?>
        </div>

        <div class="cta-unete rounded col-lg-12"> 
            <a href="<?php $urlbtn; ?>" class="">
                <a type="button" class="btn-unete btn btn-light rounded-pill pt-lg-2 pb-lg-2 w-25" href="<?=$urlbtn;?>">
                    <?php echo $txtbtn;?>
                </a> 
            </a>
        </div>

    </div>