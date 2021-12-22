<?php 
/*** Plantilla para el home SERVICIOS***/   
$ser = new WP_Query(array(
    'post_type' => 'post',
    'category_name' => 'nosotros',
    ));
?>

<section class="sec-nosotros row justify-content-lg-center pt-lg-5 m-lg-0">
    <?php while ($ser->have_posts()) : $ser->the_post();?>

    <div class="col-lg-7 row justify-content-between rounded p-lg-3 text-light">

        <div class="col-lg-12">
            <h3 class=""><?php the_title(); ?></h3>
            <!--img src="<?php echo get_template_directory_uri() . '/img/mesh-02-500h.png'; ?>"-->
        </div>
    </div>
    <div class="col-lg-4 pt-lg-5 text-light mt-lg-5">
            <div class="col-lg-12">
                <?php the_post_thumbnail('thumbnail');?>
            </div>
            <div class="col-lg-12 mt-lg-5">
                <p><?php the_content(); ?></p>
            </div>  
    </div>

    <?php endwhile; wp_reset_postdata();?>
</section>

