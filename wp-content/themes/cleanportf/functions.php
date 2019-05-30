<?php

/**************************************
 * Funcionalidades básicas
 **************************************/


function themeslug_enqueue_style() {
	 wp_enqueue_style( 'bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
	
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri() );

    wp_enqueue_style( 'fontparagraph', 'https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i', false, true );

    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700', false, true );

    wp_enqueue_script( 'jq', 'https://code.jquery.com/jquery-3.2.1.min.js', false, true );

    wp_enqueue_script( 'efeitos', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), false, true );

    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), false, true );

    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery'), false, true );

     wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', false, true );

}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );



///////* adicionar thumbnails em posts e páginas */////

function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support('custom-logo', array(
    	'size' => 'logohome'
    ));

}
add_action('after_setup_theme','add_suport_theme');

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args = array(
                'id' => 'featured-image-2',
                'post_type' => 'post',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Featured image 2',
                    'set'       => 'Set featured image 2',
                    'remove'    => 'Remove featured image 2',
                    'use'       => 'Use as featured image 2',
                )
        );

        new kdMultipleFeaturedImages( $args );
}




//add_image_size( 'logohome', 162, 162, true );

add_image_size( 'logofooter', 162, 162, true );

add_image_size( 'gridhome', 533, 533, true );

add_image_size( 'thumbSingle', 1600, 405, true );

add_image_size( 'singleHome', 628, 419, true );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ), //respectivamente 'primary menu' => __( 'nome do elemento' )
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



/**************************************
 * WOOCOMMERCE
 **************************************/

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter( 'woocommerce_enqueue_styles', '__return_false' );



/**************************************
 * includes
 **************************************/


include( get_template_directory() . '/inc/customizer.php' );

// Utiliza o gancho para adicionar nossa função
add_action( 'customize_register', 'funcao_do_customizer' );


