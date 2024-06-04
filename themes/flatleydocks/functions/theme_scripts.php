<?php
// enqueue_style here.
function enqueue_style() {
        
        // css  
        wp_enqueue_style('boostrap-min-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('owl-carousel-min-style', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
        wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css', array(), false, 'all');
		wp_enqueue_style('font-style', get_template_directory_uri() . '/fonts/stylesheet.css', array(), false, 'all');
		
        // jquery
        wp_enqueue_script('jquery-min-script', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), false);
        wp_enqueue_script('jquery-boostrap-min-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false);
        wp_enqueue_script('jquery-owl-carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
        wp_enqueue_script('jquery-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), false, true);
      
}

add_action('wp_enqueue_scripts', 'enqueue_style');

// Register style sheet.
add_action('wp_enqueue_scripts', 'register_theme_styles');

/**
 * Register style sheet.
 */
function register_theme_styles() {
    ?>
    
    <?php
     
} 

// menu would appear in the "Theme Locations" box as "Header Menu".
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      //'sidebar-menu' => __( 'Sidebar Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>