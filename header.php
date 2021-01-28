<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://db.onlinewebfonts.com/c/34bdef416280c2ed8a6c311aa9af123d?family=PoynterOSDisp+Roman"
        rel="stylesheet" type="text/css" />

    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>

    <?php astra_body_top(); ?>
    <?php wp_body_open(); ?>
    <div <?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>>
        <a class="skip-link screen-reader-text"
            href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home"><?php
				echo file_get_contents( get_theme_file_uri( '/img/ember-logo.svg' ) );
				?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
	 	  wp_nav_menu( array(
	 	  'menu'              => 'main',
	 	  'theme_location'    => 'primary',
	 	  'depth'             => 2,
	 	  'container'         => 'div',
	 	  'container_class'   => '',
	 	  'container_id'      => '',
	 	  'menu_class'        => 'navbar-nav',
	 	  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	 	  'walker'            => new wp_bootstrap_navwalker())
	 	  );
	  ?>
                </div>
                <div class="nav-right">
                    <a class="patients" href="https://www.app.elationemr.com/book/EmberModernMedicine"
                        target="_blank">For Patients <i class="bi bi-person-fill"></i></a>
                    <div class="member-btn">
                        <a href="https://embermodernmedicine.hint.com/signup/membership" target="_Blank">Become A
                            Member</a>
                    </div>
                    <div class="menu-btn">
                        <!-- Button trigger modal -->
                        <!-- Button trigger modal -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Menu
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div id="content" class="site-content">

            <div class="ast-container">

                <?php astra_content_top(); ?>