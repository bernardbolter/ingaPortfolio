<?php

function add_theme_scripts() {
	wp_enqueue_script( 'wp-api' );
	wp_enqueue_script( 'wp-api-request' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/bundle.js', array( 'jquery' ), 1.1, true );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('post'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}