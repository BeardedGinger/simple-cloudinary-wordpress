<?php
/**
 * Our main plugin class.
 */

namespace LimeCuda\SimpleCloudinary;

class Main {

  public function __construct() {

    // Load our environment variables so we can configure Cloudinary.
    $env = new \Dotenv\Dotenv( LC_SIMPLE_CLOUDINARY_PLUGIN_DIR );
    $env->load();

    // Configure Cloudinary.
    Config::config();

    // Have image uploads passed to Cloudinary.
    $uploads = new Upload_Images();
    $uploads->fire();

  }
}
