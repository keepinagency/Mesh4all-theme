<?php
	$url_int = get_option( 'instaurl', 'http://www.instagram.com' );
	$url_fbk = get_option( 'faceurl', 'http://www.facebook.com' );
	$url_twi = get_option( 'twitterurl', 'http://www.twitter.com' );

	$instalogo = get_option( 'instalogo', '/img/ico-instagram.png' );
	$faceblogo = get_option( 'facelogo', '/img/ico-facebook.png' );
	$twittlogo = get_option( 'twitterlogo', '/img/ico-twitter.png' );
	

?>
</div><!-- /.row -->
</div><!-- /.container -->

    <footer id="contacto" class="footer pb-4 m-0">
        <div class="row col-12 pl-lg-5 pr-lg-5 pb-lg-0 p-0 m-0">

            <!--div class="bg-light col-3 mt-5"></div>
            <div class="bg-muted col-3 mt-5"></div>
            <div class="bg-light col-3 mt-5">
                <div class="col-12 bg-light">hola</div>
            </div>
            <div class="bg-light col-3 mt-5">
                <div class="col-12 bg-light">chao</div>
            </div-->

            <div class="col-12 footer-linea mb-3 mt-5"></div>
            <!--SOCIAL MEDIA-->       
            <div class="footer-social col-lg-3 p-lg-0 m-lg-0 justify-content-lg-start col-12 d-flex justify-content-center align-items-center">
                <a href="<?php echo $url_int; ?>" target="_blank" class="pr-lg-3 mr-1 px-1">
                    <img src="<?php echo $instalogo; ?>" alt="" id="" class="intalogo">
                </a>
                <a href="<?php echo $url_fbk; ?>" target="_blank" class="pr-lg-3 px-1">
                    <img src="<?php echo $faceblogo;?>" alt="" id="" class="faceblogo">
                </a>
                <a href="<?php echo $url_twi;?> " target="_blank" class="pr-lg-3 px-1">
                    <img src="<?php echo $twittlogo;?>" alt="" id="" class="twittlogo">
                </a>
            </div>
            <div class="col-3">
                &nbsp;
            </div>
            
            <!--MENÚ-->
            <div class="col-12 p-0 m-0 col-lg-4 p-lg-0 m-lg-0 footer-menu">
                <nav class="navbar col-12 d-flex justify-content-center p-0 m-0 d-flex-lg justify-content-lg-end">
                    <?php 
                        wp_nav_menu( array( 
                            'menu'              => 'footer-menu',
                            'theme_location'    => 'footer-menu',
                            'container'         => 'div',
                            'container_class'   => '', 
                            'container_id'      => 'navbarNav',
                            'menu_class'        => 'nav nav-pills footer-menu',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',       
                            'walker'            => new WP_Bootstrap_Navwalker()
                        ));
                    ?>
                </nav>
            </div>
            <!--DIR URL-->
            <div class="footer-by col-lg-2 p-lg-0 m-lg-0 col-12 d-flex justify-content-lg-end justify-content-center align-items-center">
                © 2020, creado por&nbsp; <a class="footer-link" href="https://www.keepinagency.com" target="_blank" >Keepin Agency</a> 
            </div>
        </div>
        
    </footer>
    <?php wp_footer();?>
    </body>
</html>
