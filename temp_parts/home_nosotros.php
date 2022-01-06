<?php 
/*** Plantilla para el home NOSOTROS***/   
$ser = new WP_Query(array('pagename' => 'nosotros'));


/*
style="background: url('<?= mesh4all_IMG.'mesh-02-hd2.png'?>') no-repeat; height:100%;"
  ratio rato-16x9
*/
?>


<div class="sec-nosotros p-0 m-0" id="nosotros">
    <!-- border transparente arriba -->
    <img src="<?= mesh4all_IMG.'borde-black-transp.png'?>" alt="Mesh4All" 
                class="p-0 m-0 rotateimg180"
                style="z-index:-5; height:auto; max-width:100%; position:absolute;">

    <img src="<?= mesh4all_IMG.'nosotros-meshback-letras.png'?>" alt="Mesh4All" 
                class="p-0 m-0 w-100"
                style="height: auto; max-width:100%; position:absolute; z-index:-4">

    <div id="overnosotros" class="row col-12 p-0 m-0 ratio ratio-16x9"
        >
        <?php 
        if ($ser->have_posts()){
            while ($ser->have_posts()) : $ser->the_post();?>
                
                <div class="row p-0 m-0">
                    <div class="col-lg-8 row p-0 m-0">
                        <div class="col-2 p-0 m-0">
                            &nbsp;
                        </div>
                        <div class="col-10 p-0 m-0 ">
                            <h1 class="pt-5"><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="col-lg-12 h-25">
                                &nbsp;
                            </div>
                            <div class="col-lg-12 ">
                                <?php
                                    $img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                ?>
                                <img class="d-block" 
                                    src="<?= $img_url?>" 
                                    style="width: 8vw;"
                                    alt="Mesh4All Logo">
                            </div>
                            <div class="col-lg-12 mt-lg-5 pt-lg-3">
                                <?php the_content(); ?>
                            </div>  
                    </div>
                </div>

            <?php 
            endwhile; 
            wp_reset_postdata();
        }else{
            ?>
            <div class="row p-0 m-0">
                <div class="col-lg-8 row p-0 m-0">
                    <div class="col-2 p-0 m-0">
                        &nbsp;
                    </div>
                    <div class="col-10 p-0 m-0 ">
                        <h1 class="pt-5">NOSOTROS</h1>
                    </div>
                </div>
                <div class="col-lg-4 row">
                        <div class="col-lg-12 h-25">
                            &nbsp;
                        </div>
                        <div class="col-lg-12 ">
                            <img class="d-block" 
                                src="<?= mesh4all_IMG.'mesh4all-nosotros.png'?>" 
                                style="width: 8vw;"
                                alt="Mesh4All Logo">
                        </div>
                        <div class="col-lg-12 mt-lg-5 pt-lg-3 pr-lg-3">
                            <p>
                                Lorem ipsum dolor sit amet,<br>
                                consectetur adipiscing elit.
                            </p>
                            <p>
                                Sed auctor faucibus quam, <br>
                                ac egestas ex lobortis vitae. <br>
                                Interdum et malesuada fames ac <br>
                                ante ipsum primis in faucibus. <br>
                                Aenean urna purus, consequat ut <br>
                                leo in, laoreet feugiat ligula.
                            </p>
                        </div>  
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>