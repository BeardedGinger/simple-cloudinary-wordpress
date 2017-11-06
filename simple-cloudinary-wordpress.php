<?php
/**
 * Plugin Name: Simple Cloudinary For WordPress
 * Plugin URI:  https://limecuda.com
 * Description: Simple use of Cloudinary for WordPress
 * Author:      LimeCuda
 * Version:     0.1.0
 * Author URI:  https://limecuda.com
 *
 * @package simple-cloudinary-wordpress
 */

namespace LimeCuda\SimpleCloudinary;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Prefer the vendor directory in the wordpress root
if ( file_exists( ABSPATH . '/vendor/autoload.php' ) ) {
  require_once( ABSPATH . '/vendor/autoload.php' );
} else {
  require_once( 'vendor/autoload.php' );
}

if ( ! defined( 'LC_SIMPLE_CLOUDINARY_VERSION' ) ) {
	define( 'LC_SIMPLE_CLOUDINARY_VERSION', '0.1.0' );
}

if ( ! defined( 'LC_SIMPLE_CLOUDINARY_PLUGIN_DIR' ) ) {
	define( 'LC_SIMPLE_CLOUDINARY_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'LC_SIMPLE_CLOUDINARY_PLUGIN_URL' ) ) {
	define( 'LC_SIMPLE_CLOUDINARY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * Run our plugin.
 */
function run_lc_simple_cloudinary() {
  return new Main();
}

run_lc_simple_cloudinary();
