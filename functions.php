<?php
/* Libreria bootstrap para Nav - Menu */
require_once('class-wp-bootstrap-navwalker.php');

/*Definicion de rutas TEMP_PARTS*/
define( 'mesh4all_VERSION', '0.0.1' );
define( 'mesh4all_TEMP_PARTS', trailingslashit( get_template_directory() ) . 'temp_parts/' );

/*Soporte para Titulos, Imagen destacada y logo*/
function mesh4all_setup(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => false,
		'flex-width'  => false,
		'header-text' => array( 'site-title', 'site-description'),
	));
}

/*Archivos JS y CSS*/
function mesh4all_cssjs(){
	wp_enqueue_style('bootstrap_5', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap_js_5', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
	$dependencies = array('bootstrap_5');
	wp_enqueue_style( 'mesh4all-style', get_stylesheet_uri(), $dependencies );
}
function mesh4all_enqueue_scripts() {
    /*** Archivos JS BootStrap y sus dependencias ***/
    $dependencies = array('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', $dependencies, '', true );
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', $dependencies, '', true );
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', $dependencies, '', true );
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', $dependencies, '', true );
    wp_enqueue_script('mesh4alljs', get_template_directory_uri() . '/js/mesh4all.js', '', '', true );

}

/*Registro Menú Header and Footer*/
function mesh4all_register_menu() {
	register_nav_menu( 'header-menu', __('Header Menu'));
    register_nav_menu( 'footer-menu', __('Footer Menu'));
}
/****************FUNCION PARA EXTRACTO***********************/
/*function custom_excerpt_length( $length){
	return 120;
}*/

/***** FUNCIONES CUSTOM PARA EL PERSONZALIDOR *******
*****************************************************/
function custom_mesh4all_register( $wp_customize ) {

	/** Panel OPCIONES MESH4ALL HOME para el personalizador **/
    $wp_customize->add_panel( 'mesh4all', array(
        'title' => 'Mesh4all Home',
        'description' => 'Opciones personalizadas',
        'priority' => 1,
    ));
	/******* SECCIÓN PARA TÍTULO HOME *********
    ******************************************/
    $wp_customize->add_section( 'titulohome', array(
        'title' => __( 'Opciones para el inicio', 'textdomain' ),
        'panel' => 'mesh4all',
        'priority' => 1,
    ));
    /** Setting TÍTULO *********
    ***    HOME       ********/
    $wp_customize->add_setting( 'home-título', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'home-título', array(
        'label' => __( 'Ingrese título para el Home', 'textdomain' ),
        'section' => 'titulohome',
        'priority' => 1,
        'type' => 'textarea',
    ));
	/** Setting BTN-TXT *********/
    $wp_customize->add_setting( 'txt-btn', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('txt-btn', array(
        'label' => __( 'Texto Botom Home', 'textdomain' ),
        'section' => 'titulohome',
        'priority' => 1,
        'type' => 'text',
    ));
	/** Setting BTN-URL *********/
    $wp_customize->add_setting( 'url-btn', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-btn', array(
        'label' => __( 'URL Botom Home', 'textdomain' ),
        'section' => 'titulohome',
        'priority' => 2,
        'type' => 'text',
    ));
    /******* SECCIÓN EMAIL/PHONE FOOTER **********
    *********************************************/
    $wp_customize->add_section( 'footer-mail/phone', array(
        'title' => __( 'Opciones Email/Phone en el footer', 'textdomain' ),
        'panel' => 'mesh4all',
        'priority' => 2,
    ));
    /** Setting EMAIL FOOTER *********/
    $wp_customize->add_setting( 'email-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('email-footer', array(
        'label' => __( 'Ingrese email', 'textdomain' ),
        'section' => 'footer-mail/phone',
        'priority' => 1,
        'type' => 'text',
    ));
    /** Setting PHONE FOOTER *********/
    $wp_customize->add_setting( 'phonep-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('phonep-footer', array(
        'label' => __( 'Ingrese número de teléfono principal', 'textdomain' ),
        'section' => 'footer-mail/phone',
        'priority' => 2,
        'type' => 'text',
    ));
    /** Setting PHONE FOOTER *********/
    $wp_customize->add_setting( 'phones-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('phones-footer', array(
        'label' => __( 'Ingrese número de teléfono secundario', 'textdomain' ),
        'section' => 'footer-mail/phone',
        'priority' => 2,
        'type' => 'text',
    ));
    
    /******* SECCIÓN SOCIAL MEDIA FOOTER **********
    ***********************************************/
    $wp_customize->add_section( 'footer-social', array(
        'title' => __( 'Opciones social media en el footer', 'textdomain' ),
        'panel' => 'mesh4all',
        'priority' => 3,
    ));
    /** Setting SOCIAL FOOTER *********/
    $wp_customize->add_setting( 'social-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('social-footer', array(
        'label' => __( 'Ingrese social', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 1,
        'type' => 'text',
    ));
    /** Setting SOCIAL-URL *********/
    $wp_customize->add_setting( 'url-social', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-social', array(
        'label' => __( 'URL Social', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 2,
        'type' => 'text',
    ));
    /** Setting GITHUB FOOTER *********/
    $wp_customize->add_setting( 'github-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('github-footer', array(
        'label' => __( 'Usuario GitHub', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 3,
        'type' => 'text',
    ));
    /** Setting GITHUB-URL *********/
    $wp_customize->add_setting( 'url-github', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-github', array(
        'label' => __( 'URL GitHub', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 4,
        'type' => 'text',
    ));
    /** Setting MEDIUM FOOTER *********/
    $wp_customize->add_setting( 'medium-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('medium-footer', array(
        'label' => __( 'Usuario Medium', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 5,
        'type' => 'text',
    ));
    /** Setting MEDIUM-URL *********/
    $wp_customize->add_setting( 'url-medium', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-medium', array(
        'label' => __( 'URL Medium', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 6,
        'type' => 'text',
    ));
    /** Setting TWITTER FOOTER *********/
    $wp_customize->add_setting( 'twitter-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('twitter-footer', array(
        'label' => __( 'Usuario Twitter', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 7,
        'type' => 'text',
    ));
    /** Setting TWITTER-URL *********/
    $wp_customize->add_setting( 'url-twitter', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-twitter', array(
        'label' => __( 'URL Twitter', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 8,
        'type' => 'text',
    ));
    /** Setting YOUTUBE FOOTER *********/
    $wp_customize->add_setting( 'youtube-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('youtube-footer', array(
        'label' => __( 'Usuario YouTube', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 9,
        'type' => 'text',
    ));
    /** Setting YOUTUBE-URL *********/
    $wp_customize->add_setting( 'url-youtube', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-youtube', array(
        'label' => __( 'URL YouTube', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 10,
        'type' => 'text',
    ));
    /** Setting DEV FORUM FOOTER *********/
    $wp_customize->add_setting( 'devforum-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('devforum-footer', array(
        'label' => __( 'Usuario Dev Forum', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 11,
        'type' => 'text',
    ));
    /** Setting DEV FORUM-URL *********/
    $wp_customize->add_setting( 'url-devforum', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-devforum', array(
        'label' => __( 'URL Dev Forum', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 12,
        'type' => 'text',
    ));
    /** Setting DEV DISCORD FOOTER *********/
    $wp_customize->add_setting( 'devdiscor-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('devdiscor-footer', array(
        'label' => __( 'Usuario Dev Discord', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 13,
        'type' => 'text',
    ));
    /** Setting DEV DISCORD-URL *********/
    $wp_customize->add_setting( 'url-devdiscor', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-devdiscor', array(
        'label' => __( 'URL Dev Discord', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 14,
        'type' => 'text',
    ));
    /** Setting TELEGRAM FOOTER *********/
    $wp_customize->add_setting( 'telegram-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('telegram-footer', array(
        'label' => __( 'Usuario Telegram', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 15,
        'type' => 'text',
    ));
    /** Setting TELEGRAM-URL *********/
    $wp_customize->add_setting( 'url-telegram', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-telegram', array(
        'label' => __( 'URL Telegram', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 16,
        'type' => 'text',
    ));
    /** Setting LINKEDIN FOOTER *********/
    $wp_customize->add_setting( 'linkedin-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('linkedin-footer', array(
        'label' => __( 'Usuario LinkedIn', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 17,
        'type' => 'text',
    ));
    /** Setting DEV LINKEDIN-URL *********/
    $wp_customize->add_setting( 'url-linkedin', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-linkedin', array(
        'label' => __( 'URL LinkedIn', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 18,
        'type' => 'text',
    ));
    /** Setting REDDIT FOOTER *********/
    $wp_customize->add_setting( 'reddit-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('reddit-footer', array(
        'label' => __( 'Usuario Reddit', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 19,
        'type' => 'text',
    ));
    /** Setting REDDIT-URL *********/
    $wp_customize->add_setting( 'url-reddit', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-reddit', array(
        'label' => __( 'URL Reddit', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 20,
        'type' => 'text',
    ));
    /** Setting FACEBOOK FOOTER *********/
    $wp_customize->add_setting( 'facebook-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('facebook-footer', array(
        'label' => __( 'Usuario Facebook', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 21,
        'type' => 'text',
    ));
    /** Setting FACEBOOK-URL *********/
    $wp_customize->add_setting( 'url-facebook', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-facebook', array(
        'label' => __( 'URL Facebook', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 22,
        'type' => 'text',
    ));
    /** Setting THE REBOOT FOOTER *********/
    $wp_customize->add_setting( 'thereboot-footer', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('thereboot-footer', array(
        'label' => __( 'Usuario The Reboot', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 23,
        'type' => 'text',
    ));
    /** Setting THE REBOOT-URL *********/
    $wp_customize->add_setting( 'url-thereboot', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('url-thereboot', array(
        'label' => __( 'URL The Reboot', 'textdomain' ),
        'section' => 'footer-social',
        'priority' => 24,
        'type' => 'text',
    ));
    /******* SECCIÓN PARA COPY RIGHT FOOTER *********
    ************************************************/
    $wp_customize->add_section( 'copyright', array(
        'title' => __( 'Opciones copy right', 'textdomain' ),
        'panel' => 'mesh4all',
        'priority' => 4,
    ));
    /** Setting TÍTULO *********
    ***    HOME       ********/
    $wp_customize->add_setting( 'copyright', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( 'copyright', array(
        'label' => __( 'Ingrese copy right', 'textdomain' ),
        'section' => 'copyright',
        'priority' => 1,
        'type' => 'textarea',
    ));
}

/*Ejecución de acciones o funciones definidas*/
add_action('wp_enqueue_scripts', 'mesh4all_cssjs'); 				// CCS
add_action( 'wp_enqueue_scripts', 'mesh4all_enqueue_scripts' );		// Scripts Javas	
add_action('after_setup_theme', 'mesh4all_setup');					// Colocar título, logo de la página e imagen destacada desde wordpress
add_action('after_setup_theme', 'mesh4all_register_menu');			// Menú
add_action( 'customize_register', 'custom_mesh4all_register' );		// Personalizador

//add_action( 'excerpt_length' , 'custom_excerpt_length', 999 );	// Extracto