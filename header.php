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
<div class="container-fluid p-0 m-0 h-100">

    <div class="header p-0 m-0 row">
        <nav class="navbar navbar-light col-12">
            <!--Logo-->
            <div class="col-lg-6 d-flex-lg justify-content-lg-start col-8 d-flex justify-content-start p-0 m-0">
                <a class="navbar-brand m-0 p-0"  href="<?php echo get_home_url(); ?>">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        echo '<img class="imglogo" src="' . esc_url( $custom_logo_url ) . '" alt="Logo ">';
                    ?>
                </a>
            </div>
            <!--Menú mobile-->
             <div class="d-lg-none col-4">
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
            <div class="navbar-expand-lg col-lg-6 col-2 m-0 p-0">         
                <?php
                    wp_nav_menu( array(
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse d-lg-block navbar-expand-lg',
                        'container_id'    => 'menumesh',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav mt-0 mt-lg-0 align-content-center">%3$s</ul>',
                        'theme_location'  => 'header-menu',
                        'menu_class'      => 'header-menu',  
                        'walker'          => new WP_Bootstrap_Navwalker())
                    );
                ?>
            </div>
        </nav>
        <!--/div-->
    </div><!-- header -->