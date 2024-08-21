<?php

function add_theme_scripts() {

	//wp_enqueue

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.2.3', 'all' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '5.2.3', 'all' );
	wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '6.0.0', 'all' );
	wp_enqueue_style( 'techub-core', get_template_directory_uri() . '/assets/css/techub-core.css', array(), '6.0.0', 'all' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '6.0.0', 'all' );
	wp_enqueue_style( 'spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '6.0.0', 'all' );
	wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '6.0.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

	//wp_enqueue_script

	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array( 'jquery' ),'5.1.3', true );
	wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/countdown.js', array( 'jquery' ),'0.1.0', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array( 'jquery' ),'0.1.0', true );
	wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array( 'imagesloaded' ),'5.1.3', true );
	wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/jquery.counterup.min.js', array( 'jquery' ),'5.1.3', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/jsmagnific-popup.js', array( 'jquery' ),'5.1.3', true );
    wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array( 'jquery' ),'5.1.3', true );
	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/nice-select.js', array( 'jquery-ui-slider' ),'5.1.3', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/parallax.js', array( 'jquery' ),'5.1.3', true );
	wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/purecounter.js', array( 'jquery' ),'5.1.3', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick.js', array( 'jquery' ),'5.1.3', true );
    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/swiper-bundle.js', array( 'jquery' ),'5.1.3', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/wow.js', array( 'jquery' ),'5.1.3', true );
    wp_enqueue_script( 'techub-main', get_template_directory_uri() . '/assets/js/techub-main.js', array( 'jquery' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );