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
<div class="container-slider bg-danger">
        <div class="col-lg-12">
            <div id="miCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <?php while ($posts_slide->have_posts()) : $posts_slide->the_post();?>

                    <li data-target="#miCarousel" data-slide-to="<?php echo $e; ?>" <?php if($e == 0) : ?> class='active'<?php endif;?>>
                    </li>
                        <?php $e++; endwhile;?>
                </ol>
                
                <!-- Contenedor de los Slider -->
                <div class="carousel-inner" role="listbox">

                <?php while($posts_slide->have_posts()) : $posts_slide->the_post(); ?>
                    <div class="item <?php if($i == 0) echo 'active';?>">
                        <img class="" src='<?php the_post_thumbnail();?>'>

                        <div class="carousel-caption visible-lg">
                            <h3 class="bg-success"><?php the_title(); ?></h3>
                            <!--p><?php the_excerpt(); ?></p-->
                        </div>

                    </div>
                    <?php $i++; endwhile; wp_reset_postdata();?>
                </div>

                <!-- Controles -->
                <a class="carousel-control-prev" href="#miCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#miCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
</div>