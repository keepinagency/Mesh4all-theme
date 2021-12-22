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

    <footer id="" class="col-lg-12 pr-lg-5 p-lg-0 m-lg-0">
        <div class="row col-lg-12 p-0 m-0 text-light bg-dark bg-gradient">
            <div class="col-lg-1">&nbsp</div>
            <div class="col-lg-6 m-lg-0 p-lg-0 align-self-center">
                <p> <?php echo $email; ?> </br>
                    <?php echo $phonep; ?></br>
                    <?php echo $phones; ?></br>
                </p>
            </div>
            <div class="col-lg-2">
                <p>
                    <a class="links" href="<?php echo $urlsocial;?>"><?= $social;?></a></br>
                    <a class="links" href="<?php echo $urlgithub;?>"><?= $github;?></a></br>
                    <a class="links" href="<?php echo $urlmedium;?>"><?= $medium;?></a></br>
                    <a class="links" href="<?php echo $urltwitter;?>"><?= $twitter;?></a></br>
                    <a class="links" href="<?php echo $urlyoutube;?>"><?= $youtube;?></a></br>
                    <a class="links" href="<?php echo $urldevforum;?>"><?= $devforum;?></a></br>
                </p>
            </div>
            <div class="col-lg-2">
                <p>
                    <a class="links"  href="<?php echo $urldevdiscord;?>"><?= $devdiscord;?></a></br>
                    <a class="links" href="<?php echo $urltelegram;?>"><?= $telegram;?></a></br>
                    <a class="links" href="<?php echo $urllinkedin;?>"><?= $linkedin;?></a></br>
                    <a class="links" href="<?php echo $urlreddit;?>"><?= $reddit;?></a></br>
                    <a class="links" href="<?php echo $urlfacebook;?>"><?= $facebook;?></a></br>
                    <a class="links" href="<?php echo $urlthereboot;?>"><?= $thereboot;?></a></br>
                </p>
            </div>
            <div class="col-lg-1">&nbsp</div>
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
            <p class="text-dark fw-bold fs-5 text"><?php echo $copyright; ?></p>
        </div>
    </footer>
    <?php wp_footer();?>
    </body>
</html>
