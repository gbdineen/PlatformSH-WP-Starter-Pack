<?php 
function new_excerpt_length($length) {
    return 70;
}

add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
    return '';
}

add_filter('excerpt_more', 'new_excerpt_more');

if (function_exists('add_theme_support')) 
{
    add_theme_support('post-thumbnails');
	//add_theme_support( 'woocommerce' );
    add_theme_support( 'woocommerce', array(
		'gallery_thumbnail_image_width' => 400,
	) );
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
        )
    );
}

function load_admin_things() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_style('thickbox');
}

add_action( 'admin_enqueue_scripts', 'load_admin_things' );

add_action('init', 'my_out');

function my_out() 
{
    ob_start();
}
add_theme_support( 'menus' );



?>