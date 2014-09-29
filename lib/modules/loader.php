<?php
/**
 * Module Loader
 * @package Wordpress
 * @subpackage one-theme
 * @since 1.0
 * @author Matthew Hansen
 */


if ( !function_exists( 'otc_include_modules' ) ) :
/*
 * Use 'RecursiveDirectoryIterator' if PHP Version >= 5.2.11
 */
function otc_include_modules() {
  // Include all modules from the theme (NOT the child themes)
  $modules_path = new RecursiveDirectoryIterator( get_stylesheet_directory() . '/lib/modules/' );
  $recIterator  = new RecursiveIteratorIterator( $modules_path );
  $regex        = new RegexIterator( $recIterator, '/\/module.php$/i' );

  foreach( $regex as $item ) {
    require_once $item->getPathname();
  }
}
endif;

if ( !function_exists( 'otc_include_modules_fallback' ) ) :
/*
 * Fallback to 'glob' if PHP Version < 5.2.11
 */
function otc_include_modules_fallback() {
  // Include all modules from the theme (NOT the child themes)
  foreach( glob( get_stylesheet_directory() . '/lib/modules/*/module.php' ) as $module ) {
    require_once $module;
  }
}
endif;


// PHP version control
$phpversion = phpversion();
if ( version_compare( $phpversion, '5.2.11', '<' ) ) :
  otc_include_modules();
else :
  otc_include_modules_fallback();
endif;
