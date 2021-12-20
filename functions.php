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
        'description' => 'Opciones personales',
        'priority' => 1,
    ));
	/******* SECCIÓN PARA TÍTULO HOME **********/
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
}

/*Ejecución de acciones o funciones definidas*/
add_action('wp_enqueue_scripts', 'mesh4all_cssjs'); 				// CCS
add_action( 'wp_enqueue_scripts', 'mesh4all_enqueue_scripts' );		// Scripts Javas	
add_action('after_setup_theme', 'mesh4all_setup');					// Colocar título, logo de la página e imagen destacada desde wordpress
add_action('after_setup_theme', 'mesh4all_register_menu');			// Menú
add_action( 'customize_register', 'custom_mesh4all_register' );		// Personalizador

//add_action( 'excerpt_length' , 'custom_excerpt_length', 999 );	// Extracto