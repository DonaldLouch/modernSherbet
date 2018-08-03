<?php

/*
=====================================================================
	Script Load
		- Require's Files On Load
			- Theme Options
			- Cleanup
=====================================================================
*/

	//Theme Options
		require get_template_directory().'/inc/function-admin.php';
	//Theme: Word{ress Cleanup
		require get_template_directory() . '/inc/cleanup.php';

/*
=====================================================================
	Update Checker
=====================================================================
*/

		require 'plugin-update-checker/plugin-update-checker.php';
		$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
			'https://github.com/DonaldLouch/modernSherbet',
			__FILE__,
			'modernsherbet'
		);
		$myUpdateChecker->setBranch('stable');

/*
=====================================================================
	Theme Setup
		- Adapted from WPMU DEV - https://premium.wpmudev.org/blog/functions-file/
		- Adds theme support for
			- Post Formats
			- Post Thumbnails
			- HTML5
			- Automatic Feed Links
			- Title Tag
			- and Custom Background
		- Calls and Creates the Menu
		- Sets the Header Image Size
		- Calls the CSS Editor
		- Creates the Widget Area
		- Sets Content Width
=====================================================================
*/

	function modernsherbet_support() {
//Adds the theme supports
		// Post Format
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

		// Post and Page Thumbnail
		 add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

		// Automatic Feed Links
		add_theme_support( 'automatic-feed-links' );

		// HTML5
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

		// Add's the Title Tag Support
		add_theme_support( 'title-tag' );

		//Adds custom background to the body of the pages | for CSS colours or gradients please edit the body CSS style!
		add_theme_support( "custom-background");

	}
	add_action( 'after_setup_theme', 'modernsherbet_support' );

//Adds support for the custom CSS within the settings
	add_action( 'init', 'modernsherbet_add_editor_styles' );
	function modernsherbet_add_editor_styles() {
	 //add_editor_style( 'style.css' );
	}
	add_action( 'init', 'modernsherbet_add_editor_styles' );

//Adds support for the menu
	function modernsherbet_custom_header_setup() {
	    $args = array(
	        'width'             => 1000,
	        'height'            => 175,
	    );
    add_theme_support( 'custom-header', $args );
	}
	add_action( 'after_setup_theme', 'modernsherbet_custom_header_setup' );

	/*Adds Menu Option in the Dashbord*/
	function modernsherbet_nav_menus() {
		  register_nav_menus( array(
			  'primary' => __( 'Primary Navigation', 'modernsherbet' ),
			  'sidebar' => __( 'Sidebar Navigation', 'modernsherbet' ),
			) );
	}
	add_action( 'after_setup_theme', 'modernsherbet_nav_menus' );

//Adds support for the widget area
	add_action( 'widgets_init', 'modernsherbet_widgets_init' );
	function modernsherbet_widgets_init() {
	    register_sidebar( array(
	        'name' => __( 'Main Sidebar', 'modernsherbet' ),
	        'id' => 'sidebar-1',
	        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'modernsherbet' ),
	        'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
	    ) );
	}

//Sets the content size
	if ( ! isset( $content_width ) ) $content_width = 900;

/*
=====================================================================
	Post Formats
=====================================================================
*/

add_action('template_include', 'load_single_template');
function load_single_template($template) {
  $new_template = '';

  if( is_single() ) {
    global $post;

    // Template for Post with Video Format
    if ( has_post_format( 'video' )) {
      // use template file single-video.php for video format
      $new_template = locate_template(array('single-video.php' ));
    }

		// Template for Post with Audio Format
		if ( has_post_format( 'audio' )) {
      // use template file single-audio.php for video format
      $new_template = locate_template(array('single-audio.php' ));
    }

		// Template for Post with Image Format
		if ( has_post_format( 'image' )) {
	      // use template file single-image.php for video format
	      $new_template = locate_template(array('single-image.php' ));
	   }

		 // Template for Post with Gallery Format
	 		if ( has_post_format( 'gallery' )) {
	 	      // use template file single-gallery.php for video format
	 	      $new_template = locate_template(array('single-gallery.php' ));
	 	   }
  }
  return ('' != $new_template) ? $new_template : $template;
}

/*
=====================================================================
	Load Admin CSS
=====================================================================
*/

function modernsherbet_load_admin_scripts( $hook ){

	//Prepares the scripts for load
	wp_register_style( 'lato-admin', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i' );
	wp_register_style( 'modernsherbet_admin', get_template_directory_uri() . '/inc/modernsherbet.admin.css', array(), '1.0.0', 'all' );

	//Checkes for the setting pages
	$pages_array = array(
		'appearance_page_modernsherbet_settings'
	);

	if( in_array( $hook, $pages_array ) ){
		wp_enqueue_style( 'lato-admin' );
		wp_enqueue_style( 'modernsherbet_admin' );
	} //Stops function and goes to the next function when not on the setting pages

}
add_action( 'admin_enqueue_scripts', 'modernsherbet_load_admin_scripts' );

/*
=====================================================================
	WooCommerces
		- Allows for custom style within the Theme's CSS file
=====================================================================
*/

add_theme_support( 'woocommerce' );

?>
