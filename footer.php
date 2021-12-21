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

    <footer id="" class="col-lg-12 p-lg-0 m-lg-0">
        <div class="row col-lg-12 p-0 m-0 text-light bg-dark bg-gradient">

            <div class="col-lg-8 m-lg-0 p-lg-6">
                <p> <?php echo $email; ?> </br>
                    <?php echo $phonep; ?></br>
                    <?php echo $phones; ?></br>
                </p>
            </div>
            <div class="col-lg-2">
                <p>
                    <a href="<?php echo $urlsocial;?>"><?= $social;?></a></br>
                    <a href="<?php echo $urlgithub;?>"><?= $github;?></a></br>
                    <a href="<?php echo $urlmedium;?>"><?= $medium;?></a></br>
                    <a href="<?php echo $urltwitter;?>"><?= $twitter;?></a></br>
                    <a href="<?php echo $urlyoutube;?>"><?= $youtube;?></a></br>
                    <a href="<?php echo $urldevforum;?>"><?= $devforum;?></a></br>
                </p>
            </div>
            <div class="col-lg-2 ">
                <p>
                    <a href="<?php echo $urldevdiscord;?>"><?= $devdiscord;?></a></br>
                    <a href="<?php echo $urltelegram;?>"><?= $telegram;?></a></br>
                    <a href="<?php echo $urllinkedin;?>"><?= $linkedin;?></a></br>
                    <a href="<?php echo $urlreddit;?>"><?= $reddit;?></a></br>
                    <a href="<?php echo $urlfacebook;?>"><?= $facebook;?></a></br>
                    <a href="<?php echo $urlthereboot;?>"><?= $thereboot;?></a></br>
                </p>
            </div>
            <!--div class="col-12 footer-linea mb-3 mt-5"></div-->
            <!--SOCIAL MEDIA-->       
            <!--div class="footer-social col-lg-3 p-lg-0 m-lg-0 justify-content-lg-start col-12 d-flex justify-content-center align-items-center">
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
            </div-->
            
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
            <!--DIR URL-->
            <!--div class="footer-by col-lg-2 p-lg-0 m-lg-0 col-12 d-flex justify-content-lg-end justify-content-center align-items-center">
                © 2020, creado por&nbsp; <a class="footer-link" href="https://www.keepinagency.com" target="_blank" >TURPIAL DEV 2021</a> 
            </div-->
        </div>
        <div class="col-lg-12 d-flex justify-content-lg-center">
            <p><?php echo $copyright; ?></p>
        </div>
    </footer>
    <?php wp_footer();?>
    </body>
</html>
