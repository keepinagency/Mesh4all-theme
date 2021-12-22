<?php 
/*** Plantilla para el home SERVICIOS***/   
$posts_slide = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'servicios-home',
    'order'      => 'DESC',
    ));
$i=0;
$e=0;
?>
<div class="container-slider">
    <div id="miCarousel" class="carousel slide" data-ride="carousel">
        <!-- Contenedor de los Slider -->
        <div class="carousel-inner h-100"
            style="background: right bottom no-repeat url(<?= mesh4all_IMG.'services/wave-color-up-350h.png)'?>">

        <?php 
        if ($posts_slide->have_posts()){
            while($posts_slide->have_posts()) : $posts_slide->the_post(); ?>
                <div class="item <?php if($i == 0) echo 'active';?>">
                    <img class="" src='<?php the_post_thumbnail();?>'>

                    <div class="carousel-caption visible-lg">
                        <h3 class="bg-success"><?php the_title(); ?></h3>
                        <!--p><?php the_excerpt(); ?></p-->
                    </div>

                </div>
            <?php $i++; 
            endwhile; 
            wp_reset_postdata();
        }else{
            ?>
            <div class="carousel-item active h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-red-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-orange-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-yellow-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-green-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-blue-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="col-7  h-100">
                    <div class="col-12 row p-0 m-0  w-100 h-25">
                        <div class="col-3">
                            &nbsp;
                        </div>
                        <div class="col-9 d-flex align-items-center ">
                            <h1>SERVICIOS</h1>
                        </div>
                    </div>
                    <div class="col-12 row  p-0 m-0  
                                d-flex align-items-center justify-content-center">
                        <img class="d-block w-50" 
                            src="<?= mesh4all_IMG.'services/control-purple-cutted.png'?>" alt="First slide">
                    </div>
                </div>
                <div class="col-5">
                    &nbsp;
                </div>
            </div>
            
            <?php
        }
        ?>
        </div>

        <!-- Controles -->
        <a class="carousel-control-prev p-0 m-0" href="#miCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next p-0 m-0" href="#miCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
</div>