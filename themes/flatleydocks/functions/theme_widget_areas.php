<?php 
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
        'name' => 'Search',
        'id' => 'search'
    ));
    
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3><div class="sidebar">',
        'name' => 'Sidebar',
        'id' => 'sidebar'
    ));
    
    register_sidebar(array(
        'before_widget' => '<div class="footer-menu-block"><div class="list-unstyled">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'name' => 'Footer Column One',
        'id' => 'footer-sidebar-column-one'
    ));
    
    register_sidebar(array(
        'before_widget' => '<div class="footer-menu-block"><div class="list-unstyled">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'name' => 'Footer Column Two',
        'id' => 'footer-sidebar-column-two'
    ));
    
    register_sidebar(array(
        'before_widget' => '<div class="footer-menu-block"><div class="list-unstyled">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 >',
        'after_title' => '</h3>',
        'name' => 'Footer Column Three',
        'id' => 'footer-sidebar-column-three'
    ));
	register_sidebar( array(
		'name' => __( 'Guarantee Section', 'wpb' ),
		'id' => 'guarantee-section',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' =>__( 'Product Section', 'wpb'),
		'id' => 'product-section',
		'description' => __( 'Appears on the static front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


   
}
?>