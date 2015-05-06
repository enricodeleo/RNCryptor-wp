<?php

/*
Plugin Name: WP RNCryptor
Plugin URI: https://github.com/enricodeleo/RNCryptor-wp
Description: A WordPress plugin holding the RNCryptor-php library.
Version: 0.1.2
Author: Enrico Deleo
Author URI: http://enricodeleo.com
License: MIT
*/

defined('ABSPATH') or die("No script kiddies please!");

if ( file_exists( dirname( __FILE__ ) . '/vendor/RNCryptor-php/autoload.php' ) ) {
  // Initialize after all plugins are available
  add_action( 'plugins_loaded', 'rncryptor_init' );
  function rncryptor_init() {
    // Bootstrapping the RNCryptor library
    require dirname( __FILE__ ).'/vendor/RNCryptor-php/autoload.php';
  }
}


