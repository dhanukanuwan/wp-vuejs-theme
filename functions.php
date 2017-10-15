<?php
 
if ( ! function_exists( 'vuetheme_setup' ) ) {

	function vuetheme_setup() {
	 
	    load_theme_textdomain( 'vuetheme', get_template_directory() . '/languages' );
	 
	    add_theme_support( 'automatic-feed-links' );
	 
	    add_theme_support( 'post-thumbnails' );
	 
	    register_nav_menus( array(
	        'primary'   => __( 'Primary Menu', 'vuetheme' ),
	        'secondary' => __('Secondary Menu', 'vuetheme' )
	    ) );
	 
	    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

	    show_admin_bar(false);

		remove_action( 'wp_head', 'feed_links_extra', 3 );
		remove_action( 'wp_head', 'feed_links', 2 );
		remove_action( 'wp_head', 'rsd_link' );

		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'wp_generator');


	}

	add_action( 'after_setup_theme', 'vuetheme_setup' );

}

if ( ! function_exists( 'vuetheme_scripts' ) ) {

	function vuetheme_scripts() {

		wp_enqueue_style( 'vuetheme-google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,700' );
		wp_enqueue_style( 'vuetheme-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'vuetheme-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );
		wp_enqueue_style( 'vuetheme-styles', get_stylesheet_directory_uri() . '/css/main.css' );

		wp_enqueue_script( 'vuetheme-vuejs', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js', array(), '2.4.4', true );
		wp_enqueue_script( 'vuetheme-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array( 'jquery' ), '1.11.0', true );
		wp_enqueue_script( 'vuetheme-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
		wp_enqueue_script( 'vuetheme-scripts', get_stylesheet_directory_uri() . '/js/main.js', array( 'vuetheme-vuejs', 'jquery' ), '1.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'vuetheme_scripts', 999 );
}




?>