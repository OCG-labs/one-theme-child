<?php

/**
 * Child Function
 * @package Wordpress
 * @subpackage one-theme
 * @since 1.0
 * @author Matthew Hansen & Bryan Haskin
 */


function otChildFunctions() {
    require_once dirname( __FILE__ ) . '/lib/modules/loader.php'; // Legacy Loader
}

add_action( 'after_setup_theme', 'otChildFunctions', 10 );

function otc_load_child_js() {
    wp_register_script( 'child_js', get_stylesheet_directory_uri().'/child.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'child_js' );
}

add_action( 'init', 'otc_load_child_js', 12 );
