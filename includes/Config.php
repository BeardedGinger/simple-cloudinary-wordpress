<?php
/**
 * Configure Cloudinary API.
 */

namespace LimeCuda\SimpleCloudinary;
use Cloudinary;

class Config {

  public static function config() {

    Cloudinary::config( [
      'cloud_name' => getenv( 'CLOUD_NAME' ),
      'api_key'    => getenv( 'API_KEY' ),
      'api_secret' => getenv( 'API_SECRET' ),
    ] );
    
  }
}
