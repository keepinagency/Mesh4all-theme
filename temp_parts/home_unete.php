<?php 
/*** Plantilla para el home ÚNETE***/    

$titulo = get_option( 'home-título', '' );
$txtbtn = get_option( 'txt-btn', '' );
$urlbtn = get_option('url-btn', '');
   
?>

        <div class="container-unete row container-fluid col-lg-12 p-lg-0 p-lg-3 m-lg-0 mt-lg-3"
            style="background: right bottom no-repeat url(<?= mesh4all_IMG.'mesh-01-wlogo-500h2.png'?>); z-index:2;">

            <div class="text-unete text-left align-bottom col-lg-12 m-lg-0">
                <div class="p-0 m-0 ">
                    &nbsp;
                </div>
                <div class="p-0 m-0 ">
                    <?php 
                    if (!empty($titulo)){
                        echo $titulo;
                    }else{
                        echo "ÚNETE A <br> LA RED MESH";
                    } ?>
                </div>
                <div class="cta-unete col-lg-12 p-0 m-0  "> 
                    <a href="<?php $urlbtn; ?>" >
                        <a type="button" class="btn-unete btn btn-light rounded-pill pt-lg-2 pb-lg-2 w-25" href="<?=$urlbtn;?>">
                            <?php echo $txtbtn;?>
                        </a> 
                    </a>
                </div>
            </div>
            

        </div>
    </div><!-- overheader -->