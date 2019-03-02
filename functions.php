<?php

/* ---------------------------------------------------------------------------------------------
   THEME SETUP
   --------------------------------------------------------------------------------------------- */
    
@ini_set( 'upload_max_size' , '124M' );
@ini_set( 'post_max_size', '124M');
@ini_set( 'max_execution_time', '300' );

if ( ! function_exists( 'Keane_setup' ) ) {

	function Keane_setup() {

		// Automatic feed
		add_theme_support( 'automatic-feed-links' );

		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 600;
		}

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Set post thumbnail size
		set_post_thumbnail_size( 870, 9999 );

		// Custom Image Sizes
		add_image_size( 'Keane_fullscreen', 1860, 9999 );

		// Custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 300,
			'width'       => 600,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Post formats
		add_theme_support( 'post-formats', array( 'gallery' ) );

		// Declare WooCommerce support
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// Title tag
		add_theme_support( 'title-tag' );

		//CSS
//		add_editor_style('/assets/plugins/bootstrap/css/bootstrap.min.css');
//        add_editor_style('/assets/css/essentials.css');
//        add_editor_style('/assets/css/layout.css');
//        add_editor_style('/assets/css/header-1.css');
//        add_editor_style('/assets/css/color_scheme/green.css');


		// Add nav menu
		register_nav_menu( 'primary-menu', __( 'Primary Menu', 'Keane-main' ) );
		register_nav_menu( 'mobile-menu', __( 'Mobile Menu', 'Keane-mobile' ) );
		register_nav_menu( 'social-menu', __( 'Social Menu', 'Keane-social' ) );

		// Add excerpts to pages
		add_post_type_support( 'page', array( 'excerpt' ) );

		// HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Make the theme translation ready
		load_theme_textdomain( 'Keane', get_template_directory() . '/languages' );

		wp_enqueue_style( 'Keane-style', get_template_directory_uri() . '/style.css', $dependencies );

	}
	add_action( 'after_setup_theme', 'Keane_setup' );

}
