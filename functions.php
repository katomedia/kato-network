<?php
/**
 * Plugin Name: Kato Media Network Plugin
 * Plugin URI: https://github.com/katomedia/kato-network
 * Git URI: https://github.com/katomedia/kato-network
 * Description: Network-wide functions for WordPress
 * Version: 0.0.1
 * Author: Leo Ji
 * Author URI: http://lji.me
 */
 
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'medium-large', 800 ); //300 pixels wide (and unlimited height)
}

add_filter( 'image_size_names_choose', 'kato_network_image_custom_sizes' );

function kato_network_image_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'medium-large' => __('Medium Large'),
    ) );
}
