<?php 
/*** Plantilla para el home ÚNETE***/    

    $titulo = get_option( 'home-título', '' );
    $txtbtn = get_option( 'txt-btn', '' );
    $urlbtn = get_option('url-btn', '');
   
?>

    <div class="row col-12 bg-danger container-fluid mt-3 pt-3 pb-3 p-0 m-0 pl-4 pr-4 mb-lg-3 col-lg-12 p-lg-5 ">

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