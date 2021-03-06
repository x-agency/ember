<?php
/**
 * ember Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ember
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_EMBER_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'ember-theme-css', get_stylesheet_directory_uri() . '/css/main.css', array('astra-theme-css'), CHILD_THEME_EMBER_VERSION, 'all' );
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap');
	wp_enqueue_style( 'google-font-prata', 'https://fonts.googleapis.com/css2?family=Prata&display=swap');
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
	integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
	crossorigin="anonymous');
	wp_enqueue_style( 'fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">');
	wp_enqueue_style( 'google-font-source-sans-pro', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap');

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


function jquery_js() {
		wp_enqueue_script( 'jquery_js', get_stylesheet_directory_uri() . '/js/jquery-3.4.1.min.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'jquery_js');

function bootstrap_js() {
	   wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'bootstrap_js');

function custom_js() {
	wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'custom_js');


function wow_js() {
   wp_enqueue_script( 'wow_js', get_stylesheet_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'wow_js');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

/**
* REGISTER BOOTSTRAP NAV WALKER
**/

require_once('class-wp-bootstrap-navwalker.php');


// Add ACF Options Pages
if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
   'page_title' 	=> 'Theme General Settings',
   'menu_title'	=> 'Theme Settings',
   'menu_slug' 	=> 'theme-general-settings',
   'capability'	=> 'edit_posts',
   'redirect'		=> false
));

}