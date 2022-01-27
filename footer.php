<?php
    $email = get_option( 'email-footer', '' );
    $phonep = get_option( 'phonep-footer', '' );
    $phones = get_option( 'phones-footer', '' );

    $social = get_option( 'social-footer', '' );
    $urlsocial = get_option( 'url-social', '' );
    $github = get_option( 'github-footer', '' );
    $urlgithub = get_option( 'url-github', '' );
    $medium = get_option( 'medium-footer', '' );
    $urlmedium = get_option( 'url-medium', '' );
    $twitter = get_option( 'twitter-footer', '' );
    $urltwitter = get_option( 'url-twitter', '' );
    $youtube = get_option( 'youtube-footer', '' );
    $urlyoutube = get_option( 'url-youtube', '' );
    $devforum = get_option( 'devforum-footer', '' );
    $urldevforum = get_option( 'url-devforum', '' );

    $devdiscord = get_option( 'devdiscor-footer', '' );
    $urldevdiscord = get_option( 'url-devdiscor', '' );
    $telegram = get_option( 'telegram-footer', '' );
    $urltelegram = get_option( 'url-telegram', '' );
    $linkedin = get_option( 'linkedin-footer', '' );
    $urllinkedin = get_option( 'url-linkedin', '' );
    $reddit = get_option( 'reddit-footer', '' );
    $urlreddit = get_option( 'url-reddit', '' );
    $facebook = get_option( 'facebook-footer', '' );
    $urlfacebook = get_option( 'url-facebook', '' );
    $thereboot = get_option( 'thereboot-footer', '' );
    $urlthereboot = get_option( 'url-thereboot', '' );

    $copyright = get_option( 'copyright', '' );

?>
</div><!-- /.row -->
</div><!-- /.container -->

    <footer id="" class="col-lg-12 pr-lg-5 p-0 m-0">
        <div class="col-lg-12 pt-lg-3 barrafooter">  </div>

        <div class="row col-lg-12 p-0 m-0 pt-3 text-light footer-social">
            <div class="col-lg-1">&nbsp</div>
            
            <div class="col-lg-5 m-lg-0 p-lg-0 align-self-center">
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
                <p> <?php echo $email; ?> </br>
                    <!--?php echo $phonep; ?></br-->
                    <!--?php echo $phones; ?></br-->
                </p>
            </div>
            <div class="col-lg-2 mt-lg-3">
                <p>
                    <a class="links" href="<?php echo $urlsocial;?>" target="_blank"><?= $social;?></a></br>
                    <a class="links" href="<?php echo $urlgithub;?>" target="_blank"><?= $github;?></a></br>
                    <a class="links" href="<?php echo $urlmedium;?>" target="_blank"><?= $medium;?></a></br>
                    <a class="links" href="<?php echo $urltwitter;?>" target="_blank"><?= $twitter;?></a></br>
                    </p>
            </div>
            <div class="col-lg-2 mt-lg-3"">
                <p>
                    <a class="links"  href="<?php echo $urldevdiscord;?>" target="_blank"><?= $devdiscord;?></a></br>
                    <a class="links" href="<?php echo $urltelegram;?>" target="_blank"><?= $telegram;?></a></br>
                    <a class="links" href="<?php echo $urlyoutube;?>" target="_blank"><?= $youtube;?></a></br>
                    <a class="links" href="<?php echo $urldevforum;?>" target="_blank"><?= $devforum;?></a></br>
                </p>
            </div>
            <div class="col-lg-2 mt-lg-3"">
                <p>
                    <a class="links" href="<?php echo $urllinkedin;?>" target="_blank"><?= $linkedin;?></a></br>
                    <a class="links" href="<?php echo $urlreddit;?>" target="_blank"><?= $reddit;?></a></br>
                    <a class="links" href="<?php echo $urlfacebook;?>" target="_blank"><?= $facebook;?></a></br>
                </p>
            </div>
            <!--MENÚ-->
            <!--div class="col-12 p-0 m-0 col-lg-4 p-lg-0 m-lg-0 footer-menu">
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
            </div-->
        </div>
        <div class="col-lg-12 pt-lg-3 copyright d-flex justify-content-lg-center">
            <p class="fw-bold text">
                    <?php if (empty($copyright)) 
                        { echo "TURPIAL DEV 2021"; }
                        else{ 
                            echo $copyright;} ?>
            </p>
        </div>
    </footer>
    <?php wp_footer();?>
    </body>
</html>
