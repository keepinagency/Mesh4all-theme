<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head();?>
    </head>
    <body <?php body_class();?> class="p-0 m-0">
        <?php wp_body_open();?>
<div class="container-fluid m-auto p-0 m-0 h-100 d-none d-lg-block" >
    <!-- 
        overheader: contenedor de todo el header incluyendo ÚNETE
                    El div cierra en Unete
    -->
    <div class="overheader m-0 p-0 ratio ratio-16x9">
        <!-- The video -->
        <video autoplay muted loop id="bgVideoHome" class="p-0 m-0 ratio" 
            style="max-width:100%; height: auto; position:absolute; top:0; z-index:-2;">
            <source src="<?=mesh4all_IMG.'video-backdrop-mesh.mp4'?>" type="video/mp4">
        </video>
        <!-- mesh-01_full-hd2 -->
        <img src="<?= mesh4all_IMG.'borde-black-transp.png'?>" alt="Mesh4All" class="p-0 m-0"
                style="z-index:-1;  max-width:100%; position:absolute; bottom:0;">
        
        <!-- mesh-01_full-hd2 -->
        <img src="<?= mesh4all_IMG.'home-meshback-logo.png'?>" alt="Mesh4All" class="p-0 m-0"
                style="z-index:0; height: auto; max-width:100%; position:absolute; top:0;">

        <div class="header p-0 pt-4 m-0 mt-3"> <!-- border border-warning  -->
            
            <nav class="navbar navbar-dark bg-transparent  col-12 p-0 m-0"> <!-- border border-warning  -->
                <!--Logo-->
                <div class="container-logo col-lg-3 d-flex justify-content-end p-0 m-0">
                    <a class="navbar-brand m-0 p-0 pr-2"  href="<?php echo get_home_url(); ?>">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                            if (empty($custom_logo_url)){
                                echo '<img class="imglogo ml-2" 
                                        src="'.mesh4all_IMG.'iso-mesh4all-w-letters-60.png' . '" 
                                        alt="Logo ">';
                            }else{
                                echo '<img class="imglogo" 
                                        src="' . esc_url( $custom_logo_url ) . '" 
                                        alt="Logo ">';
                            }
                        ?>
                    </a>
                </div>
                <!--Menú mobile-->
                <div class="d-lg-none col-4 ">
                    <button class="navbar-toggler d-md-block d-lg-none p-2" type="button" 
                            data-toggle="collapse" 
                            data-target="#menumesh" 
                            aria-controls="menumesh" 
                            aria-expanded="false" 
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!--Menú Desktop-->
                <div class="menu text-light navbar-expand-lg col-lg-9 col-2 m-0 p-0 pl-2">         
                    <?php
                        wp_nav_menu( array(
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse d-lg-block navbar-expand-lg pl-lg-2',
                            'container_id'    => 'menumesh',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s mt-0 mt-lg-0 align-content-center">%3$s</ul>',
                            'theme_location'  => 'header-menu',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 
                            'walker'          => new WP_Bootstrap_Navwalker())
                        );
                    ?>
                </div>
            </nav>
            <!--/div-->
        </div><!-- header -->