<?php

/**
 ** X-Theme functions and definitions
 **
 ** When using a child theme (see http://codex.wordpress.org/Theme_Development and
 ** http://codex.wordpress.org/Child_Themes), you can override certain functions
 ** (those wrapped in a function_exists()) by defining them first in your child theme's
 ** functions.php file. The child theme's functions.php file is included before the parent
 ** theme's file, so the child theme functions would be used.
 **
 ** @package X-Theme
 ** @since 1.0.0
 **/
/**
 ** Custom utility functions that required for the theme.
 ** after u can use regz_templates_get_theme_v(), 
 **/
require get_template_directory() . '/includes/helper.php';

function regz_templates_enqueue_scripts() {

	wp_enqueue_style( 'regz_templates-style', get_template_directory_uri() . '/assets/public/css/app.css', array() );
	
	wp_enqueue_script( 'regz_templates-script', get_template_directory_uri() . '/assets/public/js/app' . regz_templates_script_prefix() . '.js' , array('jquery', 'jquery-ui-core', 'jquery-ui-progressbar'), regz_templates_get_theme_v(), true );

}

add_action( 'wp_enqueue_scripts', 'regz_templates_enqueue_scripts' );
