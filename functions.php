<?php

/**
 * Child Function
 * @package Wordpress
 * @subpackage one-theme
 * @since 1.0
 * @author Matthew Hansen
 */

require_once dirname( __FILE__ ) . '/lib/modules/loadModules.php';

require_once dirname( __FILE__ ) . '/lib/core.php';

global $theOneChild;
$theOneChild = new TheOneChild;

if(  !is_admin()  ) :
  $theOneChild->assets();

  if( !function_exists( 'otc_load_child_js' ) ) :

    function otc_load_child_js() {
      wp_register_script( 'child_js', get_stylesheet_directory_uri().'/child.js', array( 'jquery' ), '1.0.0', true );
      wp_enqueue_script( 'child_js' );

    }

    add_action( 'init', 'otc_load_child_js', 12 );

  endif;

endif;
